<div class="users form">


<div class="content-box">
<div class="content-box-header">
	
	<h3>Form Perubahan Password</h3>
	
	
	
</div> <!-- End .content-box-header -->
<div class="content-box-content">
	<?php echo $form->create('User',array('action'=>'change_password'));?>
		<fieldset>
	 		
		<?php
		
			echo $form->input('id');
			//echo $form->input('goup_id',array('type'=>'hidden','value'=>$user['User']['group_id']));
			echo '<p>';
			echo $form->input('password',array('label'=>'Masukkan Password baru minimum 4 karakter','class'=>'text-input small-input','value'=>''));
			echo '</p>';
			echo '<p>';
			echo $form->input('password_confirm', array('type'=>'password','label'=>'Masukkan Password baru sekali lagi','class'=>'text-input small-input'));
			echo '</p>';
			
		?>
		</fieldset>
		<p>
	<?php echo $form->end('Submit');?>
	</p>
	<p>
	<?php echo $html->link(__('Batal', true), array('controller'=>'users','action' => 'view'.'/'.$loggedInId)); ?>
	</p>
</div>
</div>
</div>