<div class="close_pembelajaran">
	<a onclick="history.go(-1)">TUTUP PEMBELAJARAN<img src="<?php echo $this->webroot;?>resources/images/fancy_close.png"></a>
</div>
<div class="wrapper">

	<iframe src='<?php echo $param_filename;?>' width="100%" height="800px"></iframe>

	

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
