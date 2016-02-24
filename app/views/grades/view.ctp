<?php if($groupAuth == 3 ):?>
<div class="users view">
<h2><?php  __('Detail Siswa');?></h2>
	
	<dl class="info">
		<dt><?php __('Username'); ?></dt>
		<dd>: <?php echo $user['User']['username']; ?></dd>
		<dt><?php __('Nama'); ?></dt>
		<dd>: <?php echo $user['User']['nama']; ?></dd>	
		
		
		<dt><?php __('Kelas'); ?></dt>
		<dd>: <?php echo $user['User']['kelas']; ?></dd>
		<dt><?php __('Jenis Kelamin'); ?></dt>
		<dd><?php 
		$jenisKelamin = $user['User']['sex']; 
		if ($jenisKelamin == 1) {
		echo ': Pria';
		}else{
		echo ': Wanita';
		}
		
		?></dd>
		
		
		
	</dl>
</div>
<div class="clear"></div>

<?php else:?>
<div class="users view">
<h2><?php  __('Detail Guru');?></h2>
	
	<dl class="info">
		<dt><?php __('Username'); ?></dt>
		<dd>: <?php echo $user['User']['username']; ?></dd>
		<dt><?php __('Nama'); ?></dt>
		<dd>: <?php echo $user['User']['nama']; ?></dd>	
		
		<dt><?php __('Jenis Kelamin'); ?></dt>
		<dd><?php 
		$jenisKelamin = $user['User']['sex']; 
		if ($jenisKelamin == 1) {
		echo ': Pria';
		}else{
		echo ': Wanita';
		}
		
		?></dd>
		
		
		
	</dl>
</div>
<div class="clear"></div>

<?php endif;?>