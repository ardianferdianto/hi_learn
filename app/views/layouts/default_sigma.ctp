<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $title_for_layout; ?></title>
<link rel="icon" type="image/png" href="<?php echo $this->webroot; ?>favicon.ico"/>

<?php echo $html->css('/resources/css/reset'); ?>
<?php echo $html->css('/homenew/styles/main');?>
<?php echo $html->css('/resources/css/style'); 
echo $html->css(array('print'), 'stylesheet', array('media' => 'print','id'=>'printCSS'));
//echo $html->css(array('print-preview'), 'alternate stylesheet', array('media' => 'screen','id'=>'previewCSS','disabled'=>'true'));
?>
<?php echo $html->css('plugin/dataTables'); ?>
<?php echo $html->css('/resources/css/invalid'); ?>
<?php echo $html->css('/resources/css/jquery.countdown'); 
echo $html->css('/resources/css/dd.css');
echo $html->css('/resources/css/tango/skin.css');?>
<?php echo $html->css('/sigma/font-awesome/css/font-awesome.css'); ?>
<?php echo $html->css('/sigma/styles/basic.css'); ?>
<link rel="stylesheet" type="text/css" media="only screen and (max-width: 960px)" href="<?php echo $this->webroot;?>sigma/styles/mobile.css" />





<?php /*echo $javascript->link('/homenew/js/jquery-1.7.min.js');*/ ?>
<?php echo $javascript->link('/homenew/js/TweenMax.min.js'); ?>
<?php echo $javascript->link('/sigma/js/jquery-2.1.4.min.js'); ?>
<?php// echo $javascript->link('/sigma/js/script.js'); ?>

<?php echo $javascript->link('/resources/scripts/facebox.js'); ?>

<style>
   #overlay{
       position: fixed;
       z-index: 1000;
       left: 0;
       top: 100px;
       width: 25px;
       height: 20px;
       border-radius: 0 20px 20px 0;
       padding: 5px;
       background: rgba(242, 101, 34, 0.8);
       overflow: hidden;

       -webkit-transition: all 0.5s ease;
       -moz-transition: all 0.5s ease;
       -ms-transition: all 0.5s ease;
       -o-transition: all 0.5s ease;
       transition: all 0.5s ease;
   }
   #overlay:hover{
       width: 200px;
   }

   #overlay a{
       text-shadow: none;
       margin-left: 5px;
       font-size: 14px;
       width: 100%;
       float: left;
       color: #fff;
   }

   img.logoedusoft_bottom{
    position: absolute;
    bottom: 0px;
    left:145px;
 }
   

</style>
<script type="text/javascript">

jQuery(document).ready(function($) {
  $('a[rel*=_modal]').facebox() 
})
// set and cache variables
var w, container, carousel, item, radius, itemLength, rY, ticker, fps; 
var mouseX = 0;
var mouseY = 0;
var mouseZ = 0;
var addX = 0;


// fps counter created by: https://gist.github.com/sharkbrainguy/1156092,
// no need to create my own :)
var fps_counter = {
	
	tick: function () 
	{
		// this has to clone the array every tick so that
		// separate instances won't share state 
		this.times = this.times.concat(+new Date());
		var seconds, times = this.times;

		if (times.length > this.span + 1) 
		{
			times.shift(); // ditch the oldest time
			seconds = (times[times.length - 1] - times[0]) / 1000;
			return Math.round(this.span / seconds);
		} 
		else return null;
	},

	times: [],
	span: 20
};
var counter = Object.create(fps_counter);



$(document).ready( init )

function init()
{
	w = $(window);
	container = $( '#contentContainer' );
	carousel = $( '#carouselContainer' );
	item = $( '.carouselItem' );
	itemLength = $( '.carouselItem' ).length;
	fps = $('#fps');
	rY = 360 / itemLength;
	radius = Math.round( (250) / Math.tan( Math.PI / itemLength ) );
	
	// set container 3d props
	TweenMax.set(container, {perspective:600})
	TweenMax.set(carousel, {z:-(radius)})
	
	// create carousel item props
	
	for ( var i = 0; i < itemLength; i++ )
	{
		var $item = item.eq(i);
		var $block = $item.find('.carouselItemInner');
		
//thanks @chrisgannon!        
TweenMax.set($item, {rotationY:rY * i, z:radius, transformOrigin:"50% 50% " + -radius + "px"});
		
		animateIn( $item, $block )						
	}
	
	// set mouse x and y props and looper ticker
	window.addEventListener( "mousemove", onMouseMove, false );
	ticker = setInterval( looper, 1000/60 );			
}

