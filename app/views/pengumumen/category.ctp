<div class="pengumuman-content">
	<img id="logo" src="<?php echo $this->webroot;?>homenew/images/logo.png" style="width: 145px; top: 14px; left: 25px;position: absolute;" alt="icon">
	<div class="nav-info-category">
		<div class="nav-info-holder">
			<a id="info-sek-guru2" href="<?php echo $this->webroot; ?>pengumumen/category/1"><img src="<?php echo $this->webroot; ?>resources/images/info-sek-guru-small1.png" alt="icon"></a>
			<a id="info-guru-murid2" href="<?php echo $this->webroot; ?>pengumumen/category/2"><img src="<?php echo $this->webroot; ?>resources/images/info-guru-murid-small1.png" alt="icon"></a>
			<a id="info-umum2" href="<?php echo $this->webroot; ?>pengumumen/category/3"><img src="<?php echo $this->webroot; ?>resources/images/info-umum-small1.png" alt="icon"></a>
		</div>
	</div>
	<div id="pengumuman-category">
		<h2>info</h2>
		<?php if($id ==1):?>
		<h3>Sekolah ke Guru</h3>
		<?php elseif($id ==2):?>
		<h3>Guru ke Murid</h3>
		<?php elseif($id ==3):?>
		<h3>Umum</h3>
		<?php endif;?>
		<div class="clear"></div>

		<table>
		<thead>
			<tr>
			   <th><?php echo 'SUMBER';?></th>
			   <th><?php echo 'JUDUL PENGUMUMAN';?></th>
			   <th><?php echo 'TANGGAL';?></th>
			   <th class="actions"><?php __('LIHAT / HAPUS');?></th>
			</tr>

		</thead>
		<tbody>
		<?php
		$i = 0;
		$no = 0;
		foreach ($pengumumen as $pengumuman):
		$no++;
			$class = null;


			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>

			<td>
				<?php echo $pengumuman['User']['nama']; ?>
			</td>
			<td>
				<?php echo $pengumuman['Pengumuman']['title']; ?>
			</td>
			<td>
				<?php echo $pengumuman['Pengumuman']['created']; ?>
			</td>
			<td class="actions">
				&nbsp;&nbsp;&nbsp;
				<?php echo $html->link($html->image("arrow_right_alt1_12x12.png"), array('action' => 'view', $pengumuman['Pengumuman']['id']), array('escape' => false)); ?>
				&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<?php if($groupAuth == 1 || ($pengumuman['Pengumuman']['user_id']== $loggedInIdAsli)):?>
					<?php echo $html->link($html->image("trash_fill_12x12.png"), array('action' => 'delete', $pengumuman['Pengumuman']['id']), null, sprintf(__('Anda yakin ingin menghapus pengumuman ini ?', true), $pengumuman['Pengumuman']['id']), array('escape' => false)); ?>
			<?php elseif ($groupAuth == 1 || ($pengumuman['Pengumuman']['user_id']== $loggedInIdAsli)):?>
					<?php echo $html->link($html->image("trash_fill_12x12.png"), array('action' => 'delete', $pengumuman['Pengumuman']['id']), null, sprintf(__('Anda yakin ingin menghapus pengumuman ini ?', true), $pengumuman['Pengumuman']['id']), array('escape' => false)); ?>
				<?php endif; ?>
			</td>
		</tr>
		<?php endforeach; ?>
		</tbody>
		</table>



	</div>



</div>
	<ul id="menu_list_info">
		<li><a class="button-pembelajaran" id="add-btn-black" href="<?php echo $this->webroot; ?>pengumumen/add/<?php echo $id; ?>"></a></li>
		<li><a class="button-pembelajaran" id="back-btn-black" href="<?php echo $this->webroot; ?>pengumumen/home"></a></li>
		<!--<?php if ($kelasId != 1):?>

		<?php endif;?>
		<?php if ($kelasId != 6):?>
		<li><a class="button-pembelajaran" id="next-btn" href="<?php echo $this->webroot; ?>subjects/kelas/<?php echo $kelasId+1; ?>"></a></li>
		<?php endif;?>-->
		<li><a class="button-pembelajaran" id="home-btn-black" href="<?php echo $this->webroot; ?>users/home"></a></li>
	</ul>



