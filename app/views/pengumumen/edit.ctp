<div class="pengumumen form">
<h2>Edit Pengumuman</h2>
<?php echo $form->create('Pengumuman');?>
	<fieldset>
 		
	<?php
		echo $form->input('id');
		echo $form->hidden('scope',array('value'=>'1'));
		
		echo '<p>';
		
		echo $form->input('title',array('class'=>'text-input small-input'));
		echo '</p>';?>

		<p>
			<?php    echo $form->textarea('content', array('class'=>$ckeditorClass));?>
			<script type="text/javascript">
			    var CustomHTML = CKEDITOR.replace( 'PengumumanContent',
				    {
				    	filebrowserBrowseUrl : '<?php echo $this->webroot;?>js/ckfinder/ckfinder.html',filebrowserWindowWidth : '980',
				    	filebrowserWindowHeight : '700',
				    	
				    });
			
			</script>
		</p>
		
		<?php echo '<p>';?>
		<label>Tanggal di publish</label>
		<?php echo $form->input('start_date',array('label'=>false));
		echo '</p>';
		echo '<p>'; ?>
		<label>Tanggal Pengumuman expired</label>
		<?php
		echo $form->input('expiration_date',array('label'=>false));
		echo '</p>';
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Pengumuman.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Pengumuman.id'))); ?></li>
		<li><?php echo $html->link(__('List Pengumumen', true), array('action' => 'home'));?></li>
	</ul>
</div>
