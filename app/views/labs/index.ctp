<?php
echo $html->css('/resources/css/btn-component.css');
?>
<style type="text/css">
body{
	margin-top: 0;
}
#logo{
	position: absolute;
	left: 50px;
	top:-5px;
}
#uploadebook{
  position: absolute;
right: 147px;
top: 110px;
}
#backtohome{
    position: absolute;
    right: 100px;
    top:60px;   
}

#CategoryAddForm{
    display: none;
}
#radioflip label{
    display: inline-block;
    margin-right:4px; 
}
</style>
<div id="newebook">
	<img id="logo" src="<?php echo $this->webroot;?>homenew/images/logo.png" style="width: 145px; top: 14px; left: 47px;">
	<a href="#upload-ebook" rel="modal" id="uploadebook" class="tooltip" title="Upload Ebook"><img src="<?php echo $this->webroot;?>resources/images/add-black2.png"></a>

    <a href="<?php echo $this->webroot;?>users/home" id="backtohome" class="tooltip" title="Kembali Ke Awal"><img src="<?php echo $this->webroot;?>resources/images/home2.png" style=" position: absolute; right: 100px; top: 52px"></a>
	<?php echo $form->create('Lab',array('action'=>'search','type'=>'get','enctype'=>'multipart/form-data'));?>
                
      <input type="search" id="searchquery_ebook" placeholder="Lakukan pencarian ebook disini, kemudian tekan enter" name="searchquery">
    <?php echo $form->end();?>


	<?php
//extract the get variables
    $url = $this->params['url'];
    unset($url['url']);
    $get_var = http_build_query($url);
     
    $arg1 = array(); $arg2 = array();
    //take the named url
    if(!empty($this->params['named']))
    $arg1 = $this->params['named'];
     
    //take the pass arguments
    if(!empty($this->params['pass']))
    $arg2 = $this->params['pass'];
     
    //merge named and pass
    $args = array_merge($arg1,$arg2);
     
    //add get variables
    $args["?"] = $get_var;
     
    $paginator->options(array('url' => $args));
    
?>

<div id="ebookrack">
<div class="paging">
  
  <?php echo $paginator->prev('<strong>&#65513;</strong> '.__('Sebelumnya', true), array('escape'=>false,'id'=>'prevpage'), null, array('escape'=>false,'id'=>'prevpage','class'=>'disabled'));?>
  
  <?php echo $paginator->numbers(array(
    'before' => '',
    'after' => '',
    'separator' => '',
    'escape'=>false,
    'class' => 'number'
  ));
  ?>

  <?php echo $paginator->next(__('Selanjutnya', true).' <strong>&#65515;</strong>', array('escape'=>false,'id'=>'nextpage'), null, array('escape'=>false,'id'=>'nextpage','class' => 'disabled'));?>
</div>

  <nav id="page_nav">
     <a href="#"></a>
  </nav>

<div class="slideshow1">
    <div class="mainebook">
        <div id="bookshelf" class="bookshelf">
            <?php
            $no = 0;
            $multiple = 0;
            foreach ($ebooks as $ebook) :
            
            $no ++;
            ?>
            
            <figure id="bookshelf_<?php echo $ebook['Lab']['id']?>" class="entrybook <?php echo 'entryno_'.$no;?>">
                    <div class="book" data-book="book-1" data-image="<?php echo $this->webroot.$ebook['Lab']['cover']?>"></div>
                    
                    <div class="buttons"></div>
                    
                    <div class="details">
                        <ul>
                            <li>
                                <figcaption><h2 id="judulbuku"><?php echo $ebook['Lab']['title']?><span id="pengarangbuku"><?php echo $ebook['Lab']['pengarang']?></span></h2 class="cufonreplace"></figcaption>
                            </li>
                            <li id="detailbuku"><?php echo $ebook['Lab']['details']?></li>

                            <li class="buttonlist">
                                
                                
                                
                                <a href="<?php echo $this->webroot;?>labs/view/<?php echo $ebook['Lab']['id']; ?>?<?php echo time();?>" class="btn btn-7 btn-7g btn-icon-only icon-play3 viewebook hasTooltip" data-tooltip="Lihat Lab"></a>  

                                <a href="<?php echo $this->webroot;?>labs/edit/1/<?php echo $ebook['Lab']['id']; ?>" class="btn btn-7 btn-7g btn-icon-only icon-pencil2 editebook editbutton hasTooltip" data-tooltip="Edit Lab"></a>

                                

                                <a href="<?php echo $this->webroot;?>labs/download/<?php echo $ebook['Lab']['id']; ?>" class="btn btn-7 btn-7g btn-icon-only icon-download hasTooltip" data-tooltip="Download Lab"></a>
                                <a href="<?php echo $this->webroot;?>labs/delete/<?php echo $ebook['Lab']['id']; ?>" class="btn btn-7 btn-7g btn-icon-only icon-trash deleteebook hasTooltip" data-tooltip="Delete Lab" data-fancybox-type="ajax"></a>
                            </li>
                            
                        </ul>
                    </div>
                </figure>

            <?php 
            
            endforeach;



            ?>

        </div>
    </div><!-- /main -->
</div>

</div>

<div class="bench2">
    <a class="categoryselectebook" href="#"> <img class="pngfix" src="<?php echo $this->webroot;?>resources/images/3poles4.png" alt="bench1"></a>
</div>

