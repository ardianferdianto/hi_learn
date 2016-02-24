 <style type="text/css">
 
 </style>
 
 <div class="content" style="top:-145px;">
      <div class="menuwrapper">
          <div class="mainmenu">
          <img class="logoedusoft_bottom" src="<?php echo $this->webroot;?>images/logo-edu-small.png"/>

              <div class="menucenter">
                  <div class="logo-container">
<!-- ========  Logo ======== -->

                      <img class="logo" alt="logotype" src="<?php echo $this->webroot;?>sigma/img/logo.png">
<!-- ========  User's photo ======== -->
                      <img class="photo" alt="photo" src="<?php echo $this->webroot;?>sigma/img/for_sma.png">
                  </div>
                  <h3 class="mobile bcolor">
                      <a href="">iltaen</a>
                  </h3>
                  <div class="mobile">Web designer, developer</div>
              </div>

              <div class="menu-items">

<!-- ========  Copy this block for add new menu item: ======== -->
                  <!--Start block-->
                  <a href="#about" class="menuitem">
                      <i class="icon-laptop"></i>
                      <div class="menu-title">Pembelajaran</div>
                  </a>
                  <!--end-->

                  <a href="#assets" class="menuitem">
                      <i class="icon-bar-chart"></i>
                      <div class="menu-title">Presentasi</div>
                  </a>

                  <a href="#pengumuman" class="menuitem">
                      <i id="tanda" class="icon-exclamation"></i>
                      <div class="menu-title">Pengumuman</div>
                  </a>

                  <a href="#labs" class="menuitem">
                      <i class="icon-book"></i>
                      <div class="menu-title">Ebooks</div>
                  </a>
                  <a href="#video" class="menuitem">
                      <i class="icon-film"></i>
                      <div class="menu-title">Video</div>
                  </a>
                  <a href="#tugas" class="menuitem">
                      <i class="icon-pencil"></i>
                      <div class="menu-title">Tugas</div>
                  </a>
                  <a href="#ensiklopedia" class="menuitem">
                      <i class="icon-archive"></i>
                      <div class="menu-title">Ensiklopedia</div>
                  </a>
              </div>


          <div id="linecontainer" class="select-about">
                  <div class="linewrapper">
                      <div class="overwrapper">
                          <div class="colorlines large">
                              <div class="colorlines small"></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

        <div class="page">

<!-- ======== AJAX Loader message ======== -->
            <div class="loader">
                <div class="label glcolor">
                    <div class="spin"></div>
                    Loading, please wait...
                </div>
            </div>

            <div class="wrapper">
                <div class="table">
                    <div class="table-cell">
                        <div class="container">
<!-- ======== Dynamic AJAX content placed here ======== -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

  </div>
<!-- deleted part -->

<!-- until here -->
<div class="loader" style="">
    <img src="<?php echo $this->webroot;?>images/rotite-30-29.png" width="928" height="29" style="position: absolute; display: block; overflow: hidden; left: 0px; top: 0px; margin: 0px; padding: 0px; max-width: none; max-height: none; border: none; line-height: 1; background-color: transparent; -webkit-backface-visibility: hidden; -webkit-user-select: none;">
