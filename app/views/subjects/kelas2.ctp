

<?php if($kelasId == 1 || $kelasId == 2 || $kelasId == 3 || $kelasId == 4 || $kelasId == 5 || $kelasId == 6):?>
<div id="pembelajaran-top">
	<h2>Pembelajaran Interaktif Kelas <?php echo $kelasId;?></h2>
	<ul id="menu_list_top_pembelajaran">
		<li><a class="button-pembelajaran" id="upload-btn" href="#subjectadd" rel="modal">></a></li>
		<li><a class="button-pembelajaran" id="download-btn" href="#downloadlist" rel="modal"></a></li>
		<?php if ($kelasId != 1):?>
		<li><a class="button-pembelajaran" id="sebelumnya-btn" href="<?php echo $this->webroot; ?>subjects/kelas/<?php echo $kelasId-1; ?>"></a></li>
		<?php endif;?>
		<?php if ($kelasId != 6):?>
		<li><a class="button-pembelajaran" id="next-btn" href="<?php echo $this->webroot; ?>subjects/kelas/<?php echo $kelasId+1; ?>"></a></li>
		<?php endif;?>
		<li><a class="button-pembelajaran" id="home-btn" href="<?php echo $this->webroot; ?>users/home"></a></li>
	</ul>
</div>
<?php else:?>
	<div id="pembelajaran-top-smp">
		
	</div>
<?php endif;?>
<?php if($kelasId == 1 || $kelasId == 2 || $kelasId == 3 || $kelasId == 4 || $kelasId == 5 || $kelasId == 6):?>
	<div id="pembelajaran-isi">
<?php elseif($kelasId == 7 || $kelasId == 8 || $kelasId == 9):?>
	<div id="holder-pemb">
		<div id="pembelajaran-isi-smp">
			<h2>Pembelajaran Interaktif Kelas <?php echo $kelasId;?></h2>
<?php else:?>
	<div id="holder-pemb-sma">
		<div id="pembelajaran-isi-sma">
<?php endif;?>
<?php if($kelasId == 7 || $kelasId == 8 || $kelasId == 9):?>
	
	<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="100%" height="100%" align="middle" wmode="transparent">
	    <param name="movie" value="<?php echo $this->webroot; ?>resources/pembelajaran-kelas<?php echo $kelasId; ?>.swf"/>
	    <!--[if !IE]>-->
	   <object type="application/x-shockwave-flash" data="<?php echo $this->webroot; ?>resources/pembelajaran-kelas<?php echo $kelasId; ?>.swf" width="100%" height="100%" wmode="transparent"  align="middle">
	        <param name="movie" value="<?php echo $this->webroot; ?>resources/pembelajaran.swf"/>
	    <!--<![endif]-->
	       <a href="http://www.adobe.com/go/getflash">
	            <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player"/>
	        </a>
	    <!--[if !IE]>-->
	   	</object>
	    <!--<![endif]-->
	</object>
	
<?php else:?>
	<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="100%" height="100%" align="middle" wmode="transparent">
	    <param name="movie" value="<?php echo $this->webroot; ?>resources/pembelajaran-kelas<?php echo $kelasId; ?>.swf"/>
	    <!--[if !IE]>-->
	   <object type="application/x-shockwave-flash" data="<?php echo $this->webroot; ?>resources/pembelajaran-kelas<?php echo $kelasId; ?>.swf" width="100%" height="100%" wmode="transparent"  align="middle">
	        <param name="movie" value="<?php echo $this->webroot; ?>resources/pembelajaran.swf"/>
	    <!--<![endif]-->
	       <a href="http://www.adobe.com/go/getflash">
	            <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player"/>
	        </a>
	    <!--[if !IE]>-->
	   	</object>
	    <!--<![endif]-->
	</object>
<?php endif;?>
	
<?php if($kelasId == 1 || $kelasId == 2 || $kelasId == 3 || $kelasId == 4 || $kelasId == 5 || $kelasId == 6):?>
	</div>
<?php elseif($kelasId == 7 || $kelasId == 8 || $kelasId == 9):?>
	</div>
	</div>
	<div id="menu-bottom-pembelajaran">
		<ul id="menu_list_bottom_pembelajaran">
			<li><a class="button-pembelajaran" id="upload-btn" href="#"></a></li>
			<li><a class="button-pembelajaran" id="download-btn" href="#"></a></li>
			<?php if ($kelasId != 1):?>
			<li><a class="button-pembelajaran" id="back-btn" href="<?php echo $this->webroot; ?>/subjects/kelas/<?php echo $kelasId-1; ?>"></a></li>
			<?php endif;?>
			<?php if ($kelasId != 12):?>
			<li><a class="button-pembelajaran" id="next-btn" href="<?php echo $this->webroot; ?>/subjects/kelas/<?php echo $kelasId+1; ?>"></a></li>
			<?php endif;?>
			<li><a class="button-pembelajaran" id="home-btn" href="<?php echo $this->webroot; ?>/users/home"></a></li>
		</ul>
	</div>
