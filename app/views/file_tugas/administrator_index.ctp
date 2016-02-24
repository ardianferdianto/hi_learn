<div class="fileTugas index">
<h2><?php __('FileTugas');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('tugas_id');?></th>
	<th><?php echo $paginator->sort('siswa_id');?></th>
	<th><?php echo $paginator->sort('description');?></th>
	<th><?php echo $paginator->sort('file');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($fileTugas as $fileTuga):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $fileTuga['FileTuga']['id']; ?>
		</td>
		<td>
			<?php echo $fileTuga['FileTuga']['tugas_id']; ?>
		</td>
		<td>
			<?php echo $fileTuga['FileTuga']['siswa_id']; ?>
		</td>
		<td>
			<?php echo $fileTuga['FileTuga']['description']; ?>
		</td>
		<td>
			<?php echo $fileTuga['FileTuga']['file']; ?>
		</td>
		<td>
			<?php echo $fileTuga['FileTuga']['created']; ?>
		</td>
		<td>
			<?php echo $fileTuga['FileTuga']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $fileTuga['FileTuga']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $fileTuga['FileTuga']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $fileTuga['FileTuga']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $fileTuga['FileTuga']['id'])); ?>
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
		<li><?php echo $html->link(__('New FileTuga', true), array('action' => 'add')); ?></li>
	</ul>
</div>