</div>
<div id="button">
    

    <!--Bubble Starts -->
    <!--First Bubble Starts -->
    <div class="bubble"></div>
    <!--First Bubble Ends -->

    <!--Second Bubble Starts -->
    <div class="bubble2"></div> 
    <!--Second Bubble Ends -->

    <!--Third Bubble Starts -->
    <div class="bubble3"></div> 
    <!--Third Bubble Ends -->

    <!--Fourth Bubble Starts -->
    <div class="bubble4"></div>
    <!--Fourth Bubble Ends -->

    <!--Fifth Bubble Starts --> 
    <div class="bubble5"></div> 
    <!--Fifth Bubble Ends --> 

    <!--Sixth Bubble Starts --> 
    <div class="bubble6"></div> 
    <!--Sixth Bubble Ends --> 
    <!--Bubble Ends -->



    <!--Bubble Starts -->
    <!--First Bubble Starts -->
    <div class="bubble7"></div>
    <!--First Bubble Ends -->

    <!--Second Bubble Starts -->
    <div class="bubble8"></div> 
    <!--Second Bubble Ends -->

    <!--Third Bubble Starts -->
    <div class="bubble9"></div> 
    <!--Third Bubble Ends -->

    <!--Fourth Bubble Starts -->
    <div class="bubble10"></div>
    <!--Fourth Bubble Ends -->

    <!--Fifth Bubble Starts --> 
    <div class="bubble11"></div> 
    <!--Fifth Bubble Ends --> 

    <!--Sixth Bubble Starts --> 
    <div class="bubble12"></div> 
    <!--Sixth Bubble Ends --> 
    <!--Bubble Ends -->


    <div class="glowbg">    
    
        
    </div>
</div>

<div id="flashhomecontainer">
    <p>
        <a href="#change-pwd" rel="_modal"><img src="<?php echo $this->webroot;?>resources/images/button/ganti-pass1.png" style="width:70px"></a>
        <a href="<?php echo $this->webroot;?>users/logout"><img src="<?php echo $this->webroot;?>resources/images/button/logout-btn1.png" style="width:70px"></a>
        <?php if($groupAuth == 1):?>
        <a href="#setting" rel="_modal"><img src="<?php echo $this->webroot;?>resources/images/button/setup-btn1.png" style="width:70px"></a>
        <?php endif;?>
    </p>
</div>
<div id="change-pwd" style="display:none;">

    <?php echo $form->create('User',array('action'=>'change_password'));?>
    <h2 style="color: #000;font-size: 25px;"><?php __('Form Perubahan Password');?></h2>
        <fieldset style="color: #000;">

        <?php

            echo $form->input('User.id', array('type'=>'hidden','value' => $loggedInIdAsli));

            //echo $form->input('goup_id',array('type'=>'hidden','value'=>$user['User']['group_id']));
            echo '<p>';
            echo $form->input('password',array('style'=>'color: #000;','label'=>'Masukkan Password baru minimum 4 karakter','class'=>'text-input medium-input','value'=>''));
            echo '</p>';
            echo '<p>';
            echo $form->input('password_confirm', array('style'=>'color: #000;','type'=>'password','label'=>'Masukkan Password baru sekali lagi','class'=>'text-input medium-input'));
            echo '</p>';

        ?>
        </fieldset>
        <p>
        <?php echo $form->end('Submit');?>
        </p>

</div>
<div class="clear"></div>

<!--<audio id="backsound" controls="controls" preload="auto" loop="loop">
                <source src="<?php echo $this->webroot;?>backsound.mp3">
                <source src="<?php echo $this->webroot;?>backsound.ogg">
                Your browser isn't invited for super fun time.
            </audio>
            <script>
            var beepOne = jQuery("#backsound")[0];
            beepOne.play();

            jQuery("#backsound").hide();
            </script>-->


<div id="setting" style="display:none;">
    <ul>
        <li><a href="<?php echo $this->webroot;?>users/"><span class="iconsweet">a </span>Pengaturan User</a></li>

        <li><a href="<?php echo $this->webroot;?>grades"><span class="iconsweet">' </span>Pengaturan Master Kelas</a></li>

        <li><a href="<?php echo $this->webroot;?>kelas"><span class="iconsweet">' </span>Pengaturan Rombel Kelas</a></li>

        <li><a href="<?php echo $this->webroot;?>pelajarans"><span class="iconsweet">' </span>Pengaturan Matapelajaran</a></li>
        
        <!--<li><a href="<?php echo $this->webroot;?>profiles/edit/1/#configSoal" rel="_modal"><span class="iconsweet">S </span>Pengaturan Waktu Soal</a></li>-->

        <li><a href="<?php echo $this->webroot;?>categories/type/1/" rel="_modal"><span class="iconsweet">S </span>Pengaturan Kategori Ebook</a></li>

        <li><a href="<?php echo $this->webroot;?>categories/type/2/" rel="_modal"><span class="iconsweet">S </span>Pengaturan Kategori Video</a></li>
    </ul>
