<!--<div id="flashhome">
    <a class="bootle" id="peminteraktif" href="../subjects/home">

    </a>
    <a class="bootle" id="ensiklopedia" href="../subjects/ensiklopedia">

    </a>
     <a class="bootle" id="ebook-nav" href="../labs/">

    </a>
    <a class="bootle" id="film-nav" href="../labs/video">

    </a>
    <a class="bootle" id="info-nav" href="../pengumumen/home">

    </a>
    <a class="bootle" id="email-nav" href="../user_messages">

    </a>
    <a class="bootle" id="presentase-nav" href="../assets">

    </a>
    <a class="bootle" id="forum-nav" href="../forum">
    </a>
    <a class="bootle" id="banksoal-nav" href="../questions/home">
    </a>
    <a class="bootle" id="clientserver-nav" href="C:\Program Files\start.exe">

    </a>
    <a class="btn-home-user" id="changePwd" href="#change-pwd" rel="modal">

    </a>
    <a class="btn-home-user" id="logout" href="<?php echo $this->webroot;?>users/logout">

    </a>
<!--</div>-->
<div id="flashhome">
<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="1200" height="650" align="middle" wmode="transparent">
    <param name="movie" value="<?php echo $this->webroot; ?>resources/home.swf"/>
    <!--[if !IE]>-->
   <object type="application/x-shockwave-flash" data="<?php echo $this->webroot; ?>resources/home.swf" width="1200" height="650" wmode="transparent"  align="middle">
        <param name="movie" value="<?php echo $this->webroot; ?>resources/home.swf"/>
    <!--<![endif]-->
       <a href="http://www.adobe.com/go/getflash">
            <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player"/>
        </a>
    <!--[if !IE]>-->
    </object>
    <!--<![endif]-->
</object>
    <p>
        <a href="#change-pwd" rel="_modal"><img src="<?php echo $this->webroot;?>resources/images/button/ganti-pass1.png"></a>
        <a href="<?php echo $this->webroot;?>users/logout"><img src="<?php echo $this->webroot;?>resources/images/button/logout-btn1.png"></a>
        <?php if($groupAuth == 1):?>
        <a href="#setting" rel="_modal"><img src="<?php echo $this->webroot;?>resources/images/button/setup-btn1.png"></a>
        <?php endif;?>
    </p>
</div>
<div id="change-pwd" style="display:none;">

    <?php echo $form->create('User',array('action'=>'change_password'));?>
    <h2><?php __('Form Perubahan Password');?></h2>
        <fieldset>

        <?php

            echo $form->input('User.id', array('type'=>'hidden','value' => $loggedInIdAsli));

            //echo $form->input('goup_id',array('type'=>'hidden','value'=>$user['User']['group_id']));
            echo '<p>';
            echo $form->input('password',array('label'=>'Masukkan Password baru minimum 4 karakter','class'=>'text-input medium-input','value'=>''));
            echo '</p>';
            echo '<p>';
            echo $form->input('password_confirm', array('type'=>'password','label'=>'Masukkan Password baru sekali lagi','class'=>'text-input medium-input'));
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
        <li><a href="<?php echo $this->webroot;?>pelajarans"><span class="iconsweet">' </span>Pengaturan Matapelajaran</a></li>
        <li><a href="<?php echo $this->webroot;?>profiles/edit/1/#configSoal" rel="_modal"><span class="iconsweet">S </span>Pengaturan Waktu Soal</a></li>
    </ul>
</div>
