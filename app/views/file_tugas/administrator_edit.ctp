<div class="fileTugas form">
<?php echo $form->create('FileTuga');?>
	<fieldset>
 		<legend><?php __('Edit FileTuga');?></legend>
	<?php
		echo $form->input('id');
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
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('FileTuga.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('FileTuga.id'))); ?></li>
		<li><?php echo $html->link(__('List FileTugas', true), array('action' => 'index'));?></li>
	</ul>
</div>
