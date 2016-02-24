<div id="presentase-template-content" class="clearfix">
	<img style="position:absolute;top:10px;left:20px;" src="<?php echo $this->webroot; ?>resources/images/presentasi-ico.png" alt="icon">
	<img style="position:absolute;top:10px;right:20px;" src="<?php echo $this->webroot; ?>resources/images/presentasi-ico2.png" alt="icon">

	<div id="presentase-content2" class="clearfix">
		<h2>PRESENTASI<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GURU</h2>
		
		<div style="margin-top:130px;" class="content-box-content">
			<p>
				<?php
				echo $paginator->counter(array(
				'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
				));
				?></p>
				<table cellpadding="0" cellspacing="0">
				<tr>
					<th><?php echo ('No');?></th>
					<th><?php echo ('Username');?></th>
					<th><?php echo ('Nama');?></th>
					<th><?php echo ('Jenis Kelamin');?></th>
					<th><?php echo $paginator->sort('created');?></th>
					
					<th class="actions"><?php __('Actions');?></th>
				</tr>
				<?php
				$i = 0;
				$no = 0;
				foreach ($users as $user):
					$no ++;
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
							<?php echo $user['User']['username']; ?>
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
						<td>
							<?php echo $user['User']['created']; ?>
						</td>
						
						<td class="actions">
							
							<?php echo $html->link(__('Lihat Presentase', true), array('controller' => 'assets','action' => 'guru', $user['User']['username'])); ?>
							
						</td>
					</tr>
				<?php endforeach; ?>
				</table>

				<div class="paging">
					<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
				 | 	<?php echo $paginator->numbers();?>
					<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
				</div>
		</div>
		<ul id="menu_list_presentase">
			<!--<li><a class="button-pembelajaran" id="upload-btn-black" href="#subjectadd" rel="modal">></a></li>-->
			<li><a class="button-pembelajaran" id="add-btn-black" href="<?php echo $this->webroot; ?>assets/add"></a></li>
			<li><a class="button-pembelajaran" id="back-btn-black" href="<?php echo $this->webroot; ?>assets<?php echo $kelas;?>"></a></li>
			<li><a class="button-pembelajaran" id="home-btn-black" href="<?php echo $this->webroot; ?>users/home"></a></li>
		</ul>
	</div>

</div>

