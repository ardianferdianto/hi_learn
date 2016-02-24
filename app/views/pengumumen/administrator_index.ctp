<div class="pengumumen index">
<h2><?php __('Pengumumen');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('scope');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('content');?></th>
	<th><?php echo $paginator->sort('start_date');?></th>
	<th><?php echo $paginator->sort('expiration_date');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($pengumumen as $pengumuman):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $pengumuman['Pengumuman']['id']; ?>
		</td>
		<td>
			<?php echo $pengumuman['Pengumuman']['scope']; ?>
		</td>
		<td>
			<?php echo $pengumuman['Pengumuman']['title']; ?>
		</td>
		<td>
			<?php echo $pengumuman['Pengumuman']['content']; ?>
		</td>
		<td>
			<?php echo $pengumuman['Pengumuman']['start_date']; ?>
		</td>
		<td>
			<?php echo $pengumuman['Pengumuman']['expiration_date']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $pengumuman['Pengumuman']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $pengumuman['Pengumuman']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $pengumuman['Pengumuman']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $pengumuman['Pengumuman']['id'])); ?>
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
		<li><?php echo $html->link(__('New Pengumuman', true), array('action' => 'add')); ?></li>
	</ul>
</div>