<?php else:?>
	</div>
	</div>
	<div id="menu-bottom-pembelajaran">
		<ul id="menu_list_bottom_pembelajaran">
			<li><a class="button-pembelajaran" id="upload-btn" href="#"></a></li>
			<li><a class="button-pembelajaran" id="download-btn" href="#"></a></li>
			<?php if ($kelasId != 1):?>
			<li><a class="button-pembelajaran" id="back-btn" href="<?php echo $this->webroot; ?>/subjects/kelas/<?php echo $kelasId-1; ?>"></a></li>
			<?php endif;?>
			<?php if ($kelasId != 12):?>
			<li><a class="button-pembelajaran" id="next-btn" href="<?php echo $this->webroot; ?>/subjects/kelas/<?php echo $kelasId+1; ?>"></a></li>
			<?php endif;?>
			<li><a class="button-pembelajaran" id="home-btn" href="<?php echo $this->webroot; ?>/users/home"></a></li>
		</ul>
	</div>
<?php endif;?>

<div id="subjectadd" class="subjects form" style="display:none;">

	



<?php echo $form->create('Subject',array('type'=>'file'));?>
<h2><?php __('Form Penambahan Pembelajaran Interaktif');?></h2>
<div class="warning-erase">
<p><strong>PERHATIAN!!</strong>
		<br/>
		SOFTWARE YANG AKAN DIUPLOAD AKAN MENGGANTIKAN SOFTWARE YANG SUDAH ADA SEBELUMNYA PADA BIDANG STUDY DAN BAGIAN YANG SAMA APAKAH ANDA YAKIN PROSES INI TETAP DILANJUTKAN ?
	</p>
	<fieldset>
</div> 		
	<?php
		
		
		echo $form->input('kelas',array('type'=>'hidden','value'=>$kelasId));
		echo $form->input('tipe_pemb',array('type'=>'hidden','value'=>1));
		if($kelasId == 6){
			echo '<p>';
			echo '<label>Pilih Bidang Studi:</label>';
			$listBidangStudi = array('pkn'=>'PKN','ips'=>'IPS','matematika'=>'Matematika','bahasa-indonesia'=>'Bahasa Indonesia','ipa'=>'IPA','bahasa-inggris'=>'Bahasa Inggris','education'=>'Ketrampilan Edukasi','komputer'=>'Komputer');
			echo $form->select('matpel',$listBidangStudi,null,array('class'=>'matpel_select'));
			echo '</p>';
		}else{
			echo '<p>';
			echo '<label>Pilih Bidang Studi:</label>';
			$listBidangStudi = array('pkn'=>'PKN','ips'=>'IPS','matematika'=>'Matematika','bahasa-indonesia'=>'Bahasa Indonesia','ipa'=>'IPA','bahasa-inggris'=>'Bahasa Inggris');
			echo $form->select('matpel',$listBidangStudi,null,array('class'=>'matpel_select'));
			echo '</p>';
		}
		echo '<div id="pkn" class="bagian_select" style="display:none;">';
		echo '<p>';
		echo '<label>Pilih Bagian:</label>';
		$listBagian = array('1'=>'Bagian 1','2'=>'Bagian 2');
		echo $form->select('bagian1',$listBagian,null);
		echo '</p>';
		echo '</div>';
		echo '<div id="matematika" class="bagian_select" style="display:none;">';
		echo '<p>';
		echo '<label>Pilih Bagian:</label>';
		$listBagian = array('1'=>'Bagian 1','2'=>'Bagian 2');
		echo $form->select('bagian2',$listBagian,null);
		echo '</p>';
		echo '</div>';
		if($kelasId == 6){
			echo '<div id="komputer" class="bagian_select" style="display:none;">';
			echo '<p>';
			echo '<label>Pilih Bagian:</label>';
			$listBagian = array('1'=>'Bagian 1','2'=>'Bagian 2','3'=>'Bagian 3');
			echo $form->select('bagian3',$listBagian,null);
			echo '</p>';
			echo '</div>';
			echo '<div id="education" class="bagian_select" style="display:none;">';
			echo '<p>';
			echo '<label>Pilih Bagian:</label>';
			$listBagian = array('1'=>'Bagian 1','2'=>'Bagian 2');
			echo $form->select('bagian4',$listBagian,null);
			echo '</p>';
			echo '</div>';
		}
		?>
		<p>
		<?php
		echo $form->input('image', array('label'=>'Zip File:', 'type'=>'file'));
		echo '</p>';?>
		
	</fieldset>
<?php echo $form->end('Submit');?>
<script type="text/javascript">
jQuery(function() {
                  //     all the DOM elements have loaded
    jQuery('.bagian_select').hide();
    jQuery('.matpel_select').change(function(){
    	jQuery('.bagian_select').hide();
        jQuery('#subjectadd #' + jQuery(this).val()).show();
        //alert(jQuery(this).val());
    });

});

</script>
</div>

<div id="downloadlist" class="" style="display:none;">
<h4>Pilih Pembelajaran Interaktif Kelas <?php echo $kelasId;?> yang akan di download</h4>
<hr/>
<ul>
<?php if($kelasId == 1 || $kelasId == 2 || $kelasId == 3):?>

	<li><a href="<?php echo $this->webroot; ?>pembelajaran/kelas<?php echo $kelasId; ?>/pkn1.zip">PKN 1</a></li>
	<li><a href="<?php echo $this->webroot; ?>pembelajaran/kelas<?php echo $kelasId; ?>/pkn2.zip">PKN 2</a></li>
	<li><a href="<?php echo $this->webroot; ?>pembelajaran/kelas<?php echo $kelasId; ?>/ips.zip">IPS</a></li>
	<li><a href="<?php echo $this->webroot; ?>pembelajaran/kelas<?php echo $kelasId; ?>/matematika1.zip">Matematika 1</a></li>
	<li><a href="<?php echo $this->webroot; ?>pembelajaran/kelas<?php echo $kelasId; ?>/matematika2.zip">Matematika 2</a></li>
	<li><a href="<?php echo $this->webroot; ?>pembelajaran/kelas<?php echo $kelasId; ?>/bahasa-indonesia.zip">Bahasa Indonesia</a></li>
	<li><a href="<?php echo $this->webroot; ?>pembelajaran/kelas<?php echo $kelasId; ?>/ipa.zip">IPA</a></li>

<?php elseif($kelasId == 4 || $kelasId == 5):?>
	<li><a href="<?php echo $this->webroot; ?>pembelajaran/kelas<?php echo $kelasId; ?>/pkn1.zip">PKN 1</a></li>
	<li><a href="<?php echo $this->webroot; ?>pembelajaran/kelas<?php echo $kelasId; ?>/pkn2.zip">PKN 2</a></li>
	<li><a href="<?php echo $this->webroot; ?>pembelajaran/kelas<?php echo $kelasId; ?>/ips.zip">IPS</a></li>
	<li><a href="<?php echo $this->webroot; ?>pembelajaran/kelas<?php echo $kelasId; ?>/matematika1.zip">Matematika 1</a></li>
	<li><a href="<?php echo $this->webroot; ?>pembelajaran/kelas<?php echo $kelasId; ?>/matematika2.zip">Matematika 2</a></li>
	<li><a href="<?php echo $this->webroot; ?>pembelajaran/kelas<?php echo $kelasId; ?>/bahasa-indonesia.zip">Bahasa Indonesia</a></li>
	<li><a href="<?php echo $this->webroot; ?>pembelajaran/kelas<?php echo $kelasId; ?>/ipa.zip">IPA</a></li>
	<li><a href="<?php echo $this->webroot; ?>pembelajaran/kelas<?php echo $kelasId; ?>/bahasa-inggris.zip">Bahasa Inggris</a></li>
<?php elseif($kelasId == 6):?>
	<li><a href="<?php echo $this->webroot; ?>pembelajaran/kelas<?php echo $kelasId; ?>/pkn1.zip">PKN 1</a></li>
	<li><a href="<?php echo $this->webroot; ?>pembelajaran/kelas<?php echo $kelasId; ?>/pkn2.zip">PKN 2</a></li>
	<li><a href="<?php echo $this->webroot; ?>pembelajaran/kelas<?php echo $kelasId; ?>/ips.zip">IPS</a></li>
	<li><a href="<?php echo $this->webroot; ?>pembelajaran/kelas<?php echo $kelasId; ?>/matematika1.zip">Matematika 1</a></li>
	<li><a href="<?php echo $this->webroot; ?>pembelajaran/kelas<?php echo $kelasId; ?>/matematika2.zip">Matematika 2</a></li>
	<li><a href="<?php echo $this->webroot; ?>pembelajaran/kelas<?php echo $kelasId; ?>/bahasa-indonesia.zip">Bahasa Indonesia</a></li>
	<li><a href="<?php echo $this->webroot; ?>pembelajaran/kelas<?php echo $kelasId; ?>/ipa.zip">IPA</a></li>
	<li><a href="<?php echo $this->webroot; ?>pembelajaran/kelas<?php echo $kelasId; ?>/bahasa-inggris.zip">Bahasa Inggris</a></li>
	<li><a href="<?php echo $this->webroot; ?>pembelajaran/kelas<?php echo $kelasId; ?>/education1.zip">Ketrampilan Edukatif 1</a></li>
	<li><a href="<?php echo $this->webroot; ?>pembelajaran/kelas<?php echo $kelasId; ?>/education2.zip">Ketrampilan Edukatif 2</a></li>
	<li><a href="<?php echo $this->webroot; ?>pembelajaran/kelas<?php echo $kelasId; ?>/komputer1.zip">Komputer 1</a></li>
	<li><a href="<?php echo $this->webroot; ?>pembelajaran/kelas<?php echo $kelasId; ?>/komputer1.zip">Komputer 2</a></li>
	<li><a href="<?php echo $this->webroot; ?>pembelajaran/kelas<?php echo $kelasId; ?>/komputer3.zip">Komputer 3</a></li>
<?php endif;?>
</ul>
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
