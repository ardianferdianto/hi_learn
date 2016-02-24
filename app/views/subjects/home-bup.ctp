

<h2>Direktori Pembelajaran Interaktif</h2>
<br/>
<br/>

<h3>Kelas 10</h3>
<hr/>
<br/>
<?php
$i = 0;
foreach ($subjects1 as $subject):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
<div class="holder-button">
<a class="shortcut-button-lesson" href="<?php echo $this->webroot; ?>flash/<?php echo $subject['Subject']['folder_name'];?>/<?php echo $subject['Subject']['file_name'];?>">
	<span>
		<img src="<?php echo $this->webroot; ?>resources/images/icons/lessons/<?php echo $subject['Subject']['icon'];?>" alt="icon"><br>
		<?php echo $subject['Subject']['name'];?>
	</span>
	
</a>
<?php if($groupAuth==1):?>
<p class="edit_pembelajaran">
	<?php echo $html->link(__('Edit', true), array('action' => 'edit', $subject['Subject']['id'])); ?>
		<?php echo $html->link(__('Delete', true), array('action' => 'delete', $subject['Subject']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subject['Subject']['id'])); ?>
</p>
<?php endif;?>
</div>

<?php endforeach; ?>
<br/>
<br/>


<h3>Kelas 11</h3>
<hr/>
<br/>
<?php
$i = 0;
foreach ($subjects2 as $subject):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
<div class="holder-button">
<a class="shortcut-button-lesson" href="<?php echo $this->webroot; ?>flash/<?php echo $subject['Subject']['folder_name'];?>/<?php echo $subject['Subject']['file_name'];?>">
	<span>
		<img src="<?php echo $this->webroot; ?>resources/images/icons/lessons/<?php echo $subject['Subject']['icon'];?>" alt="icon"><br>
		<?php echo $subject['Subject']['name'];?>
	</span>
</a>
<?php if($groupAuth==1):?>
<p class="edit_pembelajaran">
	<?php echo $html->link(__('Edit', true), array('action' => 'edit', $subject['Subject']['id'])); ?>
		<?php echo $html->link(__('Delete', true), array('action' => 'delete', $subject['Subject']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subject['Subject']['id'])); ?>
</p>
<?php endif;?>
</div>
<?php endforeach; ?>

<br/>
<br/>

<h3>Kelas 12</h3>
<hr/>
<br/>
<?php
$i = 0;
foreach ($subjects3 as $subject):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
<div class="holder-button">
<a class="shortcut-button-lesson" href="<?php echo $this->webroot; ?>flash/<?php echo $subject['Subject']['folder_name'];?>/<?php echo $subject['Subject']['file_name'];?>">
	<span>
		<img src="<?php echo $this->webroot; ?>resources/images/icons/lessons/<?php echo $subject['Subject']['icon'];?>" alt="icon"><br>
		<?php echo $subject['Subject']['name'];?>
	</span>
</a>
<?php if($groupAuth==1):?>
<p class="edit_pembelajaran">
	<?php echo $html->link(__('Edit', true), array('action' => 'edit', $subject['Subject']['id'])); ?>
		<?php echo $html->link(__('Delete', true), array('action' => 'delete', $subject['Subject']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subject['Subject']['id'])); ?>
</p>
<?php endif;?>
</div>
<?php endforeach; ?>

<br/>
<br/>
<div class="clear"></div>
<?php if($groupAuth!=3):?>
<div class="actions">
	<?php echo $html->link('Buat Data Baru','/subjects/add/1',array('class'=>'button')); ?>
	
</div>
<?php endif;?>