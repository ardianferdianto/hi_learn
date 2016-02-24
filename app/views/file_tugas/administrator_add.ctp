<div class="fileTugas form">
<?php echo $form->create('FileTuga');?>
	<fieldset>
 		<legend><?php __('Add FileTuga');?></legend>
	<?php
		echo $form->input('tugas_id');
		echo $form->input('siswa_id');
		echo $form->input('description');
		echo $form->input('file');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List FileTugas', true), array('action' => 'index'));?></li>
	</ul>
</div>
