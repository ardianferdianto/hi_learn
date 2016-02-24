<div id="email-template" class="clearfix">


	<div id="email-content" class="clearfix">

		<div style="float:left;width:300px;">
			<h2><?php __('EMAIL');?></h2>
			<h3 class="subemail">VIEW</h3>
			<img style="margin-top:60px;" src="<?php echo $this->webroot; ?>resources/images/email-guru1.png" alt="icon">
			<h4 id="email-username"><?php echo $loggedInName;?></h4>
			<ul class="menu_list_email-bottom" id="menu_list_email">
				<li><a class="button-pembelajaran" id="home-btn" href="<?php echo $this->webroot; ?>users/home"></a></li>
				<li><a class="button-pembelajaran" id="back-btn" href="<?php echo $this->webroot; ?>user_messages/"></a></li>
			</ul>
		</div>
		<div id="email-box" class="email-box" style="float:left;width:700px;margin-top:30px;position:relative;">
			
			<p><strong>FROM :</strong>  <?php if ($userMessage['SenderGuru'] != null){
				echo $userMessage['SenderGuru']['nama']; 
			}else{
				echo $userMessage['SenderSiswa']['nama']; 
			}?></p>
			<p><strong>FOR :</strong>  <?php if ($userMessage['ReceipentGuru'] != null){
				echo $userMessage['ReceipentGuru']['nama']; 
			}else{
				echo $userMessage['ReceipentSiswa']['nama']; 
			}?></p>
			<p><strong>SUBJECT :</strong>  <?php echo $userMessage['UserMessage']['subject']; ?></p>
			<p><strong>Date :</strong>  <?php echo $userMessage['UserMessage']['created']; ?></p>
			<p><strong>MESSAGE:</strong></p>
			<div style="background-color:#fff;padding:30px;width:600px;margin-left:20px;height:50px;overflow:scroll;">
				<?php echo $userMessage['UserMessage']['message']; ?>

				<?php if( $userMessage['UserMessage']['file'] != null):?>
				<span style="margin-top:50px;display:block;"><small>Attachment:</small><br/>
					<a href="<?php echo $this->webroot;?>mail-attachment/<?php echo $userMessage['UserMessage']['file'];?>"><?php echo $userMessage['UserMessage']['file'];?></a></span>
			<?php endif; ?>
			</div>
			<div class="reply">
				<?php echo $form->create('UserMessage',array('type'=>'file'));
				echo $form->input('to_reply',array('type'=>'hidden','value'=>$userMessage['UserMessage']['from']));
				echo $form->input('to_siswa',array('type'=>'hidden','value'=>''));
				echo $form->input('subject',array('type'=>'hidden','value'=>'re:'.$userMessage['UserMessage']['subject']));
				echo $form->input('to_guru',array('type'=>'hidden','value'=>''));?>
				
				<span><strong>BALAS</strong></span>

				<?php    echo $form->textarea('message', array('label'=>'balas','class'=>$ckeditorClass));?>
				<script type="text/javascript">
				    var CustomHTML = CKEDITOR.replace( 'UserMessageMessage',
					    {
					    	filebrowserBrowseUrl : '<?php echo $this->webroot;?>js/ckfinder/ckfinder.html',filebrowserWindowWidth : '980',
					    	filebrowserWindowHeight : '700',
					    	toolbar :
							[
								
								
							]
					    });
				
				</script>
				<?php echo '<p>';
				echo $form->input('file', array('label'=>'attach File:', 'type'=>'file'));
				echo '</p>';
				?>

				<div class="submit-form">
			<?php
				echo $form->submit('ok-btn1.png',array('div'=>false,'class' => '','id'=>'oke-btn'));
				echo $html->link($html->image("btl-btn1.png"), array('action' => 'index'), array('escape' => false));
				
				?>
			</div>
			<?php
				echo $form->end();
				?>
			</div>
		</div>
	</div>

</div>
	



<!--<div class="labs view">
		<h2>Halaman Message</h2>
			
		<p>Dari : <strong><?php 
		if ($userMessage['SenderGuru'] != null){
		echo $userMessage['SenderGuru']['nama']; 
		}else{
		echo $userMessage['SenderSiswa']['nama']; 
		}
		?></strong></p>
		
		<p>Untuk : <strong><?php 
		if ($userMessage['ReceipentGuru'] != null){
		echo $userMessage['ReceipentGuru']['nama']; 
		}else{
		echo $userMessage['ReceipentSiswa']['nama']; 
		}
		?></strong></p>
		
		<p>Tanggal: <strong><?php echo $userMessage['UserMessage']['created']; ?></strong></p>
	
		
		
		
		<div class="clear"></div>
		<p>Message: </p>
		<br/>
		<div class="content-lab">
			 <?php echo $userMessage['UserMessage']['message']; ?>
			
		</div>
		<?php echo $form->create('UserMessage');
		echo $form->input('to_reply',array('type'=>'hidden','value'=>$userMessage['UserMessage']['from']));
		echo $form->input('to_siswa',array('type'=>'hidden','value'=>''));
		echo $form->input('to_guru',array('type'=>'hidden','value'=>''));
		echo '<p>';
		echo $form->input('message',array('label'=>'Balas'));
		echo '</p>';
		echo '<p>';
		echo $form->end('Submit');
		echo '</p>';
		?>
		
		<div class="clear"></div>
</div>
<div class="actions">
	<ul>
		
		<li><?php echo $html->link(__('Kembali', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('Buat Message baru', true), array('action' => 'add')); ?> </li>
	</ul>
</div>-->
