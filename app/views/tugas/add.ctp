<style type="text/css">
#logo{
	position: absolute;
	right: 50px;
	top:-5px;
}
#tugastitle{
	margin-left: 70px;
}
</style>
<div class="tugas form">
	<img id="logo" src="<?php echo $this->webroot;?>homenew/images/logo.png" style="width: 145px; top: 14px; left: 47px;">
<h2 id="tugastitle">Form Penambahan Tugas</h2>
<?php echo $form->create('Tuga', array('style' => 'margin-left: 17em;margin-right: 14em;background: rgba(255,255,255,0.0);'));?>
	<fieldset>
 		
	<?php
		
		echo '<p>';
		echo '<label>Mata Pelajaran</label>';
		echo $form->select('pelajaran_id',$listMataPelajaran,null);
		echo '</p>';
		echo '<p>';
		echo '<label>Kelas</label>';
		echo $form->select('kelas',$listKelas,null);
		echo '</p>';
		echo '<p>';
		echo $form->input('title',array('class'=>'text-input normal-input','label'=>'Judul Tugas'));
		echo '</p>';
		echo '<p>';
		echo $form->input('content',array('label'=>'Deskripsi Tugas'));
		echo '</p>';
		echo '<p>';
		echo '<label>Tanggal Dipublish </label>';
		echo $form->input('start_date',array('label'=>false));
		echo '</p>';
		echo '<p>';
		echo '<label>Tanggal terakir Penyerahan </label>';
		echo $form->input('expiration_date',array('label'=>false));
		echo '</p>';
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Tugas', true), array('action' => 'index'));?></li>
	</ul>
</div>



<ul id="menu_list_info">
		<li><a class="button-pembelajaran" id="back-btn-black" href="<?php echo $this->webroot; ?>tugas"></a></li>
		
		<!--<?php if ($kelasId != 1):?>

		<?php endif;?>
		<?php if ($kelasId != 6):?>
		<li><a class="button-pembelajaran" id="next-btn" href="<?php echo $this->webroot; ?>subjects/kelas/<?php echo $kelasId+1; ?>"></a></li>
		<?php endif;?>-->
		
	</ul>
