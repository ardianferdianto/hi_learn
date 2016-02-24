<!-- START NEW -->
<div id="presentase-template-content" class="clearfix">
	<img style="position:absolute;top:10px;left:20px;" src="<?php echo $this->webroot; ?>resources/images/presentasi-ico.png" alt="icon">



	<div id="presentase-content2" class="clearfix">
		<h2>EDIT <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ROMBEL</h2>

		<div style="margin-top:130px;" class="content-box-content">
			<?php echo $form->create('Kela');?>
			<fieldset>
			<?php
			echo $form->input('id');
			echo '<p>';
			echo $form->input('name',array('label'=>'Nama Rombel','class'=>'text-input small-input'));
			echo '</p>';

			echo '<p>';
			echo $form->input('grade_id',array('label'=>'Pilih Master Kelas'));
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
			<li><a class="button-pembelajaran" id="back-btn-black" href="<?php echo $this->webroot; ?>kelas"></a></li>
			<li><a class="button-pembelajaran" id="home-btn-black" href="<?php echo $this->webroot; ?>users/home"></a></li>
		</ul>
	</div>

</div>



