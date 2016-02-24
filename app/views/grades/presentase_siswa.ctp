<div id="presentase-template-content" class="clearfix">
	<img style="position:absolute;top:10px;left:20px;" src="<?php echo $this->webroot; ?>resources/images/presentasi-ico11.png" alt="icon">
	<img style="position:absolute;top:10px;right:20px;" src="<?php echo $this->webroot; ?>resources/images/presentasi-ico211.png" alt="icon">

	<div id="presentase-content2" class="clearfix">
		<h2>PRESENTASI<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SISWA KELAS <?php echo $idKelas;?></h2>
		
		<div style="margin-top:130px;" class="content-box-content">
			<table class="data display datatable " id="example">
			<thead>
				<th><?php echo 'No';?></th>
				<th><?php echo ('Nama');?></th>
				<th><?php echo ('Jenis Kelamin');?></th>
				<th class="actions"><?php __('Lihat Presentasi');?></th>
			</thead>

			<tbody>
			<?php
			$i = 0;
			$no = 0;
			foreach ($users as $user):
				$no ++;
				$class = null;
			?>
				<tr>
				
					<td>
						<?php echo $no; ?>
					</td>
					
					<td>
						<?php echo $user['User']['nama']; ?>
					</td>
					
					
					<td>
						<?php $sex = $user['User']['sex']; 
						if($sex == 1 ){
							echo 'Laki-Laki';
						}else if ($sex ==2){
							echo 'Perempuan';
						}else{
							echo '-';
						}
						?>
					</td>
					
					<td class="actions">
						&nbsp;&nbsp;&nbsp;<?php echo $html->link($html->image("arrow_right_alt1_12x12-2.png"), array('controller' => 'assets','action' => 'siswa', $user['User']['username'],$user['User']['kelas']), array('escape' => false)); ?>
						
						
					</td>
				</tr>

			<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<ul id="menu_list_presentase">
			<!--<li><a class="button-pembelajaran" id="upload-btn-black" href="#subjectadd" rel="modal">></a></li>-->
			<li><a class="button-pembelajaran" id="upload-btn-black" href="#assetadd" rel="_modal"></a></li>
			<li><a class="button-pembelajaran" id="add-btn-black" href="<?php echo $this->webroot; ?>assets/add"></a></li>
			<li><a class="button-pembelajaran" id="back-btn-black" href="<?php echo $this->webroot; ?>assets<?php echo $kelas;?>"></a></li>
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


