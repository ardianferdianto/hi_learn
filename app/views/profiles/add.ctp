<div class="profiles form">
<?php echo $form->create('Profile');?>
	<fieldset>
 		<legend><?php __('Add Profile');?></legend>
	<?php
		echo $form->input('name');
		echo $form->input('alamat');
		echo $form->input('no_tlp');
		echo $form->input('tgl_berdiri');
		echo $form->input('status');
		echo $form->input('email');
		echo $form->input('license_key');
		echo $form->input('val_sync');
		echo $form->input('image');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Profiles', true), array('action' => 'index'));?></li>
	</ul>
</div>