function animateIn( $item, $block )
{
	var $nrX = 360 * getRandomInt(2);
	var $nrY = 360 * getRandomInt(2);
		
	var $nx = -(2000) + getRandomInt( 4000 )
	var $ny = -(2000) + getRandomInt( 4000 )
	var $nz = -4
	000 +  getRandomInt( 4000 )
		
	var $s = 1.5 + (getRandomInt( 10 ) * .1)
	var $d = 1 - (getRandomInt( 8 ) * .1)
	
	TweenMax.set( $item, { autoAlpha:1, delay:$d } )	
	TweenMax.set( $block, { z:$nz, rotationY:$nrY, rotationX:$nrX, x:$nx, y:$ny, autoAlpha:0} )
	TweenMax.to( $block, $s, { delay:$d, rotationY:0, rotationX:0, z:0,  ease:Expo.easeInOut} )
	TweenMax.to( $block, $s-.5, { delay:$d, x:0, y:0, autoAlpha:1, ease:Expo.easeInOut} )
}

function onMouseMove(event)
{
	mouseX = -(-(window.innerWidth * .5) + event.pageX) * .0025;
	mouseY = -(-(window.innerHeight * .5) + event.pageY ) * .01;
	mouseZ = -(radius) - (Math.abs(-(window.innerHeight * .5) + event.pageY ) - 200);
}

// loops and sets the carousel 3d properties
function looper()
{
	addX += mouseX
	TweenMax.to( carousel, 1, { rotationY:addX, rotationX:mouseY, ease:Quint.easeOut } )
	TweenMax.set( carousel, {z:mouseZ } )
	fps.text( 'Framerate: ' + counter.tick() + '/60 FPS' )	
}

function getRandomInt( $n )
{
	return Math.floor((Math.random()*$n)+1);	
}


</script>

<script type="text/javascript">
$(function(){
	$(".carouselItem").on('click', function(){

		var clickedItem = $(this);
		var urlClicked = $(clickedItem).data('url');

	    $( "#carouselContainer" ).animate({
          top:"150%"
          
        }, 1000, function() {
        	$( ".loader" ).fadeIn();
        	$( ".statusload" ).fadeIn();

        	if ((clickedItem).attr('data-url')) {

	        	window.location.href = "<?php echo $this->webroot;?>"+urlClicked;
	      		console.log(urlClicked);

	      	}else if( clickedItem.hasClass('dataout')){
	      		serverlocation = "http://"+location.hostname;
	      		window.location.href = serverlocation+'/sims';
	      	
	      	}else if( clickedItem.hasClass('dataelips')){
	      		window.location.href = 'http://localhost/client';
	      	}else{

	      		setTimeout(function() {
	        		$('#notificationnotfound').fadeIn();
	        		$( ".loader" ).hide();
	        		$( ".statusload" ).hide();
	        		setTimeout(function() {
	        			$('#notificationnotfound').fadeOut();
	        			$( "#carouselContainer" ).animate({
	         			 	top:"52%"
	        			});

	        		},2500)
	      		},3500);
	      		
	      		
	      		
	      	}
   		});


	});
});
</script>

</head>

	<body id="homenew">
<div id="logocontainer">
	
	<img id="logo" src="<?php echo $this->webroot;?>homenew/images/logo.png"/>
	<img id="class" src="<?php echo $this->webroot;?>resources/images/for_sma.png"/>
</div>
<p class="statusload" style="font-size:11.5px;display:none;margin-top:30px;color:#fff;">Memuat data <br/>Mohon menunggu...</p>
<div id="notificationnotfound">
	<h2>Maaf</h2>
	<p>Konten yang anda inginkan belum ada permintaan</p>
</div>

<?php e($content_for_layout); ?>


<!--Main Body Ends -->

</body>
</html>
