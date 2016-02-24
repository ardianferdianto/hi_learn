<!-- START NEW -->
<div id="presentase-template-content" class="clearfix">
	<img style="position:absolute;top:10px;left:20px;" src="<?php echo $this->webroot; ?>resources/images/presentasi-ico.png" alt="icon">



	<div id="presentase-content2" class="clearfix">
		<h2>Profile <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sekolah<?php echo $idKelas;?></h2>

		<div style="margin-top:130px;" class="content-box-content">
			<?php echo $form->create('Profile');?>
			<fieldset>
			<?php
				echo "<p>";
				echo "<label>Nama Sekolah</label>";
				echo $form->input('name', array('label' => false,'class'=>'text-input medium-input','div'=>false));
				echo "</p>";
				echo "<p>";
				echo "<label>Alamat Sekolah</label>";
		        echo $form->input('alamat', array('type'=>'textarea','label' => false,'class'=>'text-input medium-input'));
				?>
				<!--<p class="radio-set">

					<label>Status Sekolah</label>
					<input type="hidden" value="" id="InstallStatus_" name="data[Profile][status]">
					<span>
					<input type="radio" value="1" class="input-radio" id="InstallStatus1" name="data[Profile][status]">
					<label for="InstallStatus1">Negeri</label>
					</span>
					<span>
					<input type="radio" value="2" class="input-radio" id="InstallStatus2" name="data[Profile][status]">
					<label for="InstallStatus2">Swasta</label>
					</span>
					<?php echo $form->error('status');?>
				</p>-->
				<?php
				echo '<p class="input text">';
				echo '<label>Tahun Berdiri</label>';
				echo $form->year('Profile.tgl_berdiri', 1945, 2011, null, array('class'=>'year-set'), 'Pilih Tahun');
				echo '</p>';
				echo "<p>";
				echo $form->input('no_tlp', array('label' => 'Telpon','class'=>'text-input medium-input'));
				echo "</p>";
				echo "<p>";
				echo $form->input('email', array('label' => 'Email Admin: ','class'=>'text-input medium-input'));
				echo "</p>";
				echo "<br/>";
				echo "<br/>";
				echo "<div id='configSoal'>";
					echo "<p><strong>Konfigurasi Waktu Soal:</strong><br/>Kelipatan 1 dalam menit</p>";
					echo '<hr/>';
					echo "<p>";
					echo $form->input('time_ganda_mudah', array('label' => 'Ganda Mudah: ','class'=>'text-input small-input','after'=>'  menit','style'=>'width: 50px'));
					echo "</p>";
					echo "<p>";
					echo $form->input('time_ganda_sedang', array('label' => 'Ganda Sedang: ','after'=>'  menit','class'=>'text-input small-input'));
					echo "</p>";
					echo "<p>";
					echo $form->input('time_ganda_sulit', array('label' => 'Ganda Sulit: ','after'=>'  menit','class'=>'text-input small-input'));
					echo "</p>";

					echo "<p>";
					echo $form->input('time_essay_mudah', array('label' => 'Essay Mudah: ','after'=>'  menit','class'=>'text-input small-input','after'=>'  menit'));
					echo "</p>";
					echo "<p>";
					echo $form->input('time_essay_sedang', array('label' => 'Essay Sedang: ','class'=>'text-input small-input','after'=>'  menit'));
					echo "</p>";
					echo "<p>";
					echo $form->input('time_essay_sulit', array('label' => 'Essay Sulit: ','class'=>'text-input small-input','after'=>'  menit'));
					echo "</p>";
				echo "</div>";
				?>
			</fieldset>
			<div class="submit-form">
			<?php
				echo $form->submit('ok-btn.png',array('div'=>false,'class' => '','id'=>'oke-btn'));
				echo $html->link($html->image("btl-btn.png"), array('controller'=>'users','action' => 'home'), array('escape' => false));

				?>
			</div>
		</div>
		<ul id="menu_list_presentase">
			<!--<li><a class="button-pembelajaran" id="upload-btn-black" href="#subjectadd" rel="modal">></a></li>-->
			<li><a class="button-pembelajaran" id="home-btn-black" href="<?php echo $this->webroot; ?>users/home"></a></li>
		</ul>
	</div>

</div>


