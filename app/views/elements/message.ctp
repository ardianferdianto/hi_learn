<?php $messages = $this->requestAction('/user_messages/checkunread');
$banyakMessage = count($messages);
//echo $html->link()
?>

<h3><?php $banyakMessage;?> Pesan</h3>
	<?php foreach ($messages as $m):?>
	<p>
		<strong><?php echo $m['UserMessage']['created'];?></strong> dari <?php 
		if ($m['SenderGuru'] != null){
		echo $m['SenderGuru']['NM_PEGAWAI']; 
		}else{
		echo $m['SenderSiswa']['NM_SISWA']; 
		}
		?><br />
		<?php echo $m['UserMessage']['message'];?>
		<br/>
		<small><?php echo $html->link(__('View', true), array('action' => 'read', $m['UserMessage']['id'])); ?></small>
	</p>

	<?php endforeach;?>
