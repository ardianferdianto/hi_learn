	<div id="container">
		

	&nbsp;
	<div id="main">
		<img id='click_to_open' src="<?php echo $this->webroot;?>images/click_to_open.png" alt='click to open' />
  		<div id='features'>
  			<div class="feaature bk-book book-1 bk-bookdefault viewlesson">
				<div class="bk-front">
			        <div class="bk-cover yellow">
			            <h2>
			            	<form id="container_data">
			                <span class="cover_text" id="author"></span><input name="data[Presentation][author]" type="text" class="form-control" value="<?php echo $session->read("Auth.User.nama")?>" style="display:none" id="Assetauthor" readOnly="true">
			                <span class="cover_text" id="title" style="text-transform:uppercase;">{JUDUL PRESENTASI}</span><input name="data[Presentation][title]" type="text" class="form-control" value="asdasdasdsadas" style="display:none" id="Assettitle"><br/>
			                <span class="cover_text" id="deskripsi" style="font-size:0.5em;font-family:arial,helvetica;">{Deskripsi singkat presentasi}</span><input name="data[Presentation][deskripsi]" type="text" class="form-control" value="asdasdasdsadas" style="display:none" id="Assetdeskripsi">
				            </form>
			                <span class="cover_text" id="save"></span><button id="Assetsave" class="form-control" style="display:none;" >Save</button>
			            </h2>
			        </div>
			        <div class="bk-cover-back"></div>
			    </div>
			</div>
			<div class="feature">
				<div class="contenttextbook nano">
					<div class="nano-content">
						<div class="contentareablock titlearea">
						
		                <!--<span>Grup Melati</span>-->	
		                <h1 style="text-transform:uppercase;font-size:43px;" class="judul">Kegiatan meneliti 1</h1>
		                <span style="font-size:1em;font-family:arial,helvetica;margin-top:10px;display:block;" class="judul">penelitian daun</span>
		            	<p style="margin-top:150px;display:block;font-weight:bold;font-size:1.1em;">Kimia - Kelas 1 (SMP)</p>
		            	<br/>
		            	<p style="font-weight:normal;margin-top:20px;display:block;">dibuat oleh:
		            	</p>
						<p class="penulis" style="margin-top:7px;display:block;"></p>
		            	
					</div>
					</div>
				</div>
				
			</div>
			<div class="feature">
				<div class="contenttextbook nano">
					<div class="nano-content">
						<div class="contentareablock titlearea">
						<img src="images/smicro/poweredby.png">
		                
					</div>
					</div>
				</div>
			</div>

			<div class="feature">
				<div class="contenttextbook nano">
					<div class="nano-content">
						<div class="contentareablock">
						</div>
					</div>
				</div>
			</div>
			<div class="feature">
				<div class="contenttextbook nano">
					<div class="nano-content">
						<div class="contentareablock">
							<h2 style="font-size:33px;background-color:#66CAE8;color:#fff;padding:10px;margin-left:-10px;">BAB 1</h2>
							<div class="content" contenteditable="true" id="editor_0" style="position: absolute;display: block;width: 91%;height: 85%;">ASD ASD ASD ASD asdasdadadsad </div>
						</div>
					</div>
				</div>
			</div>
			<div class="feature">
				<div class="bk-front">
			        <div class="bk-cover yellow">
			            <img style="margin-top:120px;" src="images/smicro/backcover.png">
			        </div>
			        <div class="bk-cover-back"></div>
			    </div>
			</div>
		</div> <!-- features -->

	</div>
	<nav class="navigasiwow">
		<ul>
			<li><a id='first'     href="#" title='goto first page'   >First page</a></li>
			<li><a id='back'      href="#" title='go back one page'  >Back</a></li>
			<li><a id='next'      href="#" title='go foward one page'>Next</a></li>
			<li><a id='last'      href="#" title='goto last page'    >last page</a></li>
			<li><a id='zoomin'    href="#" title='zoom in'           >Zoom In</a></li>
			<li><a id='zoomout'   href="#" title='zoom out'          >Zoom Out</a></li>
			<li><a id='slideshow' href="#" title='start slideshow'   >Slide Show</a></li>
			<li><a id='flipsound' href="#" title='flip sound on/off' >Flip sound</a></li>
			<li><a id='add_page' href="#" title='flip sound on/off' >add page</a></li>
			<li><a id='remove_page' href="#" title='flip sound on/off' >remove page</a></li>
		</ul>
	</nav>
	
	</div> <!--! end of #container -->
	
	</div>
	<footer>
		
	</footer>
</div>


	<!-- Javascript at the bottom for fast page loading -->

	<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
	
	<?php echo $javascript->link('/wow_book/wow_book.min.js'); ?>
	
	
	<?php echo $javascript->link('jquery.nanoscroller.min.js'); ?>
	
