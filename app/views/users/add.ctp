<!-- START NEW -->
<div id="presentase-template-content" class="clearfix">
	<img style="position:absolute;top:10px;left:20px;" src="<?php echo $this->webroot; ?>resources/images/presentasi-ico.png" alt="icon">



	<div id="presentase-content2" class="clearfix">
		<h2>TAMBAH <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;USER<?php echo $idKelas;?></h2>

		<div style="margin-top:130px;" class="content-box-content">
			<?php echo $form->create('User');?>
			<fieldset>

			<?php
			echo '<p>';
			echo $form->input('username',array('label'=>'Masukkan Username','class'=>'text-input small-input'));
			echo '</p>';
			echo '<p>';
			echo $form->input('password',array('label'=>'Masukkan Password minimum 4 karakter','class'=>'text-input small-input','value'=>''));
			echo '</p>';
			echo '<p>';
			echo $form->input('password_confirm', array('type'=>'password','label'=>'Masukkan Password sekali lagi','class'=>'text-input small-input'));
			echo '</p>';
			echo '<p>';
			echo $form->input('nama',array('label'=>'Masukkan Nama','class'=>'text-input small-input'));
			echo '</p>';
			echo '<p>';
			echo $form->input('group_id',array('label'=>'Pilih user sebagai'));
			echo '</p>';
			echo '<p>';
			
			echo $form->input('kelas', array('label'=>'Kelas <br/><small>Isi pilihan kelas hanya jika user adalah Siswa</small>','class'=>'text-input small-input','options' => $kelas, 'empty' => '(Pilih Kelas)'));

			echo '</p>';
			echo '<p>';
			$sex = array(1=>'Laki-Laki',2=>'Perempuan');
			echo $form->input('sex', array('label'=>'Jenis Kelamin','class'=>'text-input small-input','options' => $sex, 'empty' => '(Pilih Jenis Kelamin)'));

			echo '</p>';
			?>
			</fieldset>
			<p>
			<?php echo $form->end('Submit');?>
			</p>
		</div>
		<ul id="menu_list_presentase">
			<!--<li><a class="button-pembelajaran" id="upload-btn-black" href="#subjectadd" rel="modal">></a></li>-->
			<li><a class="button-pembelajaran" id="back-btn-black" href="<?php echo $this->webroot; ?>users"></a></li>
			<li><a class="button-pembelajaran" id="home-btn-black" href="<?php echo $this->webroot; ?>users/home"></a></li>
		</ul>
	</div>

</div>



