<!-- START NEW -->
<div id="presentase-template-content" class="clearfix">
	<img style="position:absolute;top:10px;left:20px;" src="<?php echo $this->webroot; ?>resources/images/presentasi-ico.png" alt="icon">



	<div id="presentase-content2" class="clearfix">
		<h2>LIST <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PELAJARAN<?php echo $idKelas;?></h2>

		<div style="margin-top:130px;" class="content-box-content">


			<table class="data display datatable " id="example">
				<thead>
					<th><?php echo ('No');?></th>
					<th><?php echo ('Pelajaran');?></th>
					<th><?php echo ('Tanggal Dibuat');?></th>
					<th class="actions"><?php __('Edit / Hapus');?></th>
				</thead>

				<tbody>
				<?php
				$i = 0;
				$no = 0;
				foreach ($pelajarans as $pelajaran):
					$no ++;
					$class = null;
				?>
				<tr>
					<td>
						<?php echo $no; ?>
					</td>

					<td>
						<?php echo $pelajaran['Pelajaran']['nama']; ?>
					</td>
					<td>
						<?php  echo $pelajaran['Pelajaran']['created'];?>
					</td>

					<td class="actions">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $html->link($html->image("pen_12x12.png"), array('action' => 'edit', $pelajaran['Pelajaran']['id']), array('escape' => false)); ?>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $html->link($html->image("trash_fill_12x12-2.png"), array('action' => 'delete', $pelajaran['Pelajaran']['id']),array('escape' => false), sprintf(__('Anda yakin ingin menghapus data # %s?', true), $pelajaran['Pelajaran']['nama'])); ?>
					</td>
				</tr>

				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<ul id="menu_list_presentase">
			<!--<li><a class="button-pembelajaran" id="upload-btn-black" href="#subjectadd" rel="modal">></a></li>-->

			<li><a class="button-pembelajaran" id="add-btn-black" href="<?php echo $this->webroot; ?>pelajarans/add"></a></li>

			<li><a class="button-pembelajaran" id="home-btn-black" href="<?php echo $this->webroot; ?>users/home"></a></li>
		</ul>
	</div>

</div>

