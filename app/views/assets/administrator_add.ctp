<div class="assets form">
<?php echo $form->create('Asset');?>
	<fieldset>
 		<legend><?php __('Add Asset');?></legend>
	<?php
		echo $form->input('kelas');
		echo $form->input('matapelajaran');
		echo $form->input('author');
		echo $form->input('title');
		echo $form->input('content');
		echo $form->input('start_date');
		echo $form->input('modified_date');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Assets', true), array('action' => 'index'));?></li>
	</ul>
</div>
