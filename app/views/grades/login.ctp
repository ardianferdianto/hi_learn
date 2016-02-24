<img src="<?php echo $this->webroot;?>/resources/images/user-ico.png" style="margin-bottom:8px;">
<h2 style="font-size:18px;margin-bottom:20px;color:#155d58;">LOGIN</h2>
<script>
$.metadata.setType("attr", "validate");

$(document).ready(function() {
	
	$("#UserAddForm").validate();
});
</script>
<div class="clear"></div>
<?php
echo $form->create('User', array('url' => array('controller' => 'users', 'action' =>'login')));?>

<?php $session->flash('auth')?>
<p>

<?php e($form->input('User.username', array('class'=> 'text-input formlogin','label'=>false,'placeholder'=>'username','validate'=>'required:true'))); ?>
</p>

<p>

<br/>
<?php echo $form->input('User.password', array('class'=> 'text-input formlogin','type'=>'password','placeholder'=>'password','label'=>false,'validate'=>'required:true'));?>
</p>
<div class="clear"></div>

<div class="clear"></div>
<p>
<br/>
<?php
echo $form->submit('login-btn1.png',array('id'=>'lgn-btn'));
echo $form->end();
?>
<div class="clear"></div>
</p>