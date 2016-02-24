<div id="table_user" class="news box">
			
			<table style="width:100%;">
			<tr>
				<th><?php echo ('id');?></th>
				<th><?php echo ('username');?></th>
				<th><?php echo ('siswa_id');?></th>
				<th><?php echo ('teacher_id');?></th>
				<th><?php echo ('group_id');?></th>
				<th class="actions"><?php __('Actions');?></th>
			</tr>
			<?php
			$i = 0;
			foreach ($users as $user):
				$class = null;
				if ($i++ % 2 == 0) {
					$class = ' class="altrow"';
				}
			?>
				<tr<?php echo $class;?>>
					<td>
						<?php echo $user['User']['id']; ?>
					</td>
					<td>
						<?php echo $user['User']['username']; ?>
					</td>
					<td>
						<?php echo $user['Siswa']['nama_lengkap']; ?>
					</td>
					<td>
						<?php echo $user['Teacher']['nama_lengkap']; ?>
					</td>
					
					<td>
						<?php echo $user['Group']['name']; ?>
					</td>
					<td class="actions">
						<?php echo $html->link(__('Lihat', true), array('action' => 'view', $user['User']['id'])); ?>
						<?php echo $html->link(__('Rubah', true), array('action' => 'edit', $user['User']['id'])); ?>
						<?php echo $html->link(__('Hapus', true), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Apakah anda yakin akan menghapus Pengguna ini?', true), $user['User']['id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
			</table>
			</div>