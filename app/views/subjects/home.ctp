
<style type="text/css">
html{
	background: url(../homenew/images/aurora-wallpaper-8.jpg) no-repeat;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}
body{
	background: transparent;
}
#body-wrapper{
	background: transparent;
}
.st_main img.st_preview{
	position:absolute;
	left:0px;
	top:0px;
	width:100%;
}
ul.st_navigation {
    position: absolute;
    width: 100%;
    top: 250px;
    left: 390px;
    list-style: none;
}
ul.st_navigation li {
	float:left;
	clear:both;
	margin-bottom:8px;
	position:relative;
	width:100%;
}
ul.st_navigation li span.st_link{
	background-color:#000;
	float:left;
	position:relative;
	line-height:50px;
	padding:0px 20px;
	-moz-box-shadow:0px 0px 2px #000;
	-webkit-box-shadow:0px 0px 2px #000;
	box-shadow:0px 0px 2px #000;
}
ul.st_navigation li span.st_arrow_down,
ul.st_navigation li span.st_arrow_up{
	position:absolute;
	margin-left:15px;
	width:40px;
	height:50px;
	cursor:pointer;
	-moz-box-shadow:0px 0px 2px #000;
	-webkit-box-shadow:0px 0px 2px #000;
	box-shadow:0px 0px 2px #000;
}
no-repeat center center;
}
-repeat center center;
}
.st_wrapper{
	
	position: absolute;
    width:100%;
    height:126px;
    overflow-y:hidden;
	top:170px;
    left: 0;
}
.st_thumbs{
    height:126px;
    margin: 0;
}

.st_loading{
	position:fixed;
	top:10px;
	) no-repeat 10px 50%;
	padding:15px 40px 15px 60px;
	-moz-box-shadow:0px 0px 2px #000;
	-webkit-box-shadow:0px 0px 2px #000;
	box-shadow:0px 0px 2px #000;
	opacity:0.6;
	display: none;
	filter:progid:DXImageTransform.Microsoft.Alpha(opacity=60);
}
.st_about{
	display:none;
	position:absolute;
	top:50px;
    left:-180px;
	opacity:0.6;
	filter:progid:DXImageTransform.Microsoft.Alpha(opacity=60);
}
.st_subcontent{
	background:#000;
	padding:30px;
	-moz-box-shadow:0px 0px 10px #000;
	-webkit-box-shadow:0px 0px 10px #000;
	box-shadow:0px 0px 10px #000;
}
.menu-icon{
	float: left;
	width:200px;
	height: 200px;
	display: block;
	background: #c3f267;
	opacity:0.7;
	text-align: center;
	border: 2px solid #fff;
    -moz-border-radius:200px;
    -webkit-border-radius:200px;
    border-radius:30px;
    margin-right: 10px;
    margin-top: 50px;
}
.menu-icon h1{
    color: #fff;
font-size: 70px;
opacity: 1;
margin: 0px 22px 0 0;
}
.menu-icon img{
	margin-top: 20px;
}
.menu-icon a{
	width:230px;
	float: left;
	height: 180px;
	display: block;
	text-decoration: none;
}
.menu-icon p{
	color: #fff;
margin-top: 10px;
font-size: 20px;
margin-left: -24px;
margin-top: 60px;
margin-bottom: 3px;
line-height: 0;
}
.menu-icon h3{
    color: #fff;
}
</style>
<div id="flashhome2">

<div id="st_main" class="st_main">
    <img src="<?php echo $this->webroot;?>resources/graph.png" alt="" class="st_preview" style="display:none;"/>
    <div class="logo" style="text-align:center;width:100%;margin:0 auto;margin-top:40px;">
        <img src="<?php echo $this->webroot;?>homenew/images/logo.png" style="width: 145px;"/>
        <h1 style="color:#fff; margin-top: 24px; font-size: 20px;">DIREKTORI PEMBELAJARAN INTERAKTIF</h1>
        <h2 style="color:#fff; font-size: 20px;">UNTUK SMA</h2>
    </div>
    
    <div id="st_loading" class="st_loading"><span>Loading...</span></div>
    <ul id="st_nav" class="st_navigation">
        <li class="album">
            <div class="st_wrapper st_thumbs_wrapper">
                <div class="st_thumbs">
                   
                    <?php 
                    $number = 9;
                    $numberclass = count($classlist);
                    foreach ($classlist as $item):
                    $number ++;
                    if ($number % 2 == 0) {
                        if($number == $numberclass){
                            echo '<div class="menu-icon" style="opacity: 0.7; background: rgba(231, 26, 166, 0.54902);">';
                        }else{
                            echo '<div class="menu-icon last" style="opacity: 0.7; background: rgba(231, 26, 166, 0.54902);">';
                        }
                        
                    
                    }else{
                        if($number == $numberclass){
                            echo '<div class="menu-icon last" style="opacity: 0.7; background: rgba(89, 23, 94, 0.54902);">';
                        }else{
                            echo '<div class="menu-icon" style="opacity: 0.7; background: rgba(89, 23, 94, 0.54902);">';
                        }
                        
                    }
                    ?>
                    
                        <a href="<?php echo $this->webroot;?>subjects/kelas/<?php echo $number;?>">
                            <p>KELAS</p>
                            <h1><?php echo $number;?></h1>
                        </a>
                    </div>

                    <?php endforeach;?>

                </div>
            </div>
        </li>
        
    </ul>
    
    </div>

    
