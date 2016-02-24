<div id="pembelajaran-top">
	<h2>Pembelajaran Interaktif Kelas <?php echo $kelasId;?></h2>
	<ul id="menu_list_top_pembelajaran">
		<li><a class="button-pembelajaran" id="upload-btn" href="#"></a></li>
		<li><a class="button-pembelajaran" id="download-btn" href="#"></a></li>
		<li><a class="button-pembelajaran" id="back-btn" href="<?php echo $this->webroot; ?>subjects/home"></a></li>
		<?php if ($kelasId != 12):?>
		<li><a class="button-pembelajaran" id="next-btn" href="<?php echo $this->webroot; ?>/subjects/kelas/<?php echo $kelasId+1; ?>"></a></li>
		<?php endif;?>
		<li><a class="button-pembelajaran" id="home-btn" href="<?php echo $this->webroot; ?>/users/home"></a></li>
	</ul>
</div>
<div id="pembelajaran-isi">
	<a class="pembelajran-cover" href="<?php echo $this->webroot; ?>flash/<?php echo $subject['Subject']['folder_name'];?>/<?php echo $subject['Subject']['file_name'];?>">
		<span>
			<!--<img src="<?php echo $this->webroot; ?>resources/images/icons/lessons/<?php echo $subject['Subject']['icon'];?>" alt="icon"><br>-->
			<img src="<?php echo $this->webroot; ?>resources/images/book-cover/ppkn-sd.png" alt="icon">
			
		</span>
		
	</a>
	<a class="pembelajran-cover" href="<?php echo $this->webroot; ?>flash/<?php echo $subject['Subject']['folder_name'];?>/<?php echo $subject['Subject']['file_name'];?>">
		<span>
			<!--<img src="<?php echo $this->webroot; ?>resources/images/icons/lessons/<?php echo $subject['Subject']['icon'];?>" alt="icon"><br>-->
			<img src="<?php echo $this->webroot; ?>resources/images/book-cover/ips-sd.png" alt="icon">
			
		</span>
		
	</a>
	<a class="pembelajran-cover" href="<?php echo $this->webroot; ?>flash/<?php echo $subject['Subject']['folder_name'];?>/<?php echo $subject['Subject']['file_name'];?>">
		<span>
			<!--<img src="<?php echo $this->webroot; ?>resources/images/icons/lessons/<?php echo $subject['Subject']['icon'];?>" alt="icon"><br>-->
			<img src="<?php echo $this->webroot; ?>resources/images/book-cover/mat-sd.png" alt="icon">
			
		</span>
		
	</a>
	<a class="pembelajran-cover" href="<?php echo $this->webroot; ?>flash/<?php echo $subject['Subject']['folder_name'];?>/<?php echo $subject['Subject']['file_name'];?>">
		<span>
			<!--<img src="<?php echo $this->webroot; ?>resources/images/icons/lessons/<?php echo $subject['Subject']['icon'];?>" alt="icon"><br>-->
			<img src="<?php echo $this->webroot; ?>resources/images/book-cover/indo-sd.png" alt="icon">
			
		</span>
		
	</a>
	<a class="pembelajran-cover" href="<?php echo $this->webroot; ?>flash/<?php echo $subject['Subject']['folder_name'];?>/<?php echo $subject['Subject']['file_name'];?>">
		<span>
			<!--<img src="<?php echo $this->webroot; ?>resources/images/icons/lessons/<?php echo $subject['Subject']['icon'];?>" alt="icon"><br>-->
			<img src="<?php echo $this->webroot; ?>resources/images/book-cover/ipa-sd.png" alt="icon">
			
		</span>
		
	</a>
</div>


<!--<h2>Direktori Pembelajaran Interaktif</h2>
<br/>
<br/>
<h3>Kelas <?php echo $kelasId;?></h3>
<hr/>
<br/>
<?php if(!$subjects){?>

	<p>Data tidak ditemukan</p>

<?php }else{?>
	
	
	<?php
	$i = 0;
	foreach ($subjects as $subject):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<div class="holder-button">
	<a class="shortcut-button-lesson" href="<?php echo $this->webroot; ?>flash/<?php echo $subject['Subject']['folder_name'];?>/<?php echo $subject['Subject']['file_name'];?>">
		<span>
			<img src="<?php echo $this->webroot; ?>resources/images/icons/lessons/<?php echo $subject['Subject']['icon'];?>" alt="icon"><br>
			<?php echo $subject['Subject']['name'];?>
		</span>
		
	</a>
	<?php if($groupAuth==1):?>
	<p class="edit_pembelajaran">
		<?php echo $html->link(__('Edit', true), array('action' => 'edit', $subject['Subject']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $subject['Subject']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subject['Subject']['id'])); ?>
	</p>
	<?php endif;?>
	</div>

	<?php endforeach; ?>
	<br/>
	<br/>
<?php } ?>
<?php echo $html->link(__('Kembali', true), array('action' => 'home'),array('class'=>'button'));?>-->