<div id="ebookpanel" style="opacity:0;">
    <h3>Pilih Kategori</h3>
    <?php 
    echo $form->select('category_id',$listCategory,null,array('id'=>'dropdownfiltercategory'),array('empty'=>'Semua Kategori'));
    ?>
    
    <br/><br/>
   

    <a id="close_ebookpanel" href="#" style="position:absolute;width:30px;height:30px;top:0;right:0;"><img src="<?php echo $this->webroot;?>resources/images/fancy_close.png"></a>
</div>

</div>



<div id="upload-ebook" style="display: none">
    <script type="text/javascript">
    jQuery(document).ready(function() {
   jQuery('input[type="radio"]').click(function() {
       if(jQuery(this).attr('id') == 'LabIsflip0') {
            jQuery('.standardpdfset').show(); 
            
       }

       else {
            jQuery('.standardpdfset').hide();   
       }
   });
});
    </script>
    <div class="labs form">
        <?php echo $form->create('Lab',array('enctype'=>'multipart/form-data'));?>
            <fieldset>
            <div style="float:left;width:300px;"
                <?php

                echo '<p>';
                echo '<label>Pilih Kategori</label>';
                echo $form->select('type',$listCategory,null);

                echo '</p>';
            ?>

            <div id="radioflip">
            <?php
            
            $options=array('0'=>'Standard PDF','1'=>'Flip Ebook');
            $attributes=array('legend'=>'Pilih tipe ebook','class'=>'isflipchange');
            echo $form->radio('isflip',$options,$attributes);
            ?>
            </div>
            <span> Untuk tipe flip book, proses upload akan lebih lama, tergantung besar file pdf yang diupload </span>
            <p>
            <?php
            echo $form->input('title',array('class'=>'text-input large-input','label'=>'Judul Buku'));

            ?>


            <?php
            echo $form->input('labtype',array('type'=>'hidden','value'=>1));
            ?>

            </p>
            <p>

            <?php
            echo $form->input('pengarang',array('class'=>'text-input normal-input','label'=>'Pengarang'));

            ?>
            <p>

            <?php
            echo $form->input('penerbit',array('class'=>'text-input normal-input','label'=>'Penerbit'));

            ?>

            </p>
            <p>
                <?php echo $form->year('tahunBerdiri', 1945, 2015, null, array('class'=>'year-set'), 'Pilih Tahun');    ?>
            </p>
            <?php
            echo $form->input('details',array('label'=>'Resensi'));

            ?>

            <div class="standardpdfset" style="display:none;">
            <p>
            <?php
            echo $form->input('File.image1', array('label'=>'Cover file:', 'type'=>'file'));
            echo '</p>';?>
            
            
            </div>

            <div class="flipbookset" style="">

            
            <p>
            <label>Pilih file ebook</label>
            <?php
            echo $form->input('Ebook.ebookfiles', array('label'=>false, 'type'=>'file'));?>
            </p>

            </div>

            </fieldset>
        <?php echo $form->end('Submit');?>

        
    </div>
</div><!--end labs upload div-->



<script type="text/javascript">



function addcountbook(){

    var i = 0;
    jQuery( "figure.entrybook" ).each(function() {

        i++;
        jQuery(this).attr('data-countebook','');
        
        jQuery(this).attr('data-countebook',i);
        
    });
    indexebook();

}

function indexebook(){
    console.log('startreindexagain');
    var multipleBook = 0;
    var datacount = '';
    var findelement2 = jQuery( "figure.entrybook" );
    
    jQuery(findelement2).each(function() {
    
        jQuery(this).removeClass('showonright');
        var datacount = jQuery(this).data('countebook');

        console.log(datacount);
        if (datacount % 8 == 0){
            jQuery(this).addClass('showonright');
            console.log('find');
            
        }
        else if (datacount  % ((multipleBook*7)+(multipleBook-1)) == 0 ) {
            multipleBook++;
            jQuery(this).addClass('showonright');
            console.log('find');
            
        }
        

        if (datacount == 1){
            jQuery(this).removeClass('showonright');
        }
        

    });
}
addcountbook();

jQuery(document).ready(function(){


jQuery('.categoryselectebook').live("click", function (e) {
    e.preventDefault(); // avoids calling preview.php
    jQuery("#ebookpanel").css('z-index', '10');
    jQuery("#ebookpanel").transition({y: '-40px',opacity: 1 },function(){
        jQuery(this).css({
           
        });
    });
}); // on

jQuery('#close_ebookpanel').live("click", function (e) {
    e.preventDefault(); // avoids calling preview.php
    jQuery("#ebookpanel").transition({y: '0',opacity: 0 },function(){
        jQuery(this).css({
           'z-index' : '0'
        });
    });
}); // on

jQuery('#dropdownfiltercategory').on('change', function() {
    jQuery.fancybox.showLoading();
    jQuery('#bookshelf').fadeOut('slow');
  var valueDropdown = this.value ; // or $(this).val()
    jQuery.ajax({
      type: "POST",
      dataType: "html",
      cache: false,
      url: '<?php echo $this->webroot?>labs/find_category/'+valueDropdown, // preview.php
      //data: $("#postp").serializeArray(), // all form fields
      success: function (data) {

        jQuery.fancybox.hideLoading();
        jQuery('#bookshelf').fadeIn('slow');


        jQuery('#ebookrack').html(data);
        
        jQuery('#searchquery_ebook').val('');
        
        
      } // success
    }); // ajax
});


});
</script>