<div class="subjects index">
<h2><?php __('Subjects');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('grade');?></th>
	<th><?php echo $paginator->sort('type');?></th>
	<th><?php echo $paginator->sort('file_name');?></th>
	<th><?php echo $paginator->sort('folder_name');?></th>
	<th><?php echo $paginator->sort('comments');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($subjects as $subject):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $subject['Subject']['id']; ?>
		</td>
		<td>
			<?php echo $subject['Subject']['name']; ?>
		</td>
		<td>
			<?php echo $subject['Subject']['grade']; ?>
		</td>
		<td>
			<?php echo $subject['Subject']['type']; ?>
		</td>
		<td>
			<?php echo $subject['Subject']['file_name']; ?>
		</td>
		<td>
			<?php echo $subject['Subject']['folder_name']; ?>
		</td>
		<td>
			<?php echo $subject['Subject']['comments']; ?>
		</td>
		<td>
			<?php echo $subject['Subject']['created']; ?>
		</td>
		<td>
			<?php echo $subject['Subject']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $subject['Subject']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $subject['Subject']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $subject['Subject']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subject['Subject']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New Subject', true), array('action' => 'add')); ?></li>
	</ul>
</div>
