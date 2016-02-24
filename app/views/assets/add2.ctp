<?php
echo $html->css('/resources/css/btn-component.css');
?>
<style type="text/css">
.statusload{
	position: absolute;
	display: inline-block;
	overflow: hidden; 
	left: 50%; 
	top: 47%; 
	width: 200px; height: 100px; 
	margin-top: 10px; 
	margin-left: -100px; 
	text-align: center;
	display: none;
	
}
</style>

<div id="presentase-template-content" class="clearfix">
	<img style="position:absolute;top:10px;left:20px;" src="<?php echo $this->webroot; ?>resources/images/presentasi-ico111.png" alt="icon">
	<img style="position:absolute;top:10px;right:20px;" src="<?php echo $this->webroot; ?>resources/images/presentasi-ico2111.png" alt="icon">

	<div id="presentase-content2" class="clearfix">
		<div id="uploadlesson">
		     <div id="upload-lesson2">
		        <div id="lessonsteptitle">
		            <img src="<?php echo $this->webroot;?>resources/images/lessons/lessonslogo.png">
		            <h1 id="titlecreator">PRESENTASI</h1>
		            <h3 id="step_title">PEMBUATAN PRESENTASI</h3>
		            <p id="desc_title"> Selamat datang di Presentasi, silahkan masukan judul kelas dan mata pelajaran tentang bahan ajar anda terlebih dahulu</p>
		        </div>

		        <div id="step1_lesson" style="width:90%;text-align:center;margin:0 auto;">

		        <?php echo $form->create('Asset',array('enctype'=>'multipart/form-data','style'=>'width: 100%;position: relative;float: left;text-align: left;'));?>
		            
		                <p>
		                    
		                    <?php
		                        echo $form->input('title',array('class'=>'text-input large-input','label'=>'Judul Presentasi','div'=>false,'style'=>'width:50%;'));
		                    ?>
		                </p>

		                

		                <p>
		                    <label>Pilih Kelas</label>
		                    <?php
		                        
		                        echo $form->select('kelas',$listKelas,null,array('class'=>'text-input large-input','label'=>'Kelas','div'=>false,'style'=>'width:30%;'));
		                    ?>

		                </p>

		                <p>
		                    <label>Pilih Mata Pelajaran</label>
		                    <?php
		                        
		                        echo $form->select('pelajaran_id',$listMataPelajaran,null,array('class'=>'text-input large-input','label'=>'Pelajaran','div'=>false,'style'=>'width:50%;'));
		                    ?>

		                </p>

		                <?php
						if($groupAuth == 1 ||$groupAuth == 2){
							$createdsopo = 1;
						}else{
							$createdsopo = 2;
						}
						echo $form->hidden('created_by',array('value'=>$createdsopo));
						echo $form->hidden('jenis',array('value'=>2));
						?>

		            <button id="" class="btn btn-4 btn-4c btn-back icon-arrow-left" onclick="javascript(window.location = 'http://google.com')">Batal</button>

		            <button id="submit_step1" class="btn btn-4 btn-4c icon-arrow-right">
		            	Lanjutkan</button>
		            
		            <?php echo $form->end();?>
		        
		        </div>


		        <div id="step2_lesson" style="text-align:left;display:none;">
		            <p style="width:40%;"> Halaman yang sudah anda buat : </p>
		            <div id="pages_lesson_area">
		                <p>- Klik pada halaman untuk mengedit, atau menghapus halaman <br/> - Tahan dan arahkan halaman untuk memanage order halaman </p>
		                <p class="no_halaman">Belum ada halaman, silahkan tambahkan halaman</p>
		                <ul class="sortable">
		                </ul>
		                
		            </div>

		            <div id="lesson_action_area">
		                <p style="margin-top:0;">Anda sedang mengedit bahan ajar :<br/>
		                    <span id="title_bahanajar" style="display:block;margin-top:7px;margin-bottom:5px;"></span>
		                    Oleh : <span id="author_bahanajar"></span><br/>
		                    Untuk Kelas <span id="kelas_bahanajar"></span>  - <span id="pelajaran_bahanajar"></span>
		                </p>
		                <button id="add_leson_page" class="btn btn-3 btn-3a icon-document-add">Tambah Halaman</button><br/>
		                <button class="btn btn-3 btn-3a icon-zoom previewlesson" id="previewlesson_btn" data-urldata="" >Preview</button><br/>
		                <button id="finish_lesson" class="btn btn-3 btn-3a icon-checkmark-circle">Finish</button>
		            </div>

		            <?php echo $form->create('Halaman',array('action'=>'updateorder','enctype'=>'multipart/form-data'));?>
		                
		            <?php echo $form->end();?>
		        </div>


		        <div id="step3_lesson" style="text-align:center;margin:0 auto;display:none;">
		            
		            <ul>
		                <li><a class="selected_text_template" href="#" data-templatetype="text" data-template = "1"><img src="<?php echo $this->webroot;?>images/templ-doc-text.png"/><br/>Full Teks</a></li>

		                <li><a class="selected_text_image_template" href="#" data-templatetype="file" data-template = "2"><img src="<?php echo $this->webroot;?>images/templ-doc-image-left.png"/><br/>Teks&Media Rata Kiri</a></li>

		                <li><a class="selected_text_video_template" href="#" data-templatetype="file" data-template = "3"><img src="<?php echo $this->webroot;?>images/templ-doc-image-right.png"/><br/>Teks&Media Rata Kanan</a></li>

		                <li><a class="selected_text_video_template" href="#" data-templatetype="file" data-template = "4"><img src="<?php echo $this->webroot;?>images/templ-doc-image-center.png"/><br/>Teks&Media Atas</a></li>

		                <li><a class="selected_text_video_template" href="#" data-templatetype="file" data-template = "5"><img src="<?php echo $this->webroot;?>images/templ-doc-image.png"/><br/>Full Media</a></li>
		            </ul>
		            <br/>
		            <br/>
		            <button id="" class="btn btn-4 btn-4c btn-back icon-arrow-left" data-fromlesson="3">Kembali</button>
		            <button id="submit_step3" class="btn btn-4 btn-4c icon-arrow-right">Lanjut</button>


		        </div>


		        <div id="step4_lesson" style="text-align:center;margin:0 auto;display:none;">
		            <?php echo $form->create('Halaman',array('enctype'=>'multipart/form-data'));?>

		            <?php
		            echo $form->input('lesson_id',array('type'=>'hidden','id'=>'lessonidtosave'));
		            ?>

		            <?php
		            echo $form->input('template_type',array('type'=>'hidden','id'=>'lessontypetosave'));
		            ?>

		            <?php
		            echo $form->input('order',array('type'=>'hidden','id'=>'lessonordertosave'));
		            ?>
		            <?php
		            echo $form->input('mediafiles', array('label'=>false, 'type'=>'file','style'=>'visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;'));
		            ?>

		            <?php
		            echo $form->input('file',array('type'=>'hidden','id'=>'lesson_filename_tosave'));
		            ?>

		            <?php
		            echo $form->input('file_type',array('type'=>'hidden','id'=>'lesson_filetype_tosave'));
		            ?>

		            <?php
		            echo $form->input('file_extension',array('type'=>'hidden','id'=>'lesson_fileextension_tosave'));
		            ?>

		            

		            <div id="template_container_text" class="template_container" style="display:none;margin:0 auto;text-align:center;">
		                <div style="width:60%;margin:0 auto;text-align:center;" class="">
		                    <div class="inserttextarea">
		                    </div>
		                </div>
		                    <br/>
		                    <br/>
		                <button id="" class="btn btn-4 btn-4c btn-back icon-arrow-left" data-fromlesson="4">Batal</button>
		                <button id="submit_step4" class="btn btn-4 btn-4c icon-arrow-right">Simpan</button>
		            </div>

		            <div id="template_container_file" class="template_container" style="display:none;margin:0 auto;text-align:center;">

		                <div class="uploadcontainer default">

		                </div>

		                <div style="width:60%;float:left;">
		                    <div class="inserttextarea">
		                    </div>
		                
		                </div>
		                <div class="clear" style="float:none;clear:booth;"></div>
		                <br/>
		                <br/>
		                <button id="" class="btn btn-4 btn-4c btn-back icon-arrow-left" data-fromlesson="4">Batal</button>
		                <button id="submit_step4" class="btn btn-4 btn-4c icon-arrow-right">Simpan</button>
		            </div>


		            <?php echo $form->end();?>


		        </div>
		        
		     </div><!--end labs upload div-->

		</div>
		</div>
	</div>

	<ul id="menu_list_presentase">
			<!--<li><a class="button-pembelajaran" id="upload-btn-black" href="#subjectadd" rel="modal">></a></li>-->
			<li><a class="button-pembelajaran" id="back-btn-black" href="<?php echo $this->webroot; ?>assets<?php echo $kelas;?>"></a></li>
			<li><a class="button-pembelajaran" id="home-btn-black" href="<?php echo $this->webroot; ?>users/home"></a></li>
		</ul>
</div>