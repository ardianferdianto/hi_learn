<!doctype html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<script>(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)</script>
	<meta charset="utf-8">
	<style>
	.js #features {
	margin-left: -12000px; width: 100%;
}
#videocontent{
	width: 100%;
}
#prevpage{
  background: #384047;
  margin: 0 auto;
  text-align: center;
}
#prevpage h3{
  margin-bottom: 30px;
  display: block;
  color: #fff;
}
</style>
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
	   Remove this if you use the .htaccess -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!--  Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
	<link rel="icon" type="image/png" href="<?php echo $this->webroot; ?>favicon.ico"/>
	<title>SKOPE</title>
	
	<!-- Bootstrap core CSS -->
    <link href="<?php echo $this->webroot;?>css/bootstrap.min.css" rel="stylesheet">
	<!-- CSS : implied media="all" -->
	<?php echo $html->css('/wow_book/css/style.css?v=2'); ?>
	<?php echo $html->css('/wow_book/wow_book.css'); ?>
	<?php echo $html->css('/wow_book/css/preview.css'); ?>
	<?php echo $html->css('nanoscroller'); ?>
	<?php echo $html->css('component_lesson'); ?>
	<?php echo $html->css('jquery.fancybox'); ?>

    <?php echo $html->css('helpers/jquery.fancybox-buttons.css?v=1.0.5'); ?>
    <?php echo $html->css('helpers/jquery.fancybox-thumbs.css?v=1.0.7'); ?>

	<?php echo $javascript->link('ckeditor/ckeditor.js'); ?>




	<!--<link href='http://fonts.googleapis.com/css?family=News+Cycle' rel='stylesheet' type='text/css'>
	<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
	<?php echo $javascript->link('modernizr.custom.39460.js'); ?>
	<?php echo $javascript->link('jquery-2.1.4.min.js'); ?>
	<!--<?php echo $javascript->link('video5.js'); ?>-->
	<?php echo $javascript->link('jwplayer.js'); ?>

	<?php echo $javascript->link('jquery.fancybox.pack.js'); ?>
    <?php echo $javascript->link('/css/helpers/jquery.fancybox-buttons.js?v=1.0.5'); ?>
    <?php echo $javascript->link('/css/helpers/jquery.fancybox-media.js?v=1.0.6'); ?>
    <?php echo $javascript->link('/css/helpers/jquery.fancybox-thumbs.js?v=1.0.7'); ?>
<script type="text/javascript">jwplayer.key="J0+IRhB3+LyO0fw2I+2qT2Df8HVdPabwmJVeDWFFoplmVxFF5uw6ZlnPNXo=";


</script>

</head>
<body>
	<div id="penelitiancontent" style="">
	<div class="container-fluid">
		<div class="makecenter">
		<a class="btn btn-warning glyphicon glyphicon-chevron-left" title="Kembali" href="<?php echo $this->webroot; ?>halamen/cari"></a>

		<a class="btn btn-danger glyphicon glyphicon-edit" title="Edit" href="<?php echo $this->webroot; ?>halamen/write/<?php echo $lessonEdit; ?>"></a>
		<a class="btn btn-success glyphicon glyphicon-home" title="Awal" href="<?php echo $this->webroot; ?>"></a>
		<a class="btn btn-primary glyphicon glyphicon-plus" title="Buat" href="<?php echo $this->webroot; ?>halamen/createnew"></a>
		<a id="preview_left_ico" class="btn btn-warning glyphicon glyphicon-search" title="Mikroskop" href="#"></a>
		</div>
	</div>

			
	<?php e($content_for_layout); ?>
	<!-- scripts concatenated and minified via ant build script-->
	<?php echo $javascript->link('/wow_book/js/plugins.js'); ?>
	<?php echo $javascript->link('/wow_book/js/script.js'); ?>
	
	
	<!-- end concatenated and minified scripts-->

	<!--[if lt IE 7 ]>
	<script src="js/libs/dd_belatedpng.js"></script>
	<script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
	<![endif]-->

	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    
    <script src="<?php echo $this->webroot;?>js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
</body>
</html>
