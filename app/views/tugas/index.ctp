<style type="text/css">
#logo{
	position: absolute;
	left: 50px;
	top:-5px;
}
#tugastitle{
	text-align: center;
}
</style>
<div class="pengumuman-content">
	<img id="logo" src="<?php echo $this->webroot;?>homenew/images/logo.png" style="width: 145px; top: 14px; left: 47px;">
	<div id="pengumuman-category">
		<h2 id="tugastitle">Tugas</h2>
		<br/>
		<br/>

		<?php if ($groupAuth == 1) :?>

		<div class="tugas index">
		
		<p style="text-align: center;">
		Halaman tugas adalah untuk memperlihatkan Semua tugas yang anda buat anda dapat memanage semua tugas.
		</p>
		<table cellpadding="0" cellspacing="0" style="margin-top: 75px;">
		<thead>
		<tr>
			<th style="text-align: center;">No</th>
			<th style="text-align: center;">Kelas</th>
			<th style="text-align: center;">Mata Pelajaran</th>
			<th style="text-align: center;">Judul Tugas</th>
			<th style="text-align: center;">Tanggal Tugas Dibuat</th>
			<th style="text-align: center;">Tanggal Tugas Berakhir</th>
			<th style="text-align: center;" class="actions"><?php __('Actions');?></th>
		</tr>
		</thead>

		<?php
		$i = 0;
		$no = 0;

		foreach ($tugas as $tuga):
			$class = null;
			$no++;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
				
			}
		?>
			<tr<?php echo $class;?> style="color: #000;">
				<td style="text-align: center;">
					<?php echo $no; ?>
				</td>
				<td style="text-align: center;">
					<?php echo $tuga['Kela']['name']; ?>
				</td>
				<td style="text-align: center;">
					<?php echo $tuga['Pelajaran']['nama']; ?>
				</td>
				<td style="text-align: center;">
					<?php echo $tuga['Tuga']['title']; ?>
				</td>
				<td style="text-align: center;">
					<?php echo $tuga['Tuga']['start_date']; ?>
				</td>
				<td style="text-align: center;">
					<?php echo $tuga['Tuga']['expiration_date']; ?>
				</td>
				<td style="text-align: center;" class="actions">
					<?php echo $html->link(__('View', true), array('action' => 'view', $tuga['Tuga']['id'])); ?> 
					<?php echo $html->link(__('Edit', true), array('action' => 'edit', $tuga['Tuga']['id'])); ?> 
					<?php echo $html->link(__('Delete', true), array('action' => 'delete', $tuga['Tuga']['id']), null, sprintf(__('Anda Yakin ingin menghapus data # %s ?', true), $tuga['Tuga']['title'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
		</div>
		<div class="pagination">
			<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled','style'=>'margin-right:70px'));?>
		  	<?php echo $paginator->numbers();?>
			<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled','style'=>'margin-top:-9px'));?>
		</div>
		<div class="clear"></div>
		
		<?php elseif($groupAuth == 2): ?>
		<div class="tugas index">
		
		<p>
		Halaman tugas adalah untuk memperlihatkan Semua tugas yang dibuat anda dapat memanage semua tugas.
		</p>
		<table cellpadding="0" cellspacing="0">
		<thead>
		<tr>
			<th>No</th>
			<th>Kelas</th>
			<th>Mata Pelajaran</th>
			<th>Judul Tugas</th>
			<th>Tanggal Tugas Dibuat</th>
			<th>Tanggal Tugas Berakhir</th>
			<th class="actions"><?php __('Actions');?></th>
		</tr>
		</thead>



		<?php
		$i = 0;
		$no = 0;

		foreach ($tugasGuru as $tuga):
			$class = null;
			$no++;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
				
			}
		?>
			<tr<?php echo $class;?> style="color: #000;">
				<td>
					<?php echo $no; ?>
				</td>
				<td>
					<?php echo $tuga['Kela']['name']; ?>
				</td>
				<td>
					<?php echo $tuga['Pelajaran']['nama']; ?>
				</td>
				<td>
					<?php echo $tuga['Tuga']['title']; ?>
				</td>
				<td>
					<?php echo $tuga['Tuga']['start_date']; ?>
				</td>
				<td>
					<?php echo $tuga['Tuga']['expiration_date']; ?>
				</td>
				<td class="actions">
					<?php echo $html->link(__('View', true), array('action' => 'view', $tuga['Tuga']['id'])); ?><br/>
					<?php echo $html->link(__('Edit', true), array('action' => 'edit', $tuga['Tuga']['id'])); ?><br/>
					<?php echo $html->link(__('Delete', true), array('action' => 'delete', $tuga['Tuga']['id']), null, sprintf(__('Anda Yakin ingin menghapus data # %s ?', true), $tuga['Tuga']['title'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
		</div>
		<div class="pagination">
			<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
		 | 	<?php echo $paginator->numbers();?>
			<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
		</div>


		<div class="clear"></div>
		

		<?php else:?>
		<div class="tugas index">
		
		<p>Halaman tugas adalah untuk memperlihatkan tugas yang diberikan oleh guru anda, silahkan pilih tombol View untuk melihat detail dan instruksi tugas atau pilih tombol serahkan tugas, untuk mengumpulkan tugas.</p>
		<table cellpadding="0" cellspacing="0">
		<thead>
		<tr>
			<th>No</th>
			<th>Kelas</th>
			<th>Mata Pelajaran</th>
			<th>Judul Tugas</th>
			<th>Tanggal Tugas Dibuat</th>
			<th>Tanggal Tugas Berakhir</th>
			<th class="actions"><?php __('Actions');?></th>
		</tr>
		</thead>



		<?php
		$i = 0;
		$no = 0;
		if($tugasMurid==null){?>
		<div class="notification attention png_bg">
			<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
			<div>
					
					<p>Tidak ada tugas untuk anda saat ini, silahkan kembali untuk mengecek</p>
					
				
			</div>
		</div>

		<?php
		}

		foreach ($tugasMurid as $tuga):
			$class = null;
			$no++;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
				
			}
			
		?>
			<tr<?php echo $class;?>>
				<td>
					<?php echo $no; ?>
				</td>
				<td>
					<?php echo $tuga['Kela']['name']; ?>
				</td>
				<td>
					<?php echo $tuga['Pelajaran']['nama']; ?>
				</td>
				<td>
					<?php echo $tuga['Tuga']['title']; ?>
				</td>
				<td>
					<?php echo $tuga['Tuga']['start_date']; ?>
				</td>
				<td>
					<?php echo $tuga['Tuga']['expiration_date']; ?>
				</td>
				<td class="actions">
					<?php echo $html->link(__('View', true), array('action' => 'view', $tuga['Tuga']['id'])); ?><br/>
					<?php echo $html->link(__('Serahkan Tugas', true), array('controller'=>'file_tugas','action' => 'add', $tuga['Tuga']['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
		</div>
		<div class="pagination">
			<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
		 | 	<?php echo $paginator->numbers();?>
			<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
		</div>


		<?php endif;?>

</div>



</div>
	<ul id="menu_list_info">
		<?php if ($groupAuth == 1) :?>
		<li><a class="button-pembelajaran" id="add-btn-black" href="<?php echo $this->webroot; ?>tugas/add/<?php echo $id; ?>"></a></li>
		<?php endif;?>
		
		<!--<?php if ($kelasId != 1):?>

		<?php endif;?>
		<?php if ($kelasId != 6):?>
		<li><a class="button-pembelajaran" id="next-btn" href="<?php echo $this->webroot; ?>subjects/kelas/<?php echo $kelasId+1; ?>"></a></li>
		<?php endif;?>-->
		<li><a class="button-pembelajaran" id="home-btn-black" href="<?php echo $this->webroot; ?>users/home"></a></li>
	</ul>


