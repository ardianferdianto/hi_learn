<!-- START NEW -->
<div id="presentase-template-content" class="clearfix">
	<img style="position:absolute;top:10px;left:20px;" src="<?php echo $this->webroot; ?>resources/images/presentasi-ico.png" alt="icon">



	<div id="presentase-content2" class="clearfix">
		<h2>TAMBAH <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MASTER KELAS</h2>

		<div style="margin-top:130px;" class="content-box-content">
			<?php echo $form->create('Grade');?>
			<fieldset>
			<?php
			echo '<p>';
			echo $form->input('name',array('label'=>'Nama Kelas','class'=>'text-input small-input'));
			echo '</p>';

			echo '<p>';
			echo $form->input('keterangan',array('label'=>'Keterangan','class'=>'text-input small-input'));
			echo '</p>';
			?>
			</fieldset>
			<p>
			<?php echo $form->end('Submit');?>
			</p>
		</div>
		<ul id="menu_list_presentase">
			<!--<li><a class="button-pembelajaran" id="upload-btn-black" href="#subjectadd" rel="modal">></a></li>-->
			<li><a class="button-pembelajaran" id="back-btn-black" href="<?php echo $this->webroot; ?>grades"></a></li>
			<li><a class="button-pembelajaran" id="home-btn-black" href="<?php echo $this->webroot; ?>users/home"></a></li>
		</ul>
	</div>

</div>



