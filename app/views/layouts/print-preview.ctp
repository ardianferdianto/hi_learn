<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<?php echo $html->charset(); ?>
<title>
	<?php echo $title_for_layout; 
 
?>
</title>
<?php 
echo $html->css(array('thickbox','modalbox')); 
echo $html->css(array('print-preview'), 'stylesheet', array('media' => 'all'));
echo $html->css(array('print'), 'stylesheet', array('media' => 'print','id'=>'printCSS'));
//echo $html->css('/fancybox/jquery.fancybox-1.3.0'); 
echo $javascript->link('jquery-1.4.1.min.js');
echo $javascript->link('thickbox.js');
//echo $javascript->link('/fancybox/jquery.fancybox-1.3.0.pack.js'); 
echo  $javascript->link(array('prototype','scriptaculous'));
echo  $javascript->link(array('highlight','modalbox')); 
echo $scripts_for_layout;
?>



<script type="text/javascript">

jQuery(document).ready(function() {

jQuery(".digital").hide();
jQuery("#BookJenis1").click(function() {
  jQuery(".digital").show();
  jQuery(".digital").hide();
});
jQuery("#BookJenis2").click(function() {
  jQuery(".digital").hide();
 jQuery(".digital").show();
});

			
});
</script>
</head>

<body>
	<div id="print-preview-header">
      <ul>
        <li><button type="button" id="print_preview_print" onClick="window.print()">Print</button></li>
        <li><a class="button" href="javascript:history.back()">Batal</a></li>
      </ul>
      <h2>Print Preview</h2>
	</div>
	
	<div id="page" class="clearfix">
	<?php $session->flash(); ?>
	<?php $session->flash('auth')?>
		<div class="container clearfix">
			
			<div class="content clearfix">
					<?php if ($print == "print"){?>
						<div class="header-page">
							
								<?php if(!empty($profile['Profile']['image'])):?>
								<img src="<?php echo $this->webroot.$profile['Profile']['image']; ?>" alt="Logo" width="50" />
								<?php else:?>
								<?php echo $html->image("tut-wuri-handayani.png");  ?>
								<?php endif;?>
								<?php if(!empty($profile['Profile']['name'])):?>
								<h2 align="center"><?php echo $profile['Profile']['name']?></h2>
								<?php else:?>
								<h2 align="center">Perpusakaan Contoh, isi profile terlebih dahulu</h2>
								<?php endif;?>
								<?php if(!empty($profile['Profile']['alamat'])):?>
								<p align="center"><?php echo $profile['Profile']['alamat']?></br><?php echo $profile['Profile']['no_tlp']?></p>
								<?php else:?>
								<p align="center">Silakan isi terlebih dulu profile perpustakaan anda</p>
								<?php endif;?>
							
							
						</div>
					<?php }?>
					<?php e($content_for_layout); ?>
				
			</div>
		</div>
	</div>
<div id="footer">
<p>Powered by E-LIBRARY MIBS Kab. Sukabumi<br />ver. 0.1</p>
</div>
</body>
</html>