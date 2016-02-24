<div class="subjects form">

<?php echo $form->create('Subject');?>
<h2><?php __('Form edit Pembelajran Interaktif');?></h2>
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
		<p>
			<label>Icon:</label>
			<select style="width:100px" class="mydds" name="data[Subject][icon]">
		    <option value="biologi.png" selected="selected" title="<?php echo $this->webroot; ?>resources/images/icons/lessons/biologi-small.png"></option>
		    <option value="ekonomi.png" title="<?php echo $this->webroot; ?>resources/images/icons/lessons/ekonomi-small.png"></option>
		    <option value="ens-alamsemesta.png" title="<?php echo $this->webroot; ?>resources/images/icons/lessons/ens-alamsemesta-small.png"></option>
		    <option value="ens-arsitek.png" title="<?php echo $this->webroot; ?>resources/images/icons/lessons/ens-arsitek-small.png"></option>
		    <option value="ens-art.png" title="<?php echo $this->webroot; ?>resources/images/icons/lessons/ens-art-small.png"></option>
		    <option value="ens-elektronika.png" title="<?php echo $this->webroot; ?>resources/images/icons/lessons/ens-elektronika-small.png"></option>
		    <option value="ens-geografi.png" title="<?php echo $this->webroot; ?>resources/images/icons/lessons/ens-geografi-small.png"></option>
		    <option value="ens-geologi.png" title="<?php echo $this->webroot; ?>resources/images/icons/lessons/ens-geologi-small.png"></option>
		    <option value="ens-hewan.png" title="<?php echo $this->webroot; ?>resources/images/icons/lessons/ens-hewan-small.png"></option>
		    <option value="ens-manusia.png" title="<?php echo $this->webroot; ?>resources/images/icons/lessons/ens-manusia-small.png"></option>
		    <option value="ens-meteorologi.png" title="<?php echo $this->webroot; ?>resources/images/icons/lessons/ens-meteorologi-small.png"></option>
		    <option value="ens-music.png" title="<?php echo $this->webroot; ?>resources/images/icons/lessons/ens-music-small.png"></option>
		     <option value="ens-sport.png" title="<?php echo $this->webroot; ?>resources/images/icons/lessons/ens-sport-small.png"></option>
		    <option value="ens-transdarat.png" title="<?php echo $this->webroot; ?>resources/images/icons/lessons/ens-transdarat-small.png"></option>
		    <option value="ens-translaut.png" title="<?php echo $this->webroot; ?>resources/images/icons/lessons/ens-translaut-small.png"></option>
		    <option value="ens-transudara.png" title="<?php echo $this->webroot; ?>resources/images/icons/lessons/ens-transudara-small.png"></option>
		    <option value="ens-tumbuhan.png" title="<?php echo $this->webroot; ?>resources/images/icons/lessons/ens-tumbuhan-small.png"></option>
		    <option value="ens-tumuhan.png" title="<?php echo $this->webroot; ?>resources/images/icons/lessons/ens-tumuhan-small.png"></option>
		    <option value="fisika.png" title="<?php echo $this->webroot; ?>resources/images/icons/lessons/fisika-small.png"></option>
		    <option value="geografi.png" title="<?php echo $this->webroot; ?>resources/images/icons/lessons/geografi-small.png"></option>
		    <option value="kimia.png" title="<?php echo $this->webroot; ?>resources/images/icons/lessons/kimia-small.png"></option>
		    <option value="matematika.png" title="<?php echo $this->webroot; ?>resources/images/icons/lessons/matematika-small.png"></option>
		    <option value="peta.png" title="<?php echo $this->webroot; ?>resources/images/icons/lessons/peta-small.png"></option>
		    <option value="sejarah.png" title="<?php echo $this->webroot; ?>resources/images/icons/lessons/sejarah-small.png"></option>
		    <option value="sosiologi.png" title="<?php echo $this->webroot; ?>resources/images/icons/lessons/sosiologi-small.png"></option>
		    <option value="tik.png" title="<?php echo $this->webroot; ?>resources/images/icons/lessons/tik-small.png"></option>
		      
		    </select>
	    <p>
		<?php
		echo $form->input('comments');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>

<script language="javascript" type="text/javascript">




jQuery(document).ready(function() {

try {
		oHandler = jQuery(".mydds").msDropDown().data("dd");
		//oHandler.visible(true);
		//alert($.msDropDown.version);
		//$.msDropDown.create("body select");
		jQuery("#ver").html(jQuery.msDropDown.version);
		} catch(e) {
			alert("Error: "+e.message);
		}
})
/*
$(document).bind("keydown", function() {
	console.log("document keydown");
})
*/
</script>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Subjects', true), array('action' => 'index'));?></li>
	</ul>
</div>
