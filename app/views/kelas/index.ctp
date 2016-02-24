<!-- START NEW -->
<div id="presentase-template-content" class="clearfix">
	<img style="position:absolute;top:10px;left:20px;" src="<?php echo $this->webroot; ?>resources/images/presentasi-ico.png" alt="icon">



	<div id="presentase-content2" class="clearfix">
		<h2>LIST <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ROMBONGAN BELAJAR</h2>

		<div style="margin-top:130px;" class="content-box-content">


			<table class="data display datatable " id="example">
				<thead>
					<th><?php echo ('ID');?></th>
					<th><?php echo ('Rombel');?></th>
					<th><?php echo ('Master Kelas');?></th>
					<th><?php echo ('Keterangan');?></th>
					<th class="actions"><?php __('Edit / Hapus');?></th>
				</thead>

				<tbody>
				<?php
				$i = 0;
				$no = 0;
				foreach ($items as $item):
					$no ++;
					
				?>
				<tr>
					<td>
						<?php echo $item['Kela']['id']; ?>
					</td>

					<td>
						<?php echo $item['Kela']['name']; ?>
					</td>

					<td>
						<?php echo $item['Grade']['name']; ?>
					</td>

					<td>
						<?php echo $item['Kela']['keterangan']; ?>
					</td>
					
					

					<td class="actions">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $html->link($html->image("pen_12x12.png"), array('action' => 'edit', $item['Kela']['id']), array('escape' => false)); ?>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $html->link($html->image("trash_fill_12x12-2.png"), array('action' => 'delete', $item['Kela']['id']),array('escape' => false), sprintf(__('Anda yakin ingin menghapus data # %s?', true), $item['Kela']['name'])); ?>
					</td>
				</tr>

				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<ul id="menu_list_presentase">
			<!--<li><a class="button-pembelajaran" id="upload-btn-black" href="#subjectadd" rel="modal">></a></li>-->

			<li><a class="button-pembelajaran" id="add-btn-black" href="<?php echo $this->webroot; ?>kelas/add"></a></li>

			<li><a class="button-pembelajaran" id="home-btn-black" href="<?php echo $this->webroot; ?>users/home"></a></li>
		</ul>
	</div>

</div>