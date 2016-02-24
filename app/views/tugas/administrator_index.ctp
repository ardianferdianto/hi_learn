<div class="tugas index">
<h2><?php __('Tugas');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('kelas');?></th>
	<th><?php echo $paginator->sort('matapelajaran');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('content');?></th>
	<th><?php echo $paginator->sort('start_date');?></th>
	<th><?php echo $paginator->sort('expiration_date');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($tugas as $tuga):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $tuga['Tuga']['id']; ?>
		</td>
		<td>
			<?php echo $tuga['Tuga']['kelas']; ?>
		</td>
		<td>
			<?php echo $tuga['Tuga']['matapelajaran']; ?>
		</td>
		<td>
			<?php echo $tuga['Tuga']['title']; ?>
		</td>
		<td>
			<?php echo $tuga['Tuga']['content']; ?>
		</td>
		<td>
			<?php echo $tuga['Tuga']['start_date']; ?>
		</td>
		<td>
			<?php echo $tuga['Tuga']['expiration_date']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $tuga['Tuga']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $tuga['Tuga']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $tuga['Tuga']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tuga['Tuga']['id'])); ?>
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
		<li><?php echo $html->link(__('New Tuga', true), array('action' => 'add')); ?></li>
	</ul>
</div>
