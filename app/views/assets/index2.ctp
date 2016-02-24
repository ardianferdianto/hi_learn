<div class="assets index">


<h2>Bank Pembelajaran</h2>
<?php
	echo $form->create('Asset', array('action'=>'find'));
	echo $form->input('title', array('div' => false));
	echo $form->select('matapelajaran',$listMataPelajaran,null);
	echo $form->select('tahunajaran_id',$listTahunAjaran,null);
	$arrayKelas = array(null=>'','01'=>'X','02'=>'XI','03'=>'XII');
	echo $form->select('tahun_ajaran_id',$arrayKelas,null);
	$arraySemester = array(null=>'','1'=>'Semester 1','2'=>'Semester 1');
	echo $form->select('semester',$arraySemester,null);
	echo $form->select('matapelajaran',$listGuru,null);
	//echo $form->input('matapelajaran', array('div' => false, 'options' => $listMataPelajaran));
	//echo $form->input('status', array('div' => false, 'multiple' => 'checkbox', 'options' => array('open', 'closed')));
	echo $form->submit(__('Search', true), array('div' => false));
	echo $form->end();
?>
<p>
Berikut ini adalah halaman dari semua bahan pembelajaran yang dibuat, anda dapat memanage halaman ini dengan action yang tersedia
</p>
<table cellpadding="0" cellspacing="0">
<thead>
	<th><?php echo 'No';?></th>
	<th><?php echo $paginator->sort('kelas');?></th>
	<th><?php echo $paginator->sort('matapelajaran');?></th>
	
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</thead>
<?php
$i = 0;
$no = 0;
foreach ($assets as $asset):
	$no++;
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $no; ?>
		</td>
		<td>
			<?php echo $asset['PasRombel']['KETERANGAN']; ?>
		</td>
		<td>
			<?php echo $asset['PasMataPelajaran']['NM_MATA_PELAJARAN_DIAJARKAN']; ?>
		</td>
		<td>
			<?php echo $asset['Asset']['title']; ?>
		</td>
		
		<td>
			<?php echo $asset['Asset']['created']; ?>
		</td>
		<td>
			<?php echo $asset['Asset']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $asset['Asset']['id'])); ?><br/>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $asset['Asset']['id'])); ?><br/>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $asset['Asset']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $asset['Asset']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="pagination">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>
<div class="clear"></div>
<div class="actions">
	<?php echo $html->link('Buat Materi Baru','/assets/add',array('class'=>'button')); ?>
</div>