</div>
<!-- <div id="about" style="display:none;">
<?php //echo $this->webroot; ?><h1>Hi! I'm <span class="glcolor">Designer</span></h1>
<p> Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
    sed diam nonumy eirmod tempor invidunt ut labore et dolore
    magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
</p>
</div> -->
<div id="isi" style="display:none;">
    <div id="about">
        <h1>Pembelajaran <span class="glcolor">Interaktif</span></h1>
        <p> Modul Pembelajaran Interaktif untuk membantu proses belajar mengajar menjadi lebih interaktif.
        </p>
        <a href="<?php echo $this->webroot; ?>subjects/home"><button>Go </button></a>
    </div>
    <div id="assets">
        <h1>Kumpulan <span class="glcolor">Presentasi</span></h1>
        <p> Modul Kumpulan Presentasi berisi data presentasi dari guru dan murid yang terdaftar di dalam sistem.
        </p>
        <a href="<?php echo $this->webroot; ?>assets"><button>Go </button></a>
    </div>
    <div id="pengumuman">
        <h1>Modul <span class="glcolor">Pengumuman</span></h1>
        <p> Modul Pengumuman berisi pengumuman di lingkungan sekolah.
        </p>
       <a href="<?php echo $this->webroot; ?>pengumumen/home"><button>Go </button></a>
    </div>
    <div id="labs">
        <h1>Ebooks <span class="glcolor">Bank</span></h1>
        <p> Modul Ebooks berisi kumpulan e-book untuk membantu proses belajar mengajar.
        </p>
       <a href="<?php echo $this->webroot; ?>labs"><button>Go </button></a>
    </div>
    <div id="video">
        <h1>Video <span class="glcolor">Interaktif</span></h1>
        <p> Modul Video berisi kumpulan video untuk membantu proses belajar mengajar.
        </p>
       <a href="<?php echo $this->webroot; ?>labs/video"><button>Go </button></a>
    </div>
    <div id="tugas">
        <h1>Tugas <span class="glcolor">Siswa</span></h1>
        <p> Modul Tugas berisi data Tugas dari guru dan murid yang terdaftar di dalam sistem.
        </p>
       <a href="<?php echo $this->webroot; ?>tugas"><button>Go </button></a>
    </div>
    <div id="ensiklopedia">
        <h1>Ensiklopedia <span class="glcolor">Digital</span></h1>
        <p> Modul Ensiklopedia berisi kumpulan video untuk membantu proses belajar mengajar.
        </p>
       <a href="<?php echo $this->webroot; ?>subjects/ensiklopedia"><button>Go </button></a>
    </div>
</div>






<script>
function loadPage(link){
    if ($(window).width() > 980){var delay = 600;}
    else {var delay = 0}

    $(".page .wrapper").removeClass("active");
    $(".page .container").stop().delay(delay).queue(function(nxt) {

        $.ajax({
            url: link,
            dataType : "html",
            beforeSend: function(){
                $(".page .loader").addClass("active");
            },
            success: function (data) {
                $(".page .container").html(data);
                $(".page .wrapper").addClass("active");

                $(".page .container .portfolio .group:first").addClass("active");
                $(".page .loader").removeClass("active");

                Resizer();
            }
        });
        nxt();
    });

}
function new_load(isi){
    if ($(window).width() > 980){var delay = 600;}
    else {var delay = 0}

    $(".page .wrapper").removeClass("active");
    $(".page .container").stop().delay(delay).queue(function(nxt) {
    $(".page .container").html(isi);
    $(".page .wrapper").addClass("active");

    $(".page .container .portfolio .group:first").addClass("active");
    $(".page .loader").removeClass("active");

    Resizer();
        nxt();
    });
}

