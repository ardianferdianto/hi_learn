<div id="presentase-template-content" class="clearfix">
	<img style="position:absolute;top:10px;left:20px;" src="<?php echo $this->webroot; ?>resources/images/presentasi-ico.png" alt="icon">
	<img style="position:absolute;top:10px;right:20px;" src="<?php echo $this->webroot; ?>resources/images/presentasi-ico2.png" alt="icon">

	<div id="presentase-content2" class="clearfix">
		<h2>PRESENTASI<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EDIT</h2>
		
		<div style="margin-top:130px;" class="content-box-content">
			<div class="assets form">
				<?php 
				echo $javascript->link('ckeditor/ckeditor', NULL, false); 
				?>
			<?php echo $form->create('Asset',array('enctype'=>'multipart/form-data'));?>
				<fieldset>
			 		
					<!--<?php
				
					echo '<p>';
					echo '<label>Mata Pelajaran</label>';
					echo $form->select('matapelajaran',$listMataPelajaran,null);
					echo '</p>';
					echo '<p>';
					echo '<label>Kelas</label>';
					$listKelas = array(10=>10,11=>11,12=>12);
					echo $form->select('kelas',$listKelas,null);
					
					?>-->
					<p>
					<?php
					echo $form->input('title',array('class'=>'text-input large-input'));
					
					?>
					</p>
					<p>
					
					
					</p>
					
					
					<div id="subQuestion">
					<div id="digitals">
					<p>
						<?php    echo $form->textarea('content', array('class'=>$ckeditorClass));?>
						<script type="text/javascript">
						    var CustomHTML = CKEDITOR.replace( 'AssetContent',
							    {filebrowserBrowseUrl : '<?php echo $this->webroot;?>js/ckfinder/ckfinder.html',filebrowserWindowWidth : '1000',filebrowserWindowHeight : '700'}
							    );
						
						</script>
					</p>
					</div>
					
					</div>
				</fieldset>
			<div class="submit-form">
			<?php
				echo $form->submit('ok-btn.png',array('div'=>false,'class' => '','id'=>'oke-btn'));
				echo $html->link($html->image("btl-btn.png"), array('action' => 'index'), array('escape' => false));
				
				?>
			</div>
			<?php echo $form->end();?>
			</div>
		</div>
		<ul id="menu_list_presentase">
			<!--<li><a class="button-pembelajaran" id="upload-btn-black" href="#subjectadd" rel="modal">></a></li>-->
			<li><a class="button-pembelajaran" id="back-btn-black" href="<?php echo $this->webroot; ?>assets<?php echo $kelas;?>"></a></li>
			<li><a class="button-pembelajaran" id="home-btn-black" href="<?php echo $this->webroot; ?>users/home"></a></li>
		</ul>
	</div>

</div>

