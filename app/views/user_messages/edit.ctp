<div class="userMessages form">
<?php echo $form->create('UserMessage');?>
	<fieldset>
 		<legend><?php __('Edit UserMessage');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('from');
		echo $form->input('to');
		echo $form->input('message');
		echo $form->input('sent');
		echo $form->input('read');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('UserMessage.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('UserMessage.id'))); ?></li>
		<li><?php echo $html->link(__('List UserMessages', true), array('action' => 'index'));?></li>
	</ul>
</div>
