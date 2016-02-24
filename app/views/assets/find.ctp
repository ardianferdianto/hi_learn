<div class="assets index">


<h2>Pencarian Bank Pembelajaran</h2>
<div class="content-box">
<div class="content-box-content">
<?php
	echo $form->create('Asset', array('action'=>'find','class'=>'search'));
	echo '<p>';
	echo 'Judul: '.$form->input('title', array('div' => false,'label'=>false,'class'=>'text-input small-input'));
	echo 'Mata Pelajaran: '.$form->select('matapelajaran',$listMataPelajaran,array('label'=>false,'class'=>'text-input small-input'));
	echo '</p>';
	echo '<p>';
	echo 'Tahun Ajaran: '.$form->select('tahun_ajaran_id',$listTahunAjaran,null,array('label'=>false,'class'=>'text-input small-input'));
	$arrayKelas = array(null=>'Pilih Semua','01'=>'Kelas 1','02'=>'Kelas 2','03'=>'Kelas 3','04'=>'Kelas 4','05'=>'Kelas 5','06'=>'Kelas 6');
	echo 'Kelas: '.$form->select('kelas',$arrayKelas,array('label'=>false,'class'=>'text-input small-input'));
	$arraySemester = array(null=>'Pilih Semua','1'=>'Semester 1','2'=>'Semester 2');
	echo '</p>';
	echo '<p>';
	echo 'Semester: '.$form->select('semester',$arraySemester,null,array('label'=>false,'class'=>'text-input small-input'));
	echo 'Penulis: '.$form->select('author',$listGuru,null,array('label'=>false,'class'=>'text-input small-input'));
	echo '</p>';
	//echo $form->input('matapelajaran', array('div' => false, 'options' => $listMataPelajaran));
	//echo $form->input('status', array('div' => false, 'multiple' => 'checkbox', 'options' => array('open', 'closed')));
	echo '<p>';
	echo $form->submit(__('Search', true), array('div' => false,'class'=>'button'));
	echo '</p>';
	echo $form->end();
?>
</div>
</div>


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
			<?php $kelas = $asset['Asset']['kelas'];
			if($kelas == 01){
			 echo 'Kelas 1';
			 }else if ($kelas == 02){
			  echo 'Kelas 2';
			}else if ($kelas == 03){
			  echo 'Kelas 3';
			}else if ($kelas == 04){
			  echo 'Kelas 4';
			}else if ($kelas == 05){
			  echo 'Kelas 5';
			 }else{
			 echo 'Kelas 6';
			 } ?>
		</td>
		<td>
			<?php echo $asset['PasMataPelajaran']['matpel']; ?>
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
		<?php if ($groupAuth == 3 || $groupAuth == 2):?>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $asset['Asset']['id'])); ?><br/>
		</td>
		<?php else:?>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $asset['Asset']['id'])); ?><br/>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $asset['Asset']['id'])); ?><br/>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $asset['Asset']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $asset['Asset']['title'])); ?>
		</td>
		
		<?php endif;?>
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



