
<div id="presentase-template-content" class="clearfix">
	<img style="position:absolute;top:10px;left:20px;" src="<?php echo $this->webroot; ?>resources/images/presentasi-ico111.png" alt="icon">
	<img style="position:absolute;top:10px;right:20px;" src="<?php echo $this->webroot; ?>resources/images/presentasi-ico2111.png" alt="icon">

	<div id="presentase-content2" class="clearfix">
		<h2>PRESENTASI<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DETAIL</h2>
		
		<div style="margin-top:130px;" class="content-box-content">
			<div class="assets-view">
				
				
				<!--<p>Judul : <strong><?php echo $asset['Asset']['title']; ?></strong></p>
				
				<p>Kelas : <strong>
				<?php echo $asset['Asset']['kelas'];?>
				</strong></p>
				

				
				
				<p>Tanggal di Buat : <strong><?php echo $asset['Asset']['created']; ?></strong></p>
			
				<p>Tanggal Terakhir Diedit : <strong><?php echo $asset['Asset']['modified']; ?></strong></p>
				
				<p>Dibuat Oleh : <strong><?php echo $asset['Asset']['author']; ?></strong></p>-->
				
				<div class="clear"></div>
				<div id="video"></div> 
				<br/>
				<div class="content-asset clearfix">
					<?php 
					if ($asset['Asset']['jenis'] == 2){
						echo $asset['Asset']['content']; 
					}else{ ?>
						<p>Nama File : <strong><?php echo $asset['Asset']['file']; ?></strong></p>
						<p>Ukuran File : <strong><?php echo $asset['Asset']['filesize']; ?></strong></p>
					<?php 
						if( ($asset['Asset']['mimetype'] == 'application/pdf') || ($asset['Asset']['mimetype'] == 'application/x-pdf')){
						?>
						<iframe src='<?php echo $this->webroot.'/files/assets/'.$asset['Asset']['file']; ?>' width="100%" height="100%"></iframe>
						
						<?php }
						if(($asset['Asset']['mimetype'] == 'video/x-flv') || ($asset['Asset']['mimetype'] == 'application/octet-stream')){
						echo '<p>Jika tampilan video bermasalah keluar tekan pause dan play lagi pada player</p>';
						
						echo $video->loader(true); 
						echo $video->player($this->webroot.'/files/assets/'.$asset['Asset']['file'], 'video', false, 720, 576); 
					
						}
						echo '<br/>';
						echo '<br/>';
						echo $html->link('Klik disini untuk mendownload files','/files/assets/'.$asset['Asset']['file'],array('class'=>'button'));
					}
					?>
				</div>
		</div>
		</div>
		<ul id="menu_list_presentase">
			<!--<li><a class="button-pembelajaran" id="upload-btn-black" href="#subjectadd" rel="modal">></a></li>-->
			<li><a class="button-pembelajaran" id="add-btn-black" href="<?php echo $this->webroot; ?>assets/add"></a></li>
			<li><a class="button-pembelajaran" id="back-btn-black" href="<?php echo $this->webroot; ?>assets"></a></li>
			<li><a class="button-pembelajaran" id="home-btn-black" href="<?php echo $this->webroot; ?>users/home"></a></li>
		</ul>
	</div>

</div>