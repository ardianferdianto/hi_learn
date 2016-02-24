<div class="subjects form">

<?php echo $form->create('Subject');?>
<h2><?php __('Form Penambahan Pembelajaran Interaktif');?></h2>
	<fieldset>
 		
	<?php
		echo '<p>';
		echo $form->input('name',array('label'=>'Judul'));
		echo '</p>';
		echo '<p>';
		echo '<label>Kelas:</label>';
		$listKelas = array(1=>1,2=>2,3=>3,4=>4,5=>5,6=>6,7=>7,8=>8,9=>9,10=>10,11=>11,12=>12);
		echo $form->select('grade',$listKelas,null);
		echo '</p>';
		
		echo $form->input('type',array('type'=>'hidden','value'=>$typeSubject));
		
		echo '<p>';
		echo $form->input('file_name',array('label'=>'Nama File'));
		echo '</p>';
		echo '<p>';
		echo $form->input('folder_name',array('label'=>'Nama Folder'));
		echo '</p>';?>
		
		<?php
		echo $form->input('comments');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>

