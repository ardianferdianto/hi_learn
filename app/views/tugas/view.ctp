<style type="text/css">
#logo{
	position: absolute;
	left: 50px;
	top:-5px;
}
#tugastitle{
	margin-left: 70px;
}
ul#menu_list_info{
	top:30px;
}
strong{
	color:#fff;
}
</style>
<div class="pengumuman-content">
	<img id="logo" src="<?php echo $this->webroot;?>homenew/images/logo.png" style="width: 145px; top: 14px; left: 47px;">	
	<div id="pengumuman-category" style="top: 6.8em;left: 0em;">
		<h2 id="tugastitle"><center>Detail Tugas</center></h2>
		<hr/>
		<br/>
		<br/>
<div class="tugas view" style="text-align:left;font-size:1.1em;">

	
	
		
		<p>Nama Tugas : <strong><?php echo $tuga['Tuga']['title']; ?></strong></p>
		
		<p>Mata Pelajaran : <strong><?php echo $tuga['Pelajaran']['nama']; ?></strong></p>
	
	
		<p>Kelas : <strong><?php echo $tuga['Kela']['name']; ?></strong></p>
		
		<p>Deskripsi Tugas:<br / >
		<strong><?php echo $tuga['Tuga']['content']; ?></strong></p>
		
		
		<p>Tanggal di Publish : <strong><?php echo $tuga['Tuga']['start_date']; ?></strong></p>
		
		
		<p>Tanggal Terakhir Dikumpulkan : <strong><?php echo $tuga['Tuga']['expiration_date']; ?></strong></p>
		
		<br/>
		
		<?php if ($groupAuth == 3):
		echo $html->link('Serahkan Tugas Ini','/file_tugas/add/'.$tuga['Tuga']['id'],array('class'=>'button')); 
		endif;
		?>
		
</div>

<?php 
if ($groupAuth != 3):
if ($tugasSerahList != null):

?>
<div class="divider"></div>
<div class="actions">
	<h3 style="color:#cd5829;">File yang sudah diserahkan untuk tugas ini</h3>
	
	<table cellpadding="0" cellspacing="0" style="color: #000;">
	<tr>
		<th>No</th>
		<th>Nama Siswa</th>
		<th>Komentar dari siswa</th>
		<th>Tanggal menyerahkan</th>
		<th>File</th>
	</tr>
	<?php
	$i = 0;
	$no =0;
	
	
	foreach ($tugasSerahList as $b):
	//foreach ($namaSiswa as $n ):
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
				<?php echo $b['User']['nama']; ?>
			</td>

			<td>
				<?php echo $b['FileTuga']['description']; ?>
			</td>
			
			<td>
				<?php echo $b['FileTuga']['created']; ?>
			</td>
			<td>
				<?php echo $html->link('Klik disini untuk mendownload files','/files/tugas/'.$b['FileTuga']['file']); ?>
			</td>
			
		</tr>
	<?php //endforeach; ?>
	<?php endforeach; ?>
	</table>
</div>
<?php endif; ?>
<?php endif; ?>


</div>



</div>

<ul id="menu_list_info">
	<li><a class="button-pembelajaran" id="back-btn-black" href="<?php echo $this->webroot; ?>tugas"></a></li>
	
	<!--<?php if ($kelasId != 1):?>

	<?php endif;?>
	<?php if ($kelasId != 6):?>
	<li><a class="button-pembelajaran" id="next-btn" href="<?php echo $this->webroot; ?>subjects/kelas/<?php echo $kelasId+1; ?>"></a></li>
	<?php endif;?>-->
	
</ul>