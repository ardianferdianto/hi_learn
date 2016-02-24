<style type="text/css">
.pengumuman-content .classvideo{
	float: left;
	width: 350px;
	margin-bottom: 20px;
}
.videocontainerall{
	height: 800px;
}
.pengumuman-content h3{
	color: #0052FF;
}
</style>

<?php echo $javascript->link('jwplayer.js'); ?>
<script type="text/javascript">jwplayer.key="J0+IRhB3+LyO0fw2I+2qT2Df8HVdPabwmJVeDWFFoplmVxFF5uw6ZlnPNXo=";
</script>

<div class="pengumuman-content">
	<div class="nav-info-category">
		
	</div>
	<div id="pengumuman-category" class="videocontainerall">
		<h2>MONITORING KELAS</h2>

		<br/>
		<br/>
		<br/>
		<?php foreach ($items as $item):?>
			
		<div class="classvideo" id="">
		<h3><?php echo $item['Monitoring']['nama_kelas']?></h3>
			<div id="<?php echo $item['Monitoring']['nama_video']?>" class="videocontainer">
				Loading the player ...
			</div>
		</div>

		<?php endforeach;?>
		

		<br/>
		<br/>

	</div>



</div>
	<ul id="menu_list_info">
		
		
		
		<li><a class="button-pembelajaran" id="home-btn-black" href="<?php echo $this->webroot; ?>users/home"></a></li>
		
	</ul>



<script type="text/javascript">

<?php foreach ($items as $item):?>

jwplayer("<?php echo $item['Monitoring']['nama_video']?>").setup({
    'id': 'playerID',
    'width': '300',
    'height': '250',
    'aboutlink': 'http://basedidea.com',
    'autostart':true,
    //'skin': 'skins/five.xml',
    'image':'images/imagesscreenshot.png',
    'sources':[{
        'file': 'rtmp://localhost/midiDemo/<?php echo $item['Monitoring']['nama_video']?>',    
    }]
    
});
<?php endforeach;?>
});
</script>



