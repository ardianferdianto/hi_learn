<div class="users index">
<h2><?php __('List Siswa');?></h2>
<a class="shortcut-button-small" href="<?php echo $this->webroot; ?>assets/home" id="addData_left">
	<span>
		<img src="<?php echo $this->webroot; ?>resources/images/icons/arrow_left_alt1_32x32.png" alt="icon"><br>
		Kembali
	</span>
</a>
<br/>
<br/>
<br/>
<br/>
<div class="content-box">
<div class="content-box-header">
	
	<h3>Siswa</h3>
	
	<div class="clear"></div>
	
</div> <!-- End .content-box-header -->


<div class="content-box-content">
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
	<th><?php echo ('Kelas');?></th>
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
			<?php echo $user['User']['kelas']; ?>
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
			
			<?php echo $html->link(__('Lihat Presentase', true), array('controller' => 'assets','action' => 'siswa', $user['User']['username'],$user['User']['kelas'])); ?>
			
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
</div>
</div>
