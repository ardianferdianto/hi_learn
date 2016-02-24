<div id="email-template" class="clearfix">


	<div id="email-content" class="clearfix">

		<div style="float:left;width:300px;">
			<h2><?php __('EMAIL');?></h2>
			<h3 class="subemail">EMAIL BARU</h3>
			<?php if ($groupAuth == 3):?>
			<img style="margin-top:60px;" src="<?php echo $this->webroot; ?>resources/images/email-siswa1.png" alt="icon">
			<?php else:?>
			<img style="margin-top:60px;" src="<?php echo $this->webroot; ?>resources/images/email-guru1.png" alt="icon">
			<?php endif;?>
			<h4 id="email-username"><?php echo $loggedInName;?></h4>
			<ul class="menu_list_email-bottom" id="menu_list_email">
				<li><a class="button-pembelajaran" id="home-btn" href="<?php echo $this->webroot; ?>users/home"></a></li>
				<li><a class="button-pembelajaran" id="back-btn" href="<?php echo $this->webroot; ?>user_messages/"></a></li>
			</ul>
		</div>
		<div id="email-box" class="email-box" style="float:left;width:700px;margin-top:30px;position:relative;">
			<h3>BUAT EMAIL BARU</h3>

			<div class="userMessages form">
			<script type="text/javascript">
			jQuery(document).ready(function(){
				
				
      			
				jQuery("#guruDropdown").hide();
				jQuery("#siswaDropdown").hide();
				

				jQuery('#typeMessage').change(function() {

				var pilihapakah = jQuery(this).val();
			
					if(pilihapakah == 1){
					  jQuery("#siswaDropdown").show();
					  jQuery("#guruDropdown").hide();
					}else{
						jQuery("#siswaDropdown").hide();
					  	jQuery("#guruDropdown").show();	
					}
				});
			
			
			});
			</script>
			<?php echo $form->create('UserMessage',array('type'=>'file'));?>
				<fieldset>
				
					<label> Kirim Ke</label>
					
						<select id="typeMessage" >
						<option value="">Pilih Siswa / Guru</option>
						<option value="1" id="siswaSelected">Siswa</option>
						<option value="2" id="guruSelected">Guru</option>
						</select> 		
				<br/>
				<br/>
				<div id="guruDropdown">
					<label>Pilih Guru :</label>
					<?php echo $form->select('to_guru',$listGuru,null,array('empty'=>'Pilih Kelas'));?>
				</div>
				<br/>

				<div id="siswaDropdown">
				<div>
			 		<label for="Kelasdropdown" class="login">Silahkan Pilih Kelas Dahulu: </label>
			 		
			 		<?php 
					
			 		echo $form->select('rombel_id', $listKelas, null, array('id' => 'kelasdropdown'),array('empty'=>'Pilih Kelas'));
			 		$options = array('url' => 'get_siswa_dropdown','update' => 'nama_siswa','loading'=>"Element.show('plsLoaderID')",'loaded'=>"Element.hide('plsLoaderID')");
			 		echo $ajax->observeField('kelasdropdown',$options);?>
			 	</div>
			 	<br/>
			 	<div id="plsLoaderID" style="display:none;">
			 	<div>
			 	<?php echo $html->image("loading-ajax.gif").'Harap tunggu,Memproses data';  ?>
			 	</div>
			 	</div>
			 	
			 	<div>
			 	<label for="Kelasdropdown" class="login">Silahkan Pilih Nama Siswa: </label>
			 		<select id="nama_siswa" name="data[UserMessage][to_siswa]" >
			 		
			 		</select>
			 	</div>
			 	<br/>
			 	</div>
				<?php
					
					echo '<br/>';
					echo $form->input('subject',array('class'=>'text-input small-input','label'=>'Subject'));
					
					//echo $form->input('from');
					//echo $form->input('to');
					echo '<br/>';?>
					<span><strong>Pesan</strong></span><br/>
					<?php    echo $form->textarea('message', array('class'=>$ckeditorClass));?>
					<script type="text/javascript">
					    var CustomHTML = CKEDITOR.replace( 'UserMessageMessage',
						    {
						    	filebrowserBrowseUrl : '<?php echo $this->webroot;?>js/ckfinder/ckfinder.html',filebrowserWindowWidth : '980',
						    	filebrowserWindowHeight : '700',
						    	toolbar :
								[
									
									
								]
						    });
					
					</script>

					<?php
					echo '<br/>';
					echo $form->input('file', array('label'=>'attach File:', 'type'=>'file'));
					
				?>
				</fieldset>
				<p>
				<div class="submit-form">
				<?php
				echo $form->submit('ok-btn1.png',array('div'=>false,'class' => '','id'=>'oke-btn'));
				echo $html->link($html->image("btl-btn1.png"), array('action' => 'index'), array('escape' => false));
				
				?>
			</div>
			<?php echo $form->end();?>
			</p>
			</div>
			
			
			
		</div>
	</div>

</div>
	