function setPosition(item, angle, fulldiameter){
    var itemDistance = 0.35 * fulldiameter;
    var px = Math.cos(angle)*itemDistance + fulldiameter/2;
    var py = Math.sin(angle)*itemDistance + fulldiameter/2;
    item.css("top", py+"px");
    item.css("left", px+"px");

}

function Regulation(count){
    var num = 0;
    $(".mainmenu .menuitem").each(function(){
        var item = $(this);
        var angle = 360*Math.PI/180/count*num;
        var fulldiameter = $(".mainmenu").width(); //width(height) of menu circle

        setPosition(item, angle, 440);
        num++;
    });
}

function Rotate(item, angle){
    var angledeg = 'rotate(' + angle + 'deg)';
    item.css({
        "-webkit-transform": angledeg,
        "-moz-transform": angledeg,
        "-o-transform": angledeg,
        "-ms-transform": angledeg,
        "transform": angledeg
    });
}

function MakeMenu(itemsCount){
    Regulation(itemsCount);
    Rotate($(".mainmenu #linecontainer .overwrapper"), Math.floor(180 - 360/itemsCount));
}

function Resizer(){
    if ($(window).width() > 980){
    $(".page .wrapper").height($(window).height()); //Fix for FireFox
    }

    if($(".page .container .portfolio .group.active").height() > 100){
    $(".page .container .portfolio .all-items").css("min-height", $(".page .container .portfolio .group.active").outerHeight()+"px");
    } else {
        $(".page .container .portfolio .all-items").css("min-height", $(".page .container").width()-100);
    }
}

function SlideNext(){
    if($(".portfolio .all-items .active").is(":last-child") == false){
        $(".portfolio .all-items .active").next().toggleClass('active');
        $(".portfolio .all-items .active:first").toggleClass('active');
    }
    Resizer();
}

function SlidePrev(){
    if($(".portfolio .all-items .active").is(":first-child") == false){
        $(".portfolio .all-items .active").prev().toggleClass('active');
        $(".portfolio .all-items .active:last").toggleClass('active');
    }
    Resizer();
}

$(document).ready(function(){

    var itemsCount = $(".mainmenu .menu-items > .menuitem").length;

    $(".mainmenu .menu-items").on("click", ".menuitem", function(){
        //if ($(window).width() > 980){
            Rotate($(".mainmenu #linecontainer"), (360/$(".mainmenu .menu-items > .menuitem").length/2)+(360/$(".mainmenu .menu-items > .menuitem").length*$(this).index()));
        //}
        $(".mainmenu .menu-items .active").removeClass("active");
        $(this).addClass("active");
        //loadPage($(this).attr("href"));
        console.log("lolololo");
        new_load($($(this).attr("href")).html());
        return false;
    });

    $(".page .container").on("click", "a.innerlink", function(){
        //loadPage($(this).attr("href"));
        new_load($($(this).attr("href")).html());
        return false;
    });
    //$('#tanda').on("click",function(){console.log("trolol");});
    $(".page .container").on("focusin", ".contacts input", function(){
        $(this).siblings("i").addClass("active");
        //$(this).siblings("i").removeClass("icon-exclamation-sign");
    });
    $(".page .container").on("focusout", ".contacts input", function(){
        $(this).siblings("i").removeClass("active");

    });

    MakeMenu($(".mainmenu .menu-items > .menuitem").length);


    $(".mainmenu .menu-items .menuitem:first").click();

    $(".page .container").on("click", ".portfolio .nright", function(){
        SlideNext();
    });
    $(".page .container").on("click", ".portfolio .nleft", function(){
        SlidePrev();
    });

    Resizer();



    $(".additem").on("click", function(){
        $(".mainmenu .menu-items").append("<a href='pages/demo.html' class='menuitem'><i class='icon-coffee'></i> <div class='menu-title'>Other</div></a>");
        var iCount = $(".mainmenu .menu-items > .menuitem").length;
        MakeMenu(iCount);

        $(".mainmenu .menu-items .menuitem:first").click();

        return false;
    });
});

$(window).resize(function(){
    Resizer();
});
</script>