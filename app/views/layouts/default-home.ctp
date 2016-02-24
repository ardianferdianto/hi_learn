<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $title_for_layout; ?></title>
<link rel="icon" type="image/png" href="<?php echo $this->webroot; ?>favicon.ico"/>
<?php echo $html->css('/homenew/main'); ?>


?>


<?php echo $javascript->link('/homenew/js/jquery-1.7.min.js'); ?>
<?php echo $javascript->link('/homenew/js/TweenMax.min.js'); ?>

<script type="text/javascript">
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
	    $( "#carouselContainer" ).animate({
          top:"150%"
          
        }, 1000, function() {
        	$( ".loader" ).fadeIn();
        	$( ".statusload" ).fadeIn();

        	setTimeout(function() {
        		$('#notificationnotfound').fadeIn();
        		$( ".loader" ).hide();
        		$( ".statusload" ).hide();
        		setTimeout(function() {
        			$('#notificationnotfound').fadeOut();
        			$( "#carouselContainer" ).animate({
         			 	top:"55%"
        			});

        		},3500)

    			
      		},3500);
   		});


	});
});
</script>

</head>
	<body>

<img id="logo" src="<?php echo $this->webroot;?>homenew/images/logo.png"/>
<p class="statusload" style="font-size:11.5px;display:none;margin-top:30px;color:#fff;">Memuat data <br/>Mohon menunggu...</p>
<div id="notificationnotfound">
	<h2>Maaf</h2>
	<p>Saat ini content yang anda minta belum tersedia</p>
</div>


<!--Main Body Ends -->

</body>
</html>
