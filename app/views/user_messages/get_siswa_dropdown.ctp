<?php

if(!empty($options)) {
?>
	
	<?php
	$i = 0;
	foreach ($options as $k){?>
		<option value="<?php echo $k['SiswaPas']['id'];?>"><?php echo $k['SiswaPas']['nama'];?></option>;
	<?php } ?>
	
<?php }else{
	echo '<option value="">Data tidak ditemukan silahkan pilih kelas terlebih dahulu</option>';
} ?>