<div class="close_pembelajaran">
	<a onclick="history.go(-1)">TUTUP PEMBELAJARAN<img src="<?php echo $this->webroot;?>resources/images/fancy_close.png"></a>
</div>
<div class="wrapper">


	<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="100%" height="100%" id="movie_name" align="middle">
		<param name="movie" value="<?php echo $param_filename;?>"/>
		<param name="base" value="<?php echo $param_filefolder?>"/>
	<!--[if !IE]>-->
	<object type="application/x-shockwave-flash" data="<?php echo $param_filename;?>" width="100%" height="100%">
		<param name="movie" value="<?php echo $param_filename;?>"/>
		<param name="base" value="<?php echo $param_filefolder?>"/>
	<!--<![endif]-->
	<a href="http://www.adobe.com/go/getflash">
		<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player"/></a>
	<!--[if !IE]>-->
	</object>
	<!--<![endif]-->
	</object>

	

	

</div>

<style>
.close_pembelajaran{
	top:20px;
	left:20px;
	position: absolute;
	background: rgba(255,255,255,0.7);
	padding: 10px;
	color: #000;
}
.close_pembelajaran a{
	color: #000;
	text-decoration: none;
	font-weight:bold;
	font-family: helvetica,arial,serif;
	cursor: pointer;
}
</style>
