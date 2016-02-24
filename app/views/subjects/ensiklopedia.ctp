<style type="text/css">
#body-wrapper{
	position: relative;
	z-index: 1;
}
#pembelajaran-isi {
height: 470px;
width: 100%;
padding: 113px 40px 0 40px;
}

.boxcd {
    width: 105px;
    margin: 34px 25px 75px 25px;
    float: left;
    -webkit-box-shadow: none;
    -moz-box-shadow:    none;
    box-shadow:         none;
    background: transparent;

}
.box {
    width: 150px;
    
    margin: 25px 25px 75px 25px;
    float: left;
    
}
#main-content-layout{
	width: 100%;
	position: relative;
}
.videobox{
        -webkit-box-shadow: 4px 0px 10px 0px rgba(50, 50, 50, 1);
-moz-box-shadow:    4px 0px 10px 0px rgba(50, 50, 50, 1);
box-shadow:         4px 0px 10px 0px rgba(50, 50, 50, 1);
    margin: 10px 0 0 0;
    -webkit-transform: perspective( 600px ) rotateY( 45deg );
-moz-transform: perspective( 600px ) rotateY( 45deg );
-o-transform: perspective( 600px ) rotateY( 45deg );
transform: perspective( 600px ) rotateY( 45deg );
max-width: none;
height: 170px;
}
#pembelajaran-isi{
	width: 100%;
	padding: 116px 30px 0 30px;
}
.itemisotope {
width: 180px;
height: 280px;
margin: 5px;
display: inline-block;
overflow: hidden;
position: relative;
}
#ensiklopedia-isi{
	padding:200px 20px 0 20px; 
}
a.trash_subject{
	background: #fff;
	padding: 10px 4px;
	color:#000;
	width: auto;
	height: auto;
}
</style>
<div id="holder-pemb-sma" >
	<h2 id="tugastitle" style="position: absolute;color: #FFF;left: 28em;top: 3em;">Ensiklopedia</h2>
	<ul id="menu_list_top_pembelajaran">
		<li><a class="button-pembelajaran" id="upload-btn" href="#subjectadd" rel="_modal"></a></li>
		<li><a class="button-pembelajaran" id="download-btn" href="#downloadlist" rel="modal"></a></li>



		<li><a class="button-pembelajaran" id="home-btn" href="<?php echo $this->webroot; ?>/users/home"></a></li>
	</ul>
	<img src="<?php echo $this->webroot;?>homenew/images/logo.png" style="width: 145px; top: 14px; left: 47px;position:absolute;">
		<div id="ensiklopedia-isi" class="headensiklopedia">

			<?php foreach ($ensiklopedia as $subject):
			?>
			<div class="itemisotope tooltip" title="<?php echo $subject['Subject']['name'] .' - '.$subject['Pelajaran']['nama']. '-' .$subject['Grade']['keterangan']?>">
				<div class="box boxcd" id="#">
					<a  href="<?php echo $this->webroot;?>subjects/view/?filename=<?php echo $this->webroot;?>pembelajaran/ensiklopedia/<?php echo $subject ['Subject']['id']; ?>/<?php echo $subject ['Subject']['file_name']; ?>&filefolder=<?php echo $this->webroot;?>pembelajaran/ensiklopedia/<?php echo $subject ['Subject']['id']; ?>" class="ebookpopup">
						<img class="videobox postim bittle" src="<?php echo $this->webroot;?><?php echo $subject['Subject']['icon'];?>"></img>

						<?php if(($subject['Subject']['vendor_id']!=0) && ($subject['Subject']['vendor_id']!=1)):?>
					
						<a class="trash_subject" onclick="return confirm('Anda yakin ingin menghapus data ini? Semua file pembelajaran ini akan terhapus');" href="<?php echo $this->webroot;?>subjects/delete/<?php echo $subject['Subject']['id'];?>/2" style="display:none;"><img src="<?php echo $this->webroot;?>img/trash_fill_12x12.png"/> Hapus</a>
						<?php else:?>
						<?php endif;?>
					</a>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
</div>

<div id="downloadlist" class="" style="display:none;">
<h4>Pilih Ensiklopedia yang akan di download</h4>
<hr/>
<ul>
	<?php foreach ($ensiklopedia as $subject):?>
	<li><a href="<?php echo $this->webroot;?>/pembelajaran/ensiklopedia/<?php echo $subject ['Subject']['id']; ?>/<?php echo $subject ['Subject']['file_name']; ?>.zip"><?php echo $subject ['Subject']['name']; ?></a></li>
	
	<?php endforeach; ?>
</div>




<div id="subjectadd" class="subjects form" style="display:none;">
<?php echo $form->create('Subject',array('type'=>'file'));?>
<h2><?php __('Form Penambahan Ensiklopedia Interaktif');?></h2>

	<?php
		
		
		echo $form->input('type',array('type'=>'hidden','value'=>2));
		
		echo $form->input('grade',array('type'=>'hidden','value'=>0));
		echo $form->input('vendor_id',array('type'=>'hidden','value'=>3));
		

		echo '<p>';
		echo '<label>Judul:</label>';	
		echo $form->input('name',array('class'=>'text-input normal-input','label'=>false));
		echo '</p>';

		echo '<p>';
		echo '<label>Pilih Kelas:</label>';		
		
		echo $form->select('grade_id',$listclass,null,array('class'=>'matpel_select'));
		echo '</p>';


		echo '<p>';
		echo '<label>Pilih Bidang Studi:</label>';		
		
		echo $form->select('pelajaran_id',$listBidangStudi,null,array('class'=>'matpel_select'));
		echo '</p>';

		

		echo '<p>';
		echo $form->input('file_name',array('class'=>'text-input normal-input'));
		echo '</p>';

		
		?>

		<p>
		<?php
		echo $form->input('File.image1', array('label'=>'Cover:', 'type'=>'file'));
		echo '</p>';?>

		<p>
		<?php
		echo $form->input('zipfile', array('label'=>'Zip File:', 'type'=>'file'));
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

    jQuery(document).on('mouseenter', '.itemisotope',  function(){
    	jQuery(this).find('.trash_subject').show();
  		//alert( "Goodbye!" ); // jQuery 1.3+
	}).on('mouseleave', '.itemisotope', function() {
        jQuery(this).find('.trash_subject').hide();
	});

});

</script>
</div>


