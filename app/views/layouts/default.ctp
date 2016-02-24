<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $title_for_layout; ?></title>
<link rel="icon" type="image/png" href="<?php echo $this->webroot; ?>favicon.ico"/>

<?php echo $html->css('/resources/css/reset'); ?>
<?php echo $html->css('/resources/css/style'); 
echo $html->css(array('print'), 'stylesheet', array('media' => 'print','id'=>'printCSS'));
//echo $html->css(array('print-preview'), 'alternate stylesheet', array('media' => 'screen','id'=>'previewCSS','disabled'=>'true'));
?>
<?php echo $html->css('plugin/dataTables'); ?>
<?php echo $html->css('/resources/css/invalid'); ?>
<?php echo $html->css('/resources/css/jquery.countdown'); 
echo $html->css('/resources/css/dd.css');
echo $html->css('/resources/css/tango/skin.css');

echo $html->css('/homenew/styles/tooltipster.css');

echo $html->css('/homenew/styles/themes/tooltipster-light.css');
echo $html->css('/homenew/styles/themes/tooltipster-noir.css');
echo $html->css('/homenew/styles/themes/tooltipster-punk.css');
echo $html->css('/homenew/styles/themes/tooltipster-shadow.css');
echo $html->css('/resources/css/bookblock.css');
echo $html->css('/resources/css/component.css');

echo $html->css('/resources/scripts/fancybox/jquery.fancybox.css');


?>


<?php 
echo $javascript->link('/resources/scripts/modernizr.custom.39460.js');
echo $javascript->link('jquery-1.7.1.min.js'); 

echo $javascript->link('/resources/scripts/jquery.tooltipster.js');
?>

<?php echo $javascript->link('/resources/scripts/simpla.jquery.configuration.js'); 
echo $javascript->link('print-preview.js');
?>
<?php echo $javascript->link('/resources/scripts/facebox.js'); ?>

<?php echo $javascript->link('/resources/scripts/jquery.dd.js');?>
<?php echo $javascript->link('/resources/scripts/jquery.jcarousel.min.js');
echo $javascript->link('flowplayer-3.2.11.min');
echo  $javascript->link('jquery/jquery.dataTables.min');
echo  $javascript->link('jquery/jquery.tablesorter.min');
echo $javascript->link('ckeditor/ckeditor.js');
echo $javascript->link('ckfinder/ckfinder.js');
echo $javascript->link('/resources/scripts/jquery.transit.min.js');


echo $javascript->link('/resources/scripts/fancybox/jquery.fancybox.js');
echo $javascript->link('/resources/scripts/jquery.tmpl.min.js'); 
echo $javascript->link('/resources/scripts/jquery.elastislide.js'); 

echo $javascript->link('schoolmanagement.js');

 ?>




<?php echo  $javascript->link(array('prototype','scriptaculous')); ?>

<?php echo $scripts_for_layout; ?>

<script type="text/javascript">
window.appurl = <?php echo $this->webroot;?>
</script>

</head>
	<body>

		<div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->

	<!--<div id="topbar">
		<p> Hallo <strong><?php echo $loggedInName; ?> </strong>, <?php echo $html->link('Rubah Password','/users/change_password'); ?>, <?php echo $html->link('Logout','/users/logout'); ?></p>
	</div>

	<?php if($groupAuth==1):?>
	<div id="admin_bar">
		<p> <?php echo $html->link(__('Mata Pelajaran', true), array('controller'=>'pelajarans','action' => 'index'));  ?>,<?php echo $html->link(__('Penambahan User', true), array('controller'=>'users','action' => 'add')); ?> , <?php echo $html->link(__('List User', true), array('controller'=>'users','action' => 'index'))?></p>
	</div>
	<?php endif;?>-->
		
		<div id="main-content"> <!-- Main Content Section with everything -->
		<!--<div id ="head-logo-new">
			<h1>
				<?php echo $html->link(__("E-Learning Management                   
				</br>
				".$session->read('namaSekolah')."
				</br>
				Jakarta", true), array('controller'=>'users','action' => 'home'),array('class'=>' current','escape' => false));?>
				
			</h1>
		</div>-->
			
			<noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					</div>
				</div>
			</noscript>
			
			<div id="main-content-layout">
			<?php $session->flash(); ?>
			<?php $session->flash('auth')?>
			
			<?php e($content_for_layout); ?>
			</div>
			
			
			
			
		</div> <!-- End #main-content -->

	</div>


	<?php echo $javascript->link('/resources/scripts/bookblock.min.js'); ?>
	<?php echo $javascript->link('/resources/scripts/classie.js'); ?>
	<?php echo $javascript->link('/resources/scripts/bookshelf.js'); ?>
	</body>
</html>
