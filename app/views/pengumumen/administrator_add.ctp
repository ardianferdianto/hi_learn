<div class="pengumumen form">
<?php echo $form->create('Pengumuman');?>
	<fieldset>
 		<legend><?php __('Add Pengumuman');?></legend>
	<?php
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
		<li><?php echo $html->link(__('List Pengumumen', true), array('action' => 'index'));?></li>
	</ul>
</div>
