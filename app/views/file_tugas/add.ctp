<div class="fileTugas form">
<?php if($tugasStatus != null){
?>
<div class="notification attention png_bg">
	<a href="#" class="close"><img src="/lms/resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
	<div>
			
			<p>Anda sudah menyerahkan tugas ini lihat tugas yang anda serhakan pada bawah halaman</p>
			
		
	</div>
</div>
<?php }?>
<h2>Serahkan Tugas : <?php echo $namaTugas['Tuga']['title'];?></h2>
<?php echo $form->create('FileTuga',array('enctype'=>'multipart/form-data'));?>
	<fieldset>
 		<p>
 		<dl class="info">
 		<?php 
 		
 		if($groupAuth == 3 ):
 		echo '<label>Pastikan detail siswa ini adalah anda</label><br/>';
 		echo '<dt>Nama Siswa :</dt> <dd>'.$namaSiswa['User']['nama'].'</dd>'; 
 		echo '<dt>NIS Siswa :</dt> <dd>'.$namaSiswa['User']['username'].'</dd>'; 
 		
 		?> 
 		<?php else:
 		echo 'Anda bukan siswa, anda tidak bisa menggunakan module ini';
 		endif;
 		?>
 		</dl>
 		
 		</p>
 		<div class="clear"></div>
	<?php
		echo $form->hidden('tugas_id',array('value'=>$tugasId));
		
		
		echo '<p>';
		echo $form->input('description',array('label'=>'Catatan untuk guru'));
		echo '</p>';
		echo '<p>';
		?>
		<label>Pilih file dari komputer</label>
		<?php
		echo $form->input('file', array('label'=>false, 'type'=>'file'));
		echo '<small>File yang diijinkan Word, Excel, Pdf </small>';
		echo '</p>';
	?>
	
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<?php if ($tugasStatus != null):

?>
<div class="divider"></div>
<div class="actions">
	<h3>File yang sudah anda serahkan untuk tugas ini</h3>
	
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th>No</th>
		<th>Tanggal menyerahkan</th>
		<th>File</th>
	</tr>
	<?php
	$i = 0;
	$no =0;
	
	
	foreach ($tugasStatus as $fileTuga):
		$class = null;
		$no++;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	
		<tr<?php echo $class; ?>>
		
			<td>
				<?php echo $no; ?>
			</td>
			
			<td>
				<?php echo $fileTuga['FileTuga']['created']; ?>
			</td>
			<td>
				<?php echo $html->link('Klik disini untuk mendownload files','/files/tugas/'.$fileTuga['FileTuga']['file']); ?>
			</td>
			
		</tr>
	<?php endforeach; ?>
	</table>
</div>
<?php endif; ?>

<ul id="menu_list_info">
	<li><a class="button-pembelajaran" id="back-btn-black" href="<?php echo $this->webroot; ?>tugas"></a></li>
	
	<!--<?php if ($kelasId != 1):?>

	<?php endif;?>
	<?php if ($kelasId != 6):?>
	<li><a class="button-pembelajaran" id="next-btn" href="<?php echo $this->webroot; ?>subjects/kelas/<?php echo $kelasId+1; ?>"></a></li>
	<?php endif;?>-->
	
</ul>