<style>
.makecenter{
	position: absolute;
	display: inline-block;
	right: 0;
	width: 61px;
	padding: 5px 10px;
}
.makecenter > a {
	color: #000;
	background-color: transparent;
	border: 1px solid;
	margin: 2px;

}
</style>
	<script type="text/javascript">

		function CKupdate(){
			for ( instance in CKEDITOR.instances )
			    CKEDITOR.instances[instance].updateElement();
		}
		$(document).ready(function() {
			cek_title();
			var cover='<div class="feaature bk-book book-1 bk-bookdefault viewlesson">'+
						'<div class="bk-front">'+
					        '<div class="bk-cover yellow">'+
					            '<h2>'+
					                '<span>Grup Melati</span>'+
					               ' <span style="text-transform:uppercase;">Kegiatan meneliti 1</span><br/>'+
					                '<span style="font-size:0.5em;font-family:arial,helvetica;">penelitian daun</span>'+
					            '</h2>'+
					        '</div>'+
					        '<div class="bk-cover-back"></div>'+
					    '</div>'+
					'</div>';
			$(".nano").nanoScroller();

			$('#features').wowBook({
				 height : 550
				,width  : 950
				,centeredWhenClosed : true
				,hardcovers : true
				,turnPageDuration : 1000
				,numberedPages : [1,-2]
				,controls : {
						zoomIn    : '#zoomin',
						zoomOut   : '#zoomout',
						next      : '#next',
						back      : '#back',
						first     : '#first',
						last      : '#last',
						slideShow : '#slideshow',
						flipSound : '#flipsound'
					}
			}).css({'display':'none', 'margin':'auto'}).fadeIn(1000);
			$("#cover").click(function(){
				$.wowBook("#features").advance();
			});
			var wow_book=$.wowBook("#features");

			
			//tombol add
			$('#add_page').on('click',function(){
				add_page();
				CKupdate();
			});
			//tombol remove
			$('#remove_page').on('click',function(){
				var bookz=$.wowBook('#features');
				if(bookz.pages.length==6){
					alert('abis');
				}else{
					bookz.removePages(-2,-1);
				}
			});
			//judul
			$('h2 span').dblclick(function(){
			    $('.cover_text').each(function() {
				    $(this).hide();
				    //console.log(this.id);
				    $('.form-control#Asset'+this.id).val($(this).text());
				    $('.form-control#Asset'+this.id).show();
				});
			});
			$('#Assetsave').on('click',function(){
				$.ajax({
					type: "POST",
					url: '<?php echo $this->webroot?>assets/edit_pages?que=add',
					data: $('#container_data').serialize(),
					dataType: "json",
					success: function(data){
						console.log(data);
						cek_title(data.Presentation.id);
					}
				});
				$('.cover_text').each(function() {
				    $(this).show();
				    $('.form-control#Asset'+this.id).val($(this).text());
				    $('.form-control#Asset'+this.id).hide();
					
				});
			});
			
		});
		$('#features').on('click','div.content',function(e){
			var edit=$(e.target).attr('id');
			console.log(edit);
			if($(this).attr("contenteditable") == "false"){
				var name;
				for(name in CKEDITOR.instances) {
					var instance = CKEDITOR.instances[name];
					if(this && this == instance.element.$) {
						instance.destroy();
					}
				}
			}
			$(this).attr('contenteditable', true);
			CKEDITOR.disableAutoInline = true;
			CKEDITOR.inline( this,{
			  filebrowserBrowseUrl : '<?php echo $this->webroot;?>js/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
			  filebrowserUploadUrl : '<?php echo $this->webroot;?>js/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
			  filebrowserImageBrowseUrl : '<?php echo $this->webroot;?>js/filemanager/dialog.php?type=1&editor=ckeditor&fldr=',
				on: {
				    blur: function( event ) {
				        var data = event.editor.getData();
				       	console.log(data);
				    }
				}
			});
			//$(edit).attr('contenteditable','true');
			
		});
		function add_page(){
			var back_cover='<div class="feature">'+
				'<div class="bk-front">'+
			        '<div class="bk-cover yellow">'+
			            '<img style="margin-top:120px;" src="images/smicro/backcover.png">'+
			        '</div>'+
			        '<div class="bk-cover-back"></div>'+
			    '</div>'+
			'</div>';
			var data=function(index){
				return '<div class="feature"><div class="contenttextbook nano"><div class="nano-content"><div class="contentareablock"><h2 style="font-size:33px;background-color:#66CAE8;color:#fff;padding:10px;margin-left:-10px;">BAB 1</h2><div class="content" contenteditable="true" id="editor_'+index+'" style="position: absolute;display: block;width: 91%;height: 85%;">ASD ASD ASD ASD asdasdadadsad </div></div></div></div></div>'
			};
			var book=$.wowBook('#features');
			book.removePages(-1);
			book.insertPage(data(book.pages.length-4),false);
			book.insertPage(data(book.pages.length-4),false);
			book.insertPage(back_cover,false);
			book.updateBook(true);
		}
		function cek_title(id){
			if(undefined !=id){
				$.ajax({
					url: '<?php echo $this->webroot?>assets/edit_pages/'+id,
					dataType: 'json',
					success: function(result){
						console.log(result);
						$('#author').text(result.Presentation.author);
						$('#title').text(result.Presentation.title);
						$('#deskripsi').text(result.Presentation.deskripsi);
					}
				});
			}
			else{
				$('#author').text('<?php echo $session->read("Auth.User.nama")?>');
				//console.log(content);
			}
		}
	</script>

	
