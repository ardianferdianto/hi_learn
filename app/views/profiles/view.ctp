<h2>Profile Sekolah</h2>
<hr/>

<dl class="info">
	<dt><?php __('Nama Sekolah'); ?></dt>
	<dd>: <?php echo $profile['Profile']['name']; ?></dd>
	<dt><?php __('Alamat Sekolah'); ?></dt>
	<dd>: <?php echo $profile['Profile']['alamat']; ?></dd>
	<dt><?php __('No Telpon'); ?></dt>
	
	<dd>: <?php echo $profile['Profile']['no_tlp']; ?></dd>
	<dt><?php __('Tahun Berdiri'); ?></dt>
	<dd>: <?php echo $profile['Profile']['tgl_berdiri']; ?></dd>
	<dt><?php __('Status'); ?></dt>
	<dd>: <?php if($profile['Profile']['status']==1){
		echo "Negeri";
	}elseif ($profile['Profile']['status']==2) {
		echo "Swasta";
	}; ?></dd>
	<dt><?php __('Email Sekolah'); ?></dt>
	<dd>: <?php echo $profile['Profile']['email']; ?></dd>
</dl>
<div class="clear"></div>
<?php if ($groupAuth ==1):?>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Profile', true), array('action' => 'edit', $profile['Profile']['id'])); ?> </li>
	</ul>
</div>
<?php endif;?>
