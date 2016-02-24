
<div id="labs-detail" class="labs view">
		<h2 style="color:#fff;"><?php echo $lab['Lab']['title']; ?></h2>
		
		<p>Penerbit : <strong><?php echo $lab['Lab']['penerbit']; ?></strong> | Pengarang : <strong><?php echo $lab['Lab']['pengarang']; ?></strong> | Jumlah Halaman : <strong><?php echo $lab['Lab']['jumlahhalaman']; ?></strong> | Tahun : <strong><?php echo $lab['Lab']['tahun']; ?></strong></p>
		
		<ul id="menu_list_top_pembelajaran" style="right: 50px;top: 0;">
			<li><a class="button-pembelajaran" id="download3-btn" href="<?php echo $this->webroot; ?><?php echo $lab['Lab']['pdffile']; ?>"></a></li>
			<li><a class="button-pembelajaran" id="back3-btn" href="<?php echo $this->webroot; ?>labs"></a></li>
		</ul>
		
		<div class="clear"></div>
		
		<br/>
		<div class="content-lab" style="background:#fff;">
			
			
			<div id="video"></div> 
			<?php 
				if( ($lab['Lab']['labtype'] == 1) && ($lab['Lab']['isflip']== 1)):
				?>
				<iframe src='<?php echo $this->webroot.'/files/ebooks/'.$lab['Lab']['id']; ?>' width="100%" height="800px"></iframe>
				
				<?php elseif( ($lab['Lab']['labtype'] == 1) && ($lab['Lab']['isflip']== 0) ):?>

				<iframe src='<?php echo $this->webroot.$lab['Lab']['pdffile']; ?>' width="100%" height="700px"></iframe>

				<?php endif;?>
				
				<br/>
				<br/>
				
				
		</div>
</div>