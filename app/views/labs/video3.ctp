
<?php
echo $javascript->link('/resources/scripts/gallery.js'); 
echo $html->css('/resources/css/demovideo.css');
echo $html->css('/resources/css/video.css');
echo $html->css('/resources/css/elastislide.css');

?>
<style type="text/css">
#body-wrapper {
background: transparent;
}
.container{
	padding-top: 20px;
}

#delete-ebook{
    position: relative;
    top: 0;
    right: 0;
    
    width: 60px;
    height: 62px;
    display: inline-block;
    text-indent: -9999px;
    background-position: top left;
    background-repeat: no-repeat;
}
#edit-ebook{
    position: relative;
    top: 0;
    right: 0;
    
    width: 60px;
    height: 62px;
    display: inline-block;
    text-indent: -9999px;
    background-position: top left;
    background-repeat: no-repeat;
    margin-right: 20px;
}
#edit-ebook:hover{
    background-position:bottom; left;
}
#delete-ebook:hover{
    background-position:bottom; left;
}
a#download2-btn{
    
    position: relative;
    top: 0;
    right: 0;
    display: inline-block;
    text-indent: -9999px;
    text-indent: -9999px;
}

.headertitle{
	width: 100%;
	display: block;

}
.dropdown-cat{
	position: absolute;
	top:20px;
	right:50px;
	background: rgba(255,255,255,0.4);
	padding:24px;
	margin-bottom: 10px;
}
.dropdown-cat h3{
	color: #fff;
	margin-bottom: 10px;
	text-align: left;
	text-transform: uppercase;
}
.rg-gallery{
	margin-top:-20px;
}
#logo{
	position: absolute;
	left: 50px;
	top:-5px;
}
</style>

<noscript>
	<style>
		.es-carousel ul{
			display:block;
		}
	</style>
</noscript>
<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	
	<div class="rg-image-wrapper">
		{{if itemsCount > 1}}
			<div class="rg-image-nav">
				<a href="#" class="rg-image-nav-prev">Previous Image</a>
				<a href="#" class="rg-image-nav-next">Next Image</a>
			</div>
		{{/if}}
		<div class="rg-image"></div>
		<div class="rg-loading"></div>
		<div class="rg-caption-wrapper">
			<div class="rg-caption" style="display:none;">
				<p class="title" style="font-size:20px;font-weight:bold;"></p>
				<p class="description" > </p>
				<div style="display: block;float: left;margin: 0 auto;margin-top: 10px;text-align: center;width: 100%;">
					<a href="/schoolmanagement_sd/labs/edit/2/106" class="button-pembelajaran edit-ebook" id="edit-ebook" rel="modal">Edit</a>

					<a href="/schoolmanagement_sd/labs/../files/labs/bahan_kimia_bagian_1.flv" class="button-pembelajaran download-ebook" id="download2-btn">Download</a>

					<a href="/schoolmanagement_sd/labs/delete/106/2" class="button-pembelajaran" id="delete-ebook" onclick="return confirm('Apakah anda yakin ingin menghapus item ini?');">Delete</a>
				</div>
			</div>
		</div>
	</div>
</script>

<div class="container">
	
	
	<div class="content">
		<div class="headertitle">

			<img id="logo" src="<?php echo $this->webroot;?>homenew/images/logo-small.png">

			<?php echo $form->create('Lab',array('action'=>'search_video','type'=>'get','enctype'=>'multipart/form-data'));?>
                
		      <input type="search" id="searchquery_ebook" placeholder="Lakukan pencarian video disini, kemudian tekan enter" name="searchquery">
		    <?php echo $form->end();?>
			<div class="dropdown-cat">
			    <h3>Pilih Kategori</h3>
			    <select name="" id="dropdownfiltercategory">
			    	<option value="empty">Semua Kategori</option>
			    	<?php foreach ($listCategoryVideo as $item) :?>
			    	<option value="<?php echo $item['Category']['id'];?>"><?php echo $item['Category']['name'];?></option>
			    	<?php endforeach;?>
				</select>
			</div>
			<h1>Video Gallery <span>Elearning School Management</span></h1>
		</div>
		<div id="rg-gallery" class="rg-gallery">
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
		</div><!-- rg-gallery -->
		<p class="sub"></p>
	</div><!-- content -->
</div><!-- container -->

<script type="text/javascript">
jQuery('#dropdownfiltercategory').on('change', function() {
    jQuery.fancybox.showLoading();
    jQuery('#rg-gallery').fadeOut('slow');
  	var valueDropdown = this.value ; // or $(this).val()
    
    jQuery.ajax({
      type: "POST",
      dataType: "html",
      cache: false,
      url: '<?php echo $this->webroot?>labs/find_category_video/'+valueDropdown, // preview.php
      //data: $("#postp").serializeArray(), // all form fields
      success: function (data) {

        jQuery.fancybox.hideLoading();
        jQuery('#rg-gallery').fadeIn('slow');


        jQuery('#rg-gallery').html('');
        jQuery('#rg-gallery').html(data);
        
        jQuery('#searchquery_ebook').val('');
        
        
      } // success
    }); // ajax
});
</script>







