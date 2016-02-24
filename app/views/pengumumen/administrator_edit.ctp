<div class="pengumumen form">
<?php echo $form->create('Pengumuman');?>
	<fieldset>
 		<legend><?php __('Edit Pengumuman');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('scope');
		echo $form->input('title');
		echo $form->input('content');
		echo $form->input('start_date');
		echo $form->input('expiration_date');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Pengumuman.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Pengumuman.id'))); ?></li>
		<li><?php echo $html->link(__('List Pengumumen', true), array('action' => 'index'));?></li>
	</ul>
</div>
