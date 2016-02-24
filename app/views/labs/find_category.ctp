
<?php if (!$ebooks){?>
<div class="paging">
  
  <div id="prevpage" class="disabled"><strong>￩</strong> Sebelumnya</div>  
  
  <div id="nextpage" class="disabled">Selanjutnya <strong>￫</strong></div>
</div>

<div class="slideshow1">
    <div class="mainebook">
        <div id="bookshelf" class="bookshelf">
            
            <p class="booknotfound" style="font-size:1.5em;color: #7b4520;margin: 70px 0 0 300px;font-weight: 700;">Tidak ditemukan ebook</p>

        </div>
    </div><!-- /main -->
</div>
<?php
}else{ ?>
<?php
//extract the get variables
    $url = $this->params['url'];
    unset($url['url']);
    $get_var = 'sdf';
     
    $arg1 = array(); $arg2 = array();
    //take the named url
    if(!empty($this->params['named']))
    $arg1 = $this->params['named'];
     
    //take the pass arguments
    if(!empty($this->params['pass']))
    $arg2 = $this->params['pass'];
    
    $this->params['controller'] = 'ebook';
    //merge named and pass
    $args = array_merge($arg1,$arg2);
     
    //add get variables
    $args["?"] = $get_var;
     
    $paginator->options(array('url' => $args));
    
?>


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
<?php echo $javascript->link('/resources/scripts/bookblock.min.js'); ?>
<?php echo $javascript->link('/resources/scripts/classie.js'); ?>
<?php echo $javascript->link('/resources/scripts/bookshelf.js'); ?>
<?php } ?>