<!-- START NEW -->
<div id="presentase-template-content" class="clearfix">
	<img style="position:absolute;top:10px;left:20px;" src="<?php echo $this->webroot; ?>resources/images/presentasi-ico.png" alt="icon">



	<div id="presentase-content2" class="clearfix">
		<h2>LIST <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;USER<?php echo $idKelas;?></h2>

		<div style="margin-top:130px;" class="content-box-content">


			<table class="data display datatable " id="example">
				<thead>
					<th><?php echo ('No');?></th>
					<th><?php echo ('Username');?></th>
					<th><?php echo ('Nama');?></th>
					<th><?php echo ('Group');?></th>
					<th><?php echo ('Dibuat tanggal');?></th>
					<th class="actions"><?php __('Edit / Hapus');?></th>
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
						<?php echo $user['User']['username']; ?>
					</td>
					<td>
						<?php  echo $user['User']['nama'];?>
					</td>
					<td>
						<?php $group =  $user['User']['group_id'];
						if($group ==1 ){
						echo 'Administrator';
						}else if($group ==2){
						echo 'Guru / Karaywan';
						}else if($group ==3){
						echo 'Siswa';
						}else{
						echo 'tidak Diketahui';
						}

						 ?>
					</td>
					<td>
						<?php echo $user['User']['created']; ?>
					</td>

					<td class="actions">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $html->link($html->image("pen_12x12.png"), array('action' => 'edit', $user['User']['id']), array('escape' => false)); ?>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $html->link($html->image("trash_fill_12x12-2.png"), array('action' => 'delete', $user['User']['id']),array('escape' => false), sprintf(__('Anda yakin ingin menghapus data # %s?', true), $user['User']['nama'])); ?>
					</td>
				</tr>

				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<ul id="menu_list_presentase">
			<!--<li><a class="button-pembelajaran" id="upload-btn-black" href="#subjectadd" rel="modal">></a></li>-->

			<li><a class="button-pembelajaran" id="add-btn-black" href="<?php echo $this->webroot; ?>users/add"></a></li>

			<li><a class="button-pembelajaran" id="home-btn-black" href="<?php echo $this->webroot; ?>users/home"></a></li>
		</ul>
	</div>

</div>