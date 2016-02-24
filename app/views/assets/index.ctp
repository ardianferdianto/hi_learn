<div id="presentase-template" class="clearfix">

	

	<div id="presentase-content" class="clearfix">
		<a id="" style="position:absolute;top:27px;right:10px;" href="<?php echo $this->webroot; ?>users/home">
		<img src="<?php echo $this->webroot; ?>resources/images/home2.png" alt="icon">
		</a>
	<h2>PRESENTASI SISWA & GURU</h2>
		<!-- <a id="presentase-head-guru" href="<?php echo $this->webroot; ?>assets/guru"><img src="<?php echo $this->webroot; ?>resources/images/presentasi-guru-head1.png" alt="icon"></a> -->
		<div id="presentase-siswa-head">
			<ul style="width: 1000px;">
				<li><a id="presentase-head-guru" href="<?php echo $this->webroot; ?>assets/guru" ></a></li>
				<li><a id="kelas10" href="<?php echo $this->webroot; ?>users/presentase_siswa/10" /></a></li>
				<li><a id="kelas11" href="<?php echo $this->webroot; ?>users/presentase_siswa/11" /></a></li>
				<li><a id="kelas12" href="<?php echo $this->webroot; ?>users/presentase_siswa/12" /></a></li>
				
			</ul>
		</div>
	</div>

</div>
	



<!--<div class="assets index">
<?php if ($groupAuth == 1) :

?>

<h2>Bank Pembelajaran</h2>
<p>
Berikut ini adalah halaman dari semua bahan pembelajaran yang dibuat, anda dapat memanage halaman ini dengan action yang tersedia
</p>
<?php echo $html->link(__('lakukan pencarian', true), array('action' => 'find'));?>
<br/>
<br/>
<table class="data display datatable " id="example">
<thead>
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
		$kelas = $asset['Asset']['kelas'];
		 
		if($kelas == 01){
		 $kelas = 'Kelas 1';
		 }else if ($kelas == 02){
		   $kelas = 'Kelas 2';
		}else if ($kelas == 03){
		   $kelas = 'Kelas 3';
		}else if ($kelas == 04){
		   $kelas = 'Kelas 4';
		}else if ($kelas == 05){
		   $kelas = 'Kelas 5';
		 }else{
		  $kelas = 'Kelas 6';
		 }
		
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $no; ?>
		</td>
		<td>
			<?php
			echo $kelas; 
			?>
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

<?php elseif ($groupAuth == 2):?>

<h2>Bank Materi</h2>
<p>
Berikut ini adalah halaman dari semua bahan pembelajaran yang anda buat, anda dapat memanage halaman ini dengan action yang tersedia
</p>
<table cellpadding="0" cellspacing="0">
<thead>
	<th><?php echo 'No';?></th>
	<th><?php echo ('kelas');?></th>
	<th><?php echo ('matapelajaran');?></th>
	
	<th><?php echo ('title');?></th>
	<th><?php echo ('created');?></th>
	<th><?php echo ('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</thead>
<?php
if($assetsGuru == null){
echo '<p class="red">Tidak ada file yang anda buat</p>';
}
$i = 0;
$no = 0;
foreach ($assetsGuru as $assetGuru):
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
			<?php $kelas = $assetGuru['Asset']['kelas'];
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
			<?php echo $assetGuru['PasMataPelajaran']['matpel']; ?>
		</td>
		<td>
			<?php echo $assetGuru['Asset']['title']; ?>
		</td>
		
		<td>
			<?php echo $assetGuru['Asset']['created']; ?>
		</td>
		<td>
			<?php echo $assetGuru['Asset']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $assetGuru['Asset']['id'])); ?><br/>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $assetGuru['Asset']['id'])); ?><br/>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $assetGuru['Asset']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $assetGuru['Asset']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>

<div class="clear"></div>
<div class="actions">
	<?php echo $html->link('Buat Materi Baru','/assets/add',array('class'=>'button')); ?>
	
</div>

<?php else:?>
<h2>Bank Pembelajaran</h2>
<p>
Berikut ini adalah halaman dari semua bahan pembelajaran yang dibuat, anda dapat memanage halaman ini dengan action yang tersedia
</p>
<table cellpadding="0" cellspacing="0">
<thead>
	<th><?php echo 'No';?></th>
	<th><?php echo ('kelas');?></th>
	<th><?php echo ('matapelajaran');?></th>
	<th><?php echo ('title');?></th>
	<th><?php echo ('created');?></th>
	<th><?php echo ('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</thead>
<?php
$i = 0;
$no = 0;
foreach ($assetsMurid as $asset):
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
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $asset['Asset']['id'])); ?><br/>
			
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>

<div class="clear"></div>


<?php endif;?>-->
