<div id="presentase-template-content" class="clearfix">
	<img id="logo" src="<?php echo $this->webroot;?>homenew/images/logo.png" style="width: 145px; top: 14px; left: 25px;position: absolute;">

	<div id="presentase-content2" class="clearfix">
		<h2>PRESENTASI<br/>GURU</h2>
		
		<div style="margin-top:130px;" class="content-box-content">
			<table class="data display datatable " id="example">
				<thead>
					<th><?php echo 'No';?></th>
					
					<th>Format</th>
					<th><?php echo ('Judul Presentasi');?></th>
					<th><?php echo ('Penulis');?></th>
					<th><?php echo ('Tanggal');?></th>
					<th class="actions"><?php __('Lihat / Edit / Hapus');?></th>
				</thead>
				<tbody>
				<?php
				if($assets == null){
				echo '<p class="red">Tidak ada file yang di buat</p>';
				}
				$i = 0;
				$no = 0;
				foreach ($assets as $assetGuru):
					$no++;
					$class = null;
					if ($i++ % 2 == 0) {
						$class = ' class="altrow"';
					}
				?>
					<tr<?php echo $class;?>>
						<td>
							<?php echo $no; ?>
						</td>

						<td>
							<?php $tipeFile = $assetGuru['Asset']['mimetype'];
							if($tipeFile == 'application/octet-stream'): ?>
							<img src="<?php echo $this->webroot;?>/resources/images/file-word.png">
							<?php elseif($tipeFile == 'application/vnd.ms-powerpoint'): ?>
							<img src="<?php echo $this->webroot;?>/resources/images/file-ppt.png">
							<?php elseif($tipeFile == 'video/x-flv'): ?>
							<img src="<?php echo $this->webroot;?>/resources/images/file-video.png">
							<?php elseif($tipeFile == 'image/jpg' || $assetGuru['Asset']['mimetype'] == 'image/png' ): ?>
							<img src="<?php echo $this->webroot;?>/resources/images/file-jpg.png">
							<?php elseif($tipeFile == null): ?>
							<img src="<?php echo $this->webroot;?>/resources/images/file-assetdigital.png">
							<?php endif; ?>
						</td>
						
						<td>
							<?php echo $assetGuru['Asset']['title']; ?>
						</td>
						
						<td>
							<?php echo $assetGuru['Asset']['author']; ?>
						</td>
						<td>
							<?php echo $assetGuru['Asset']['created']; ?>
							
						</td>
						<td class="actions">
							<?php if($assetGuru['Asset']['jenis'] == 3):?>
							&nbsp;&nbsp;&nbsp;<?php echo $html->link($html->image("arrow_right_alt1_12x12-2.png"), array('../../'.$assetGuru['Asset']['dir'].'/'.$assetGuru['Asset']['file']), array('escape' => false)); ?>
							<?php else:?>
							&nbsp;&nbsp;&nbsp;<?php echo $html->link($html->image("arrow_right_alt1_12x12-2.png"), array('action' => 'view', $assetGuru['Asset']['id']), array('escape' => false)); ?>
							<?php endif;?>
							
							<?php if ($groupAuth == 1) :?>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $html->link($html->image("pen_12x12.png"), array('action' => 'edit', $assetGuru['Asset']['id']), array('escape' => false)); ?>	
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $html->link($html->image("trash_fill_12x12-2.png"), array('action' => 'delete', $assetGuru['Asset']['id']),array('escape' => false), sprintf(__('Anda yakin ingin menghapus data # %s?', true), $assetGuru['Asset']['title'])); ?>
							<?php elseif ($groupAuth == 2 && ($assetGuru['Asset']['author']== $loggedInId)) :
								echo $html->link($html->image("pen_12x12.png"), array('action' => 'view', $assetGuru['Asset']['edit']), array('escape' => false)); ?>	
							<?php echo $html->link($html->image("trash_fill_12x12-2.png"), array('action' => 'delete', $assetGuru['Asset']['id']), array('escape' => false), sprintf(__('Anda yakin ingin menghapus data # %s?', true), $assetGuru['Asset']['title'])); 
							endif;?>
						</td>
					</tr>
				<?php endforeach; ?>
				<tbody>
			</table>
		</div>
		<ul id="menu_list_presentase">
			<!--<li><a class="button-pembelajaran" id="upload-btn-black" href="#subjectadd" rel="modal">></a></li>-->
			<li><a class="button-pembelajaran" id="upload-btn-black" href="#assetadd" rel="_modal"></a></li>
			<li><a class="button-pembelajaran" id="add-btn-black" href="<?php echo $this->webroot; ?>assets/add"></a></li>
			<li><a class="button-pembelajaran" id="back-btn-black" href="<?php echo $this->webroot; ?>assets"></a></li>
			<li><a class="button-pembelajaran" id="home-btn-black" href="<?php echo $this->webroot; ?>users/home"></a></li>
		</ul>
	</div>

</div>


<div id="assetadd" class="subjects form" style="display:none;">

	<?php echo $form->create('Asset',array('type'=>'file'));?>
	<h2><?php __('Form Penambahan Presentase');?></h2>
	<p>
		<?php
		echo $form->input('title',array('class'=>'text-input large-input','label'=>'Judul Presentase'));
		
		?>
	</p>
	<?php
	if($groupAuth == 1 ||$groupAuth == 2){
		$createdsopo = 1;
	}else{
		$createdsopo = 2;
	}
	echo $form->hidden('created_by',array('value'=>$createdsopo));
	echo $form->hidden('jenis',array('value'=>3));

	?>
	<p>
		<?php
		echo $form->input('file', array('label'=>'attach File:', 'type'=>'file'));
		
		?>
	</p>
	<?php echo $form->end('Submit');?>
</div>
