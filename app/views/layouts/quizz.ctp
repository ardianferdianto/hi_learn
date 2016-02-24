<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $title_for_layout; ?></title>

<?php echo $html->css('/resources/css/reset'); ?>
<?php echo $html->css('/resources/css/style'); ?>
<?php echo $html->css('/resources/css/invalid'); ?>
<?php echo $html->css('/resources/css/jquery.countdown'); ?>


<?php echo $javascript->link('/resources/scripts/jquery-1.3.2.min.js'); ?>
<?php echo $javascript->link('/resources/scripts/simpla.jquery.configuration.js'); ?>
<?php echo $javascript->link('/resources/scripts/facebox.js'); ?>
<?php echo $javascript->link('/resources/scripts/jquery.datePicker.js'); ?>
<?php echo $javascript->link('/resources/scripts/jquery.date.js'); ?>
<?php echo $javascript->link('/resources/scripts/jquery.countdown.pack'); ?>


<?php echo $scripts_for_layout; ?>
</head>
	<body id="quizz">
		
		<?php $session->flash(); ?>
		<?php $session->flash('auth')?>
		
		<?php e($content_for_layout); ?>

	
	
	
	</body>
</html>
