<div class="fileTugas view">
<h2><?php  __('FileTuga');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $fileTuga['FileTuga']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tugas Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $fileTuga['FileTuga']['tugas_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Siswa Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $fileTuga['FileTuga']['siswa_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $fileTuga['FileTuga']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('File'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $fileTuga['FileTuga']['file']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $fileTuga['FileTuga']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $fileTuga['FileTuga']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit FileTuga', true), array('action' => 'edit', $fileTuga['FileTuga']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete FileTuga', true), array('action' => 'delete', $fileTuga['FileTuga']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $fileTuga['FileTuga']['id'])); ?> </li>
		<li><?php echo $html->link(__('List FileTugas', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New FileTuga', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
