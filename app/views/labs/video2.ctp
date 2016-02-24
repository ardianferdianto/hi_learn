
<div id="holder-ebook">
	<ul id="menu_list_top_pembelajaran">
		<li><a class="button-pembelajaran" id="upload-btn2" href="#upload-ebook" rel="modal"></a></li>
		<li><a class="button-pembelajaran" id="home-btn" href="<?php echo $this->webroot; ?>users/home"></a></li>
	</ul>
	<h2 class="video_and_book">video & film</h2>
	<div id="menu-top-ebook">
		
	</div>
	<div class="content-ebook clearfix">
		<div class="topebook clearfix">
			<div id="category-ebook">
				<h3>Pilih Category</h3>
				<ul>
					<?php foreach ($listCategory as $category):?>
					<li>
						<?php echo $ajax->link($category['Category']['name'],array('controller'=>'labs', 'action' => 'find_category_video',$category['Category']['id']), array('class'=>'cat-video','update' => 'mychange' ,'escape' => false)); ?>
					</li>
					<?php endforeach;?>
					
				</ul>
				<div id="video-list">
					
					<div id="mychange">
					</div>
					
				</div>
			</div>
			<div id="preview-video" class="clearfix">
				
			</div>
		</div>
		
		<div id="upload-ebook" style="display: none">
			<div class="labs form">
				<?php echo $form->create('Lab',array('enctype'=>'multipart/form-data'));?>
					<fieldset>
					<div style="float:left;width:300px;"
						<?php

						echo '<p>';
						echo '<label>Pilih Kategori</label>';
						
						
						echo $form->select('type',$listCategoryVideo,null);
						echo '</p>';
					?>

					<p>
					<?php
					echo $form->input('title',array('class'=>'text-input large-input','label'=>'Judul'));
					
					?>
					
					</p>
					<p>

					<?php
					echo $form->input('produksi',array('class'=>'text-input normal-input','label'=>'Produksi'));
					
					?>
					<p>

					<?php
					echo $form->input('sutradara',array('class'=>'text-input normal-input','label'=>'Sutradara'));
					
					?>
					
					</p>
					<p>
						<?php echo $form->year('tahunBerdiri', 1945, 2011, null, array('class'=>'year-set'), 'Pilih Tahun');	?>
						
					</p>
					<?php
					echo $form->input('details',array('label'=>'Resensi'));
					
					?>
					<?php
					echo $form->input('labtype',array('type'=>'hidden','value'=>2));
					?>
					<p>
					<?php
					echo $form->input('File.image1', array('label'=>'Cover file:', 'type'=>'file'));
					echo '</p>';?>
					<p>
					<label>Browse file</label>
					<?php
					echo $form->input('file', array('label'=>false, 'type'=>'file'));
					
					echo '</p>';?>
					
					
				 	
					</fieldset>
				<?php echo $form->end('Submit');?>
			</div>
		</div><!--end labs upload div-->
	</div>

</div>







