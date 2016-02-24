<div class="pengumumen view">
<h2><?php  __('Pengumuman');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pengumuman['Pengumuman']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Scope'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pengumuman['Pengumuman']['scope']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pengumuman['Pengumuman']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Content'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pengumuman['Pengumuman']['content']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Start Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pengumuman['Pengumuman']['start_date']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Expiration Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pengumuman['Pengumuman']['expiration_date']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Pengumuman', true), array('action' => 'edit', $pengumuman['Pengumuman']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Pengumuman', true), array('action' => 'delete', $pengumuman['Pengumuman']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $pengumuman['Pengumuman']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Pengumumen', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Pengumuman', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