</div>




<!-- The JavaScript -->
<script type="text/javascript">
jQuery(function() {
    //the loading image
    var $loader     = jQuery('#st_loading');
    //the ul element 
    var $list       = jQuery('#st_nav');
    //the current image being shown
    var $currImage  = jQuery('#st_main').children('img:first');
    
    
    buildThumbs();
    
    function buildThumbs(){
        $list.children('li.album').each(function(){
            var $elem           = jQuery(this);
            var $thumbs_wrapper = $elem.find('.st_thumbs_wrapper');
            var $thumbs         = $thumbs_wrapper.children(':first');
            //each thumb has 180px and we add 3 of margin
            var finalW          = $thumbs.find('div.menu-icon').length * 230;
            $thumbs.css('width',finalW + 'px');
            //make this element scrollable
            makeScrollable($thumbs_wrapper,$thumbs);
        });
    }
    
    //clicking on the menu items (up and down arrow)
    //makes the thumbs div appear, and hides the current 
    //opened menu (if any)
    $list.find('.st_arrow_down').live('click',function(){
        var $this = jQuery(this);
        hideThumbs();
        $this.addClass('st_arrow_up').removeClass('st_arrow_down');
        var $elem = $this.closest('li');
        $elem.addClass('current').animate({'height':'170px'},200);
        var $thumbs_wrapper = $this.parent().next();
        $thumbs_wrapper.show(200);
    });
    $list.find('.st_arrow_up').live('click',function(){
        var $this = jQuery(this);
        $this.addClass('st_arrow_down').removeClass('st_arrow_up');
        hideThumbs();
    });
    
    //clicking on a thumb, replaces the large image
    $list.find('.st_thumbs div.menu-icon').bind('click',function(){
        var $this = jQuery(this);
        $loader.show();
        jQuery('<img class="st_preview"/>').load(function(){
            var $this = jQuery(this);
            var $currImage = jQuery('#st_main').children('img:first');
            $this.insertBefore($currImage);
            $loader.hide();
            $currImage.fadeOut(2000,function(){
                jQuery(this).remove();
            });
        }).attr('src',$this.attr('alt'));
    }).bind('mouseenter',function(){
        jQuery(this).stop().animate({'opacity':'1'});
    }).bind('mouseleave',function(){
        jQuery(this).stop().animate({'opacity':'0.7'});
    });
    
    //function to hide the current opened menu
    function hideThumbs(){
        $list.find('li.current')
             .animate({'height':'50px'},400,function(){
                jQuery(this).removeClass('current');
             })
             .find('.st_thumbs_wrapper')
             .hide(200)
             .andSelf()
             .find('.st_link span')
             .addClass('st_arrow_down')
             .removeClass('st_arrow_up');
    }

    //makes the thumbs div scrollable
    //on mouse move the div scrolls automatically
    function makeScrollable($outer, $inner){
        var extra           = 800;
        //Get menu width
        var divWidth = $outer.width();
        //Remove scrollbars
        $outer.css({
            overflow: 'hidden'
        });
        //Find last image in container
        var lastElem = $inner.find('.menu-icon.last');
        $outer.scrollLeft(0);
        //When user move mouse over menu
        $outer.unbind('mousemove').bind('mousemove',function(e){
            var containerWidth = lastElem[0].offsetLeft + lastElem.outerWidth() + 2*extra;
            var left = (e.pageX - $outer.offset().left) * (containerWidth-divWidth) / divWidth - extra;
            $outer.scrollLeft(left);
        });
    }
});
</script>
