<div class="pengumuman-content">
	<div id="pengumuman-category">
		<div class="pengumumen-form">
			<h2>Tambah Pengumuman</h2>
			
		<?php echo $form->create('Pengumuman',array('enctype'=>'multipart/form-data'));?>
			<fieldset>
			<?php
				
				echo $form->hidden('scope',array('value'=>'1'));
				
				echo '<p>';
				
				echo $form->input('title',array('class'=>'text-input small-input','label'=>'Judul'));
				echo '</p>';
				echo '<p>';
				echo '<label>Pilih Category:</label>';
				$listBagian = array('1'=>'Sekolah ke Guru','2'=>'Guru ke Murid','3'=>'Umum');
				echo $form->select('scope',$listBagian,null);
				echo '</p>';?>
				<p>
					<?php    echo $form->textarea('content', array('class'=>$ckeditorClass));?>
					<script type="text/javascript">
					    var CustomHTML = CKEDITOR.replace( 'PengumumanContent',
						    {
						    	filebrowserBrowseUrl : '<?php echo $this->webroot;?>js/ckfinder/ckfinder.html',filebrowserWindowWidth : '980',
						    	filebrowserWindowHeight : '700',
						    	toolbar :
								[
									['Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink'],
									
								]
						    });
					
					</script>
				</p>

				<?php 
				echo $form->input('user_id',array('type'=>'hidden','value'=>$loggedInIdAsli));
				?>
				<!--<label>Tanggal di publish</label>
				<?php echo $form->input('start_date',array('label'=>false));
				
				echo '</p>';
				echo '<p>'; ?>
				<label>Tanggal Pengumuman expired</label>
				<?php
				echo $form->input('expiration_date',array('label'=>false));?>-->
				<?php 
				echo '<p>';
				echo $form->input('file', array('label'=>'attach File:', 'type'=>'file'));
				
				echo '</p>';?>
			
			</fieldset>
			<div class="submit-form">
			<?php
				echo $form->submit('ok-btn1.png',array('div'=>false,'class' => '','id'=>'oke-btn'));
				echo $html->link($html->image("btl-btn1.png"), array('action' => 'category/'.$cat), array('escape' => false));
				
				?>
			</div>
		<?php echo $form->end();?>
		</div>
	</div>
</div>
