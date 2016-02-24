<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $title_for_layout; ?></title>
<link rel="icon" type="image/png" href="<?php echo $this->webroot; ?>favicon.ico"/>
<?php echo $html->css('/homenew/styles/main'); ?>





<?php echo $javascript->link('/homenew/js/jquery-1.7.min.js'); ?>
<?php echo $javascript->link('/homenew/js/TweenMax.min.js'); ?>



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

	      		window.location.href = 'http://localhost/sims';
	      	

	      	}else{

	      		setTimeout(function() {
	        		$('#notificationnotfound').fadeIn();
	        		$( ".loader" ).hide();
	        		$( ".statusload" ).hide();
	        		setTimeout(function() {
	        			$('#notificationnotfound').fadeOut();
	        			$( "#carouselContainer" ).animate({
	         			 	top:"55%"
	        			});

	        		},2500)
	      		},3500);
	      		
	      		
	      		
	      	}
   		});


	});
});
</script>
<style type="text/css">
#flashMessage,#authMessage{
	background-color: #fac527;
	color: #fff;
	width:60%;
	margin: 0 auto;
	padding: 10px 0;
	margin-top: -10px;
	margin-bottom: 5px;
}
</style>
</head>
	<body id="homenew">

<div id="logocontainer">
	<img id="logo" src="<?php echo $this->webroot;?>homenew/images/logo.png"/>
	<img class="logoedusoft_bottom" src="<?php echo $this->webroot;?>images/logo-edu-small.png"/>
	<img id="class" src="<?php echo $this->webroot;?>sigma/img/for_sma.png"/>
</div>

<p class="statusload" style="font-size:11.5px;display:none;margin-top:30px;">Memuat data <br/>Mohon menunggu...</p>
<div id="notificationnotfound">
	<h2>Maaf</h2>
	<p>Saat ini content yang anda minta belum tersedia</p>
</div>


<div class="loginformcontainer">
	<?php $session->flash(); ?>
	<?php $session->flash('auth')?>
	<?php e($content_for_layout); ?>
</div>



<div class="bubble"></div>
<!--First Bubble Ends -->

<!--Second Bubble Starts -->
<div class="bubble2"></div> 
<!--Second Bubble Ends -->

<!--Third Bubble Starts -->
<div class="bubble3"></div> 
<!--Third Bubble Ends -->

<!--Fourth Bubble Starts -->
<div class="bubble4"></div>
<!--Fourth Bubble Ends -->

<!--Fifth Bubble Starts --> 
<div class="bubble5"></div> 
<!--Fifth Bubble Ends --> 

<!--Sixth Bubble Starts --> 
<div class="bubble6"></div> 
<!--Sixth Bubble Ends --> 
<!--Bubble Ends -->



<!--Bubble Starts -->
<!--First Bubble Starts -->
<div class="bubble7"></div>
<!--First Bubble Ends -->

<!--Second Bubble Starts -->
<div class="bubble8"></div> 
<!--Second Bubble Ends -->

<!--Third Bubble Starts -->
<div class="bubble9"></div> 
<!--Third Bubble Ends -->

<!--Fourth Bubble Starts -->
<div class="bubble10"></div>
<!--Fourth Bubble Ends -->

<!--Fifth Bubble Starts --> 
<div class="bubble11"></div> 
<!--Fifth Bubble Ends --> 

<!--Sixth Bubble Starts --> 
<div class="bubble12"></div> 


<!--Main Body Ends -->

</body>
</html>

