<?php if (!$videos){
	echo 'Tidak ditemukan Video';
}else{ ?>

	<div class="rg-thumbs">
		<!-- Elastislide Carousel Thumbnail Viewer -->
		<div class="es-carousel-wrapper">
			<div class="es-nav">
				<span class="es-nav-prev">Previous</span>
				<span class="es-nav-next">Next</span>
			</div>
			<div class="es-carousel">
				<ul>
					<?php foreach ($videos as $item) {?>
						<li>
						
							<a href="#">
								<?php if($item['Lab']['cover']!=null):?>

								<img src="<?php echo $this->webroot;?><?php echo $item['Lab']['cover'];?>" data-large="<?php echo $this->webroot;?><?php echo $item['Lab']['cover']; ?>" alt="image01" data-id="<?php echo $item['Lab']['id'];?>" data-file="<?php echo $item['Lab']['file'];?>" data-description="<?php echo $item['Lab']['title'];?>" data-details="<?php echo $item['Lab']['details'];?>" />
								<small><?php echo $item['Lab']['title'];?></small>

								<?php else:?>

								<img src="<?php echo $this->webroot;?>img/no-cover.jpg" data-large="<?php echo $this->webroot;?>img/no-cover.jpg" alt="image01" data-id="<?php echo $item['Lab']['id'];?>" data-file="<?php echo $item['Lab']['file'];?>" data-description="<?php echo $item['Lab']['title'];?>" data-details="<?php echo $item['Lab']['details'];?>" />
								<small><?php echo $item['Lab']['title'];?></small>

								
								<?php endif;?>
							
							</a>
						</li>
					
					<?php }?>
					
				</ul>
			</div>
		</div>
		<!-- End Elastislide Carousel Thumbnail Viewer -->
	</div><!-- rg-thumbs -->

<?php echo $javascript->link('/resources/scripts/gallery.js');  ?>

<?php } ?>