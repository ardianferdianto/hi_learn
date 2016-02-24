<div class="pengumuman-content">
	<div class="nav-info-category">	
		<div class="nav-info-holder">	
			<a id="info-sek-guru2" href="<?php echo $this->webroot; ?>pengumumen/category/1"><img src="<?php echo $this->webroot; ?>resources/images/info-sek-guru-small.png" alt="icon"></a>
			<a id="info-guru-murid2" href="<?php echo $this->webroot; ?>pengumumen/category/2"><img src="<?php echo $this->webroot; ?>resources/images/info-guru-murid-small.png" alt="icon"></a>
			<a id="info-umum2" href="<?php echo $this->webroot; ?>pengumumen/category/3"><img src="<?php echo $this->webroot; ?>resources/images/info-umum-small.png" alt="icon"></a>
		</div>
	</div>
	<div id="pengumuman-category">
		<h2>info</h2>
		<?php if($pengumuman['Pengumuman']['scope'] ==1):?>
		<h3>Sekolah ke Guru</h3>
		<?php elseif($pengumuman['Pengumuman']['scope'] ==2):?>
		<h3>Guru ke Murid</h3>
		<?php elseif($pengumuman['Pengumuman']['scope'] ==3):?>
		<h3>Umum</h3>
		<?php endif;?>
		<div class="clear"></div>

		<div class="pengumuman-view clearfix">
			<p>Judul &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $pengumuman['Pengumuman']['title']; ?></p>
			<p>Sumber&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $pengumuman['User']['nama']; ?></p>
			<p>Tanggal&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $pengumuman['Pengumuman']['created']; ?></p>
			<hr/>
			<p><?php echo $pengumuman['Pengumuman']['content']; ?></p>
			
			<?php if( $pengumuman['Pengumuman']['file'] != null):?>
				<?php if( $pengumuman['Pengumuman']['mimetype'] == 'image/png' || $pengumuman['Pengumuman']['mimetype'] == 'image/jpg' || $pengumuman['Pengumuman']['mimetype'] == 'image/jpeg'):?>
					<img src="<?php echo $this->webroot;?>pengumuman-atachment/<?php echo $pengumuman['Pengumuman']['file'];?>" width="200px"/>
				<?php endif; ?>
				<p><small>Attachment:</small><br/>
					<a href="<?php echo $this->webroot;?>pengumuman-atachment/<?php echo $pengumuman['Pengumuman']['file'];?>"><?php echo $pengumuman['Pengumuman']['file'];?></a></p>
			<?php endif; ?>
		
		</div>
		
		
	</div>
	
	
	
</div>
	<ul id="menu_list_info">
		<li><a class="button-pembelajaran" id="add-btn-black" href="<?php echo $this->webroot; ?>pengumumen/add"></a></li>
		<li><a class="button-pembelajaran" id="back-btn-black" href="<?php echo $this->webroot; ?>pengumumen/home"></a></li>
		<!--<?php if ($kelasId != 1):?>
		
		<?php endif;?>
		<?php if ($kelasId != 6):?>
		<li><a class="button-pembelajaran" id="next-btn" href="<?php echo $this->webroot; ?>subjects/kelas/<?php echo $kelasId+1; ?>"></a></li>
		<?php endif;?>-->
		<li><a class="button-pembelajaran" id="home-btn-black" href="<?php echo $this->webroot; ?>users/home"></a></li>
	</ul>


