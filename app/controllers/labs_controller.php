<?php
class LabsController extends AppController {

	var $name = 'Labs';
	var $helpers = array('Html', 'Form','Video');
	var $components = array('Filter');
	var $paginate = array('order'=>array('Lab.created'=>'DESC'),'limit'=>'24'); 

	function beforeFilter() {
	    parent::beforeFilter(); 
	    $this->set('menuTab', 'labs');
	    $this->set('menuTabChild', 'labs');
	    $this->Auth->allow('*');
	    $this->Auth->allow('download','generatexml','ebooks','find_category2','search','editxml','video3','search_video','index','delete');
	}
	function index_old() {
		$this->Lab->recursive = 2;
		
		
		$this->set('labs', $this->paginate());
		
		
		if($this->Auth->user('group_id')==3){
		$labsMurid = $this->Lab->find('all');
		$this->set(compact('labsMurid'));
		
		}

		//findcategory
		$listCategory = $this->Lab->Category->find('all',array('conditions'=>array('Category.type'=>1)));
		$listCategoryLab = $this->Lab->Category->find('list',array('fields'=>'Category.name','conditions'=>array('Category.type'=>1)));
		$this->set(compact('listCategory','listCategoryLab'));
		
	}


	function video() {
		$this->Lab->recursive = 2;
		
		if($this->Auth->user('group_id')==3){
		$labsMurid = $this->Lab->find('all');
		$this->set(compact('labsMurid'));
		
		}

		$videos = $this->Lab->find('all',array(
			'conditions'=>array(
				'Lab.labtype'=>2,
				),'order'=>'Lab.created DESC'
			)
		);
		$this->set('videos',$videos);
		
		$listCategory = $this->Lab->Category->find('list',array('conditions'=>array('Category.type'=>2)));

		$listCategoryVideo = $this->Lab->Category->find('all',array('conditions'=>array('Category.type'=>2)));
		
		$this->set('listCategoryVideo',$listCategoryVideo);
		$this->set(compact('listCategory'));
	}

	function find_category($id = null ) {

		if ($id == 'empty'){
			$conditions = array(

				'Lab.labtype'=>1,
				

			);	
		}else{
			$conditions = array(

				'Lab.labtype'=>1,
				'Lab.type'=>$id

			);	
		}
		

		$ebooks = $this->paginate($conditions);
		
		
		$this->set('ebooks',$ebooks);
		$listCategory = $this->Lab->Category->find('list',array('fields'=>'Category.name','conditions'=>array('Category.type'=>1)));
		$this->set(compact('listCategory'));

		if($this->RequestHandler->isAjax()){
		
			$this->render('find_category','ajax');
		}else{
			$this->render('index');
		}

		$this->set('keyword','');
	}


	function find_category2($id = null ) {

		if ($id == 'empty'){
			$conditions = array(

				'Lab.labtype'=>1,
				

			);	
		}else{
			$conditions = array(

				'Lab.labtype'=>1,
				'Lab.type'=>$id

			);	
		}
		

		$ebooks = $this->paginate($conditions);
		

		$this->set('ebooks',$ebooks);

		if($this->RequestHandler->isAjax()){
		
			$this->render('find_category','ajax');
		}else{
			$this->render('find_category2');
		}
	}

	function find_category_video($id = null ) {

		if ($id == 'empty'){
			$conditions = array(

				'Lab.labtype'=>2,
				

			);	
		}else{
			$conditions = array(

				'Lab.labtype'=>2,
				'Lab.type'=>$id

			);	
		}
		

		$videos = $this->Lab->find('all',array('conditions'=>$conditions,'order'=>'Lab.created DESC'));
		
		
		$this->set('videos',$videos);
		

		if($this->RequestHandler->isAjax()){
		
			$this->render('find_category_video','ajax');
		}else{
			//$this->render('ebooks');
		}

		$this->set('keyword','');
	}

	function view_thumb($id=null){

		if (!$id) {
			$this->Session->setFlash(__('Invalid Lab.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('lab', $this->Lab->read(null, $id));
		$this->render('view_thumb','ajax');
	}

	function view_thumb_video($id=null){

		if (!$id) {
			$this->Session->setFlash(__('Invalid Video.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('lab', $this->Lab->read(null, $id));
		$this->render('view_thumb_video','ajax');
	}

	function lifeskill() {
		$this->Lab->recursive = 2;
		$conditions = array('Lab.type'=>4);
		$eboks = $this->Lab->find('all',array('conditions'=>$conditions));
		$this->set(compact('eboks'));
	}

	function carachter() {
		$this->Lab->recursive = 2;
		$conditions = array('Lab.type'=>5);
		$eboks = $this->Lab->find('all',array('conditions'=>$conditions));
		$this->set(compact('eboks'));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Lab.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('lab', $this->Lab->read(null, $id));
	}

	function view_video($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Lab.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('lab', $this->Lab->read(null, $id));
	}
	
	function find() {
		$this->Lab->recursive = 0;
	    $filter = $this->Filter->process($this);
	    $this->set('labs', $this->paginate(null, $filter));
	    $listMataPelajaran = $this->Lab->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));
	    //$fieldsKelas = 'PasRombel.KETERANGAN,PasRombel.ID_RUANG_KELAS';
	    $listGuru = $this->Lab->User->find('list',array('fields'=>'User.nama','conditions'=>array('User.group_id'=>array(1,2))));
	    
	    /*$listTahunAjaran = $this->Lab->PasTahunAjaran->find('list',array('fields'=>'PasTahunAjaran.tahun','order'=>'PasTahunAjaran.id DESC'));*/
	    //$this->set(compact('assets', $this->paginate()));
	    $this->set(compact('listMataPelajaran','listGuru','listTahunAjaran'));
	    $this->set('menuTabChild', 'LabFind');
	}


	
	function _uploadpdf($output_dir){
		$status = array('status'=>FALSE,'message'=>'File tidak ditemukan','filename'=>'');
		if($this->data['Ebook']['ebookfiles'])
		{
		    //$output_dir = "uploads/";
		    //ini_set("display_errors",1);
		    if(isset($this->data['Ebook']['ebookfiles']))
		    {
		        //$RandomNum   = time();
		        
		        $ImageName      = str_replace(' ','-',strtolower($this->data['Ebook']['ebookfiles']['name']));
		        $ImageType      = $this->data['Ebook']['ebookfiles']['type']; //"image/png", image/jpeg etc.
		     
		        $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
		        $ImageExt       = str_replace('.','',$ImageExt);
		        if($ImageExt != "pdf")
		        {
		        	$status = array('status'=>FALSE,'message'=>'File yang diizinkan untuk diupload adalah pdf','filename'=>'');
		            
		        }
		        else
		        {
		            $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
		            $NewImageName = $ImageName.'.'.$ImageExt;
		         
		            move_uploaded_file($this->data['Ebook']['ebookfiles']["tmp_name"],$output_dir. $NewImageName);
		        
		            /*$location   = "/usr/local/convert";
		            $name       = $output_dir. $NewImageName;
		            $num = count_pages($name);
		            $RandomNum   = time();
		            $nameto     = $output_dir.$RandomNum.".jpg";
		            $convert    = $location . " " . $name . " ".$nameto;
		            exec($convert);
		            for($i = 0; $i<$num;$i++)
		            {
		                $display .= "<img src='$output_dir$RandomNum-$i.jpg' title='Page-$i' /><br>"; 
		            }*/
		            $status = array('status'=>TRUE,'message'=>'','filename'=>$NewImageName);
		            
		        }
		    }
		}

		return $status;
	}


	function _createcoverpdf($pdf_file,$save_to){
		

		$location   = "convert";
		$convert    = $location . " -density 200 -scale x800 " . $pdf_file . "[0] -flatten ".$save_to;
        
        exec($convert);

		return true;
	}

	function __count_pages($file) {
      //where $file is the full path to your PDF document.
        if(file_exists($file)) {
            
            if($handle = @fopen($file, "rb")) {
                $count = 0;
                $i=0;
                while (!feof($handle)) {
                    if($i > 0) {
                        $contents .= fread($handle,8152);
                    }
                    else {
                        $contents = fread($handle, 1000);
                        
                        if(preg_match("/\/N\s+([0-9]+)/", $contents, $found)) {
                            return $found[1];
                        }
                    }
                    $i++;
                }
                fclose($handle);
 
                //get all the trees with 'pages' and 'count'. the biggest number
                //is the total number of pages, if we couldn't find the /N switch above.                
                if(preg_match_all("/\/Type\s*\/Pages\s*.*\s*\/Count\s+([0-9]+)/", $contents, $capture, PREG_SET_ORDER)) {
                    foreach($capture as $c) {
                        if($c[1] > $count)
                            $count = $c[1];
                    }
                    return $count;            
                }
            }
        }
        return 0;
	}



	function _convertallpdf($pdf_file,$save_to){


        $num_pages = $this->__count_pages($pdf_file);
		

        $location = "convert";


        
	    // Convert PDF pages to images
	    for($i = 0;$i < $num_pages; $i++) {
        	$convert    = "convert -density 200 -scale x800 " . $pdf_file . "[".$i."]  -flatten ".$save_to.DS.'page'.'-'.$i.'.jpg';
	    	exec($convert);
	    }



	    return $num_pages;
	}


	function _createXMLFile($xmlfile,$numberimage)
	{
		$stringDataBody='';


		
		$fh = fopen($xmlfile, 'w') or die("can't open file");
		
		$stringDataTop='<PageflipDataSet>
<Settings
	
	CopyrightMessage="88C1F4F548398C7320B4340428387FE9B621FB0EBF5AC21C87508795A8D9201D758724F7602873CA35BA52168E03E0B5ED8A5A9E9542D21E065197959701CC7CB0BFE40B9BA5AE9AC694E7836A565F56034F25012D1C6FE9E2DE0AD82BC7AE9A939A478369456151B32D26124E1C6F0BE2DED7DE8BC7AD89A59607616A568250A34F26121B12CF0BE1CDE9DB5BA5AE9AC694E7836A565F56034F26112D1C6FE9E2DE0AD82BC7AE9A939A47836A556151B32D26124E1C6F0BE2DED7DE8BC7AE99A59607616A568250A34F26121B12CF0BE2DDE9DB5D817265B70EFAFE3F53C92D8FBF7BD48C596D6A35811EA34D48FEB704DF2B007FD4D19C7FCB263F341A962A5F8B67B675F72B1C0F51A89498D9FD63C37221C20A0FAF3EED8E0ACFABA5B609C78C77B665059443E372FB824/3646"
	
	CopyrightMessageDisplay = "false"
	ContextMenu="true"
	
	PageWidth="300"
	PageHeight="400"
	AutoSize="true"
	
	ViewAngle="0"
	
	StartPage="1"
	
	AlwaysOpened="false"
	ZeroPage="false"
	ZeroPageAlwaysVisible="false"
	
	CenterSinglePage="true"
	
	RightToLeft="false"
	VerticalMode="false"
	
	OffsetX="0"
	OffsetY="0"
	
	HardCover="true"
	HardPage="false"
	EmbossedPages="true"
	EmbossAlpha="100"
	ShadowsEnabled="true"
	ShadowsAlpha="100"
	
	LargeCover="true"
	LargeCoverVerticalOversize="24"
	LargeCoverHorizontalOversize="12"
	
	DropShadow="true"
	DropShadowSize="20"
	DropShadowOffset="10"
	DropShadowAlpha="30"
	
	PageLoaderBackColor="0xffffff"
	
	PageScale="true"
	MinScale="50"
	MaxScale="150"
	
	MinStageWidth="700"
	MinStageHeight="620"
	BaseStageWidth="820"
	BaseStageHeight="640"
	
	TransparentBackground="false"
	BackgroundColor="0xcccccc"
	BackgroundImageFile=""

	ZoomOnPageClick="true"
	DragZoom="true"
	
	FPSControlEnabled="true"
	MaxFPS="60"
	ShowFPS="false"
	
	FontLibraryFile="pageFlipFonts.swf"
	xDefaultFont=""
	
	ControlBar="true"
	KeyboardShortcutsEnabled="true"
	ControlBarScale="100"
	ControlBarFullScreenScale="150"
	
	xControlBarBackgroundColor="0x000000"
	xControlBarBackgroundAlpha="100"
	
	CustomControlBarIcons="false"
	xCustomControlBarFile="pageFlipControls.swf"
	
	CustomControlBarLayout="false"
	
	EnableButtonColoring="true"
	ButtonColor="0xffffff"
	ButtonAlpha="100"
	ButtonOverColor="0xF0B400"
	ButtonOverAlpha="100"
	ButtonPressColor="0x666666"
	ButtonPressAlpha="50"
	ButtonDisabledColor="0x666666"
	ButtonDisabledAlpha="15"
	
	ButtonToolTip="true"
	
	ControlBarLoaderEnabled="true"
	ButtonFirstLastEnabled="true"			  	
	ButtonLeftRightEnabled="true"			  	
	ButtonZoomEnabled="true"			  	
	ButtonPrintEnabled="true"			  	
	ButtonAutoFlipEnabled="true"			  	
	ButtonPDFLinkEnabled="true"
	PDFlink=""
	ButtonLanguageEnabled="true"
	ButtonThumbnailEnabled="true"			  	
	ButtonMuteEnabled="true"			  	
	ButtonInfoEnabled="true"			  	
	ButtonIndexEnabled="true"			  	
	ButtonFullScreenEnabled="true"			  	
	ButtonCloseEnabled="true"
	PageDisplayEnabled="true"
	PageNameDisplay="false"
	ControlBarPagerWidth="150"
	
	ButtonCustom0Enabled="true"
	ButtonCustom1Enabled="true"
	ButtonCustom2Enabled="false"
	ButtonCustom3Enabled="false"
	ButtonCustom4Enabled="false"
	ButtonCustom5Enabled="false"
	ButtonCustom6Enabled="false"
	ButtonCustom7Enabled="false"
		
	ContentPreviewEnabled="true"
	ThumbnailsEnabled="false"
	ThumbnailModeStart="false"
	ThumbnailWidth="90"
	ThumbnailHeight="120"
	ThumbnailDropShadow="true"
	ThumbnailDropShadowSize="8"
	ThumbnailDropShadowOffset="2"
	ThumbnailDropShadowAlpha="30"
	
	StartAutoFlip="false"
	AutoFlipDefaultInterval="2000"
	AutoFlipLooping="true"
		  
	TransparencyEnabled="true"
	TransparencyActivePage="false"
	TransparencyAutoLevel="true"
	TransparencyMaxLevel="16"
	
	DragArea="70"
	AutoFlipArea="70"
	MousePursuitSpeed="8"
	ZoomFollowSpeed="10"
	FlippingDuration="800"
	
	PageCache="5"
	UnloadPages="false"
	
	MouseControl="true"
	DefaultTransition="1"
	DefaultTransitionDuration="250"
	FlippingSpreadActivity="true"
		
	LayoutOrder="PREVIEW-CONTENT-CONTROLBAR"
	ControlBarHeight="50"
	ControlBarOffset="10"
	ContentPreviewHeight="90"
	ContentPreviewWidth="130"
	
	PopupBackgroundColor="0xFFFFFF"
	PopupBackgroundOpacity="80"
	PopupBorderThickness="0"
	PopupBorderColor="0x000000"
	PopupRounded="true"
	PopupRoundedRadius="8"		
	PopupMargin="8"
	PopupTitleFont="DINBlk_PFL Normal"			
	xPopupTextFont=""
	PopupTitleColor="0x333333"
	PopupTextColor="0x333333"
	PopupSpace="8"
	PopupMouseFollowSpeed="5"
	
	InfoWindowWidth="250"
	FloatingWindowColumnWidth="200"
	FloatingWindowMargin="10"
	FloatingWindowHorizontalSpace="16"
	FloatingWindowVerticalSpace="16"
	FloatingWindowSeparator="true"
	FloatingWindowSeparatorColor="0x555555"
	FloatingWindowSeparatorAlpha="100"
	FloatingWindowSeparatorHeight="1"
	FloatingWindowSeparatorOffset="8"
	FloatingWindowBackgroundColor="0x000000"
	FloatingWindowBackgroundAlpha="80"
	FloatingWindowBorderThickness="0"
	FloatingWindowBorderColor="0xFFFFFF"
	FloatingWindowBorderAlpha="100"
	FloatingWindowCornerRadius="16"		
	FloatingWindowColor="0xFFFFFF"
	FloatingWindowSize="10"
	FloatingWindowAlign="CENTER"
	
	TOCTitleFont="DINBlk_PFL Normal"			
	TOCTitleColor="0xFFFFFF"
	TOCTitleSize="20"
	TOCTitleAlign="CENTER"			
	TOCLinkColor="0xFFFFFF"
	TOCLinkSize="12"
	TOCLinkAlign="CENTER"			
	TOCLinkPageNumberColor="0xFFFFFF"
	TOCLinkPageNumberSize="20"
	TOCLinkPageNumberAlign="CENTER"
	TOCPageNumberFirst="false"
	TOCPageNumberWidth="32"		
	TOCDescriptionColor="0xFFFFFF"
	TOCDescriptionSize="12"
	TOCDescriptionAlign="CENTER"
	
	SoundEnabled="true"
	StartMute="false"
	
	
	
	>

	<Sounds	EffectVolume="50" >
		<PullOpen		SoundFile="sounds/pullflip2start.mp3" />
		<PullOpen		SoundFile="sounds/pullflip3start.mp3" />
		<PullClose		SoundFile="sounds/pullflip0end.mp3" />
		<PullClose		SoundFile="sounds/pullflip1end.mp3" />
		<PullClose		SoundFile="sounds/pullflip2end.mp3" />
		<PullClose		SoundFile="sounds/pullflip3end.mp3" />
		<PushOpen		SoundFile="sounds/pushflip0start.mp3" />
		<PushOpen		SoundFile="sounds/pushflip1start.mp3" />
		<PushOpen		SoundFile="sounds/pushflip2start.mp3" />
		<PushClose		SoundFile="sounds/pushflip0end.mp3" />
		<PushClose		SoundFile="sounds/pushflip1end.mp3" />
		<PushClose		SoundFile="sounds/pushflip2end.mp3" />
	</Sounds>
</Settings>

<PageOrder>
';
		
		$stringDataBody .= '<PageData	PageFile="pages/cover.jpg"
				ZoomFiles="pages/cover.jpg[200%]pages/cover.jpg[300%]pages/cover.jpg[500%]"
				MainBGImage="backgrounds/office.jpg"
				PrintFile="pages/cover.jpg"
				/>
';
		
		for ($i=1;$i<$numberimage;$i++){

			$stringDataBody.= '<PageData	PageFile="pages/page-'.$i.'.jpg"
				ZoomFiles="pages/page-'.$i.'.jpg[200%]pages/page-'.$i.'.jpg[300%]pages/page-'.$i.'.jpg[500%]"
				MainBGImage="backgrounds/office.jpg"
				PrintFile="pages/page-'.$i.'.jpg"
				/>
';
		}

		$stringDataBottom='</PageOrder>
<TableOfContents>
	
</TableOfContents>
<Info>
	<Title Name="BUKU ELEKTRONIK" Align="center" Separator="false" />
	<Description Text="" Align="center" Separator="false" />
	<Description Text="" Align="center" />
	<Description Text="" Color="0x777777" Align="center" />
</Info>
<Language>
	<Lang Name="English"
		Loading="LOADING"
		PagerPage="Page #"
		PagerThumbnailPopup="Page #"
		PagerThumbnails="Thumbnails"
		PagerThumbnailPages="Thumbs #"
		PagerZoomPage="Zoom Page #"
		
		PrintLeftTooltip="Print left side page"
		PrintRightTooltip="Print right side page"
		ZoomLeftTooltip="Zoom on left side page"
		ZoomRightTooltip="Zoom on right side page"
		ZoomInTooltip="Zoom In"
		ZoomOutTooltip="Zoom Out"
		FirstPageTooltip="First page"
		PreviousPageTooltip="Previous page"
		NextPageTooltip="Next page"
		LastPageTooltip="Last page"
		
		AutoFlipTooltip="Autoflip On/Off (A)"
		MuteTooltip="Mute (M)"
		InfoTooltip="About (Shift-I)"
		IndexTooltip="Table Of Contents (I)"
		LanguageTooltip="Magyar"
		ThumbnailTooltip="Thumbnail View (T)"
		FullscreenTooltip="Fullscreen On/Off (Shift-F)"
		CloseTooltip="Quit PageFlip (Shift-Q)"
		PDFDownloadTooltip="Download PDF version"
		
		SearchTooltip="Find"
		HelpTooltip="Help"
		BookmarksTooltip="Bookmarks"
		
		Custom0Tooltip="Custom Button 0"
		Custom1Tooltip="Custom Button 1"
		Custom2Tooltip="Custom Button 2"
		Custom3Tooltip="Custom Button 3"
		Custom4Tooltip="Custom Button 4"
		Custom5Tooltip="Custom Button 5"
		Custom6Tooltip="Custom Button 6"
		Custom7Tooltip="Custom Button 7"
	/>
	
</Language>
</PageflipDataSet>';
		
		fwrite($fh, $stringDataTop.$stringDataBody.$stringDataBottom);//Write file name to xml file

		fclose($fh);
	}

	function _upload_cover() {
	// init
	$image_ok = TRUE;
	
		// if a file has been added
		if($this->data['File']['image1']['error'] != 4) {
			// try to upload the file
			$result = $this->upload_files('img', $this->data['File']);

			// if there are errors
			if(array_key_exists('errors', $result)) {
				// set image ok to false
				$image_ok = FALSE;
				// set the error for the view
				$this->set('errors', $result['errors']);
			} else {
				// save the url
				$this->data['Lab']['cover'] = $result['urls'][0];
			}
		}

	return $image_ok;
	}

	function add($type = null) {
		if (!empty($this->data)) {
			
			$this->data['Lab']['author'] = $this->Auth->user('username');
			$typeSubmitted = $this->data['Lab']['type'];

			$labtype = $this->data['Lab']['labtype'];
			$ebooktype = $this->data['Lab']['isflip'];

			if($labtype == 2){
				// check for image
				$image_ok = $this->_upload_cover();
			}elseif ($labtype == 1 && $ebooktype == 0) {
				$image_ok = $this->_upload_cover();
			}

			$this->data['Lab']['tahun'] = $this->data['Lab']['tahunBerdiri']['year']; 

			$this->Lab->create();
			
			if ($this->Lab->save($this->data)) {
				
				$lastID  = $this->Lab->getInsertID();
				if($labtype == 1 && $ebooktype == 1){
					
					

					//copy directory
					$newdirectory = WWW_ROOT.'files'.DS.'ebooks'.DS.$lastID;
					mkdir($newdirectory);

					$this->_cpyrec(WWW_ROOT.'files'.DS.'ebooks'.DS.'default',$newdirectory);

					$pdf_ok = $this->_uploadpdf($newdirectory.DS.'pdf'.DS);

					$filenamepdf = $newdirectory.DS.'pdf'.DS.$pdf_ok['filename'];
					$fileoutputjpgconvert =  $newdirectory.DS.'pageflipdata'.DS.'pages'.DS.'cover.jpg';
					$this->_createcoverpdf($filenamepdf,$fileoutputjpgconvert);

					$coverpath = 'files/ebooks/'.$lastID.'/pageflipdata/pages/cover.jpg';

					$pdfpath = 'files/ebooks/'.$lastID.'/pdf/'.$pdf_ok['filename'];

					
					//save cover path file

					//convert pdf
					$folderoutputconvertall = $newdirectory.DS.'pageflipdata'.DS.'pages';
					$convertingall = $this->_convertallpdf($filenamepdf,$folderoutputconvertall);

					//create xml file
					$xmlfilelocation = $newdirectory.DS.'pageflipdata'.DS.'pageflipdata.xml';
					$this->_createXMLFile($xmlfilelocation,$convertingall);


					$record = $this->Lab->read(null, $lastID);
					$this->Lab->saveField('cover', $coverpath);
					$this->Lab->saveField('pdffile', $pdfpath);
					$this->Lab->saveField('jumlahhalaman', $convertingall);

				
				}elseif ($labtype == 1 && $ebooktype == 0){

					
					$uploadnoflip = WWW_ROOT.'files'.DS.'ebooks'.DS.'noflip'.DS.'pdf'.DS;
					$pdf_ok = $this->_uploadpdf($uploadnoflip);

					$image_ok = $this->_upload_cover();
					

					$pdfpath = 'files/ebooks/noflip/pdf/'.$pdf_ok['filename'];
					
					$record = $this->Lab->read(null, $lastID);
					
					$this->Lab->saveField('pdffile', $pdfpath);
				}
				


				
				if($labtype == 1){

					$this->Session->setFlash('Lab berhasil disimpan','flash_success');
					$this->redirect(array('action'=>'index'));

				}else{

					$this->Session->setFlash('Video berhasil disimpan','flash_success');
					$this->redirect(array('action'=>'video'));

					
				}
			} else {
				$this->Session->setFlash('Data tidak berhasil disimpan, silahkan coba lagi','flash_erorr');
				$this->redirect(array('action'=>'index'));
			}
		}
		
		$listMataPelajaran = $this->Lab->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));
		$typeLab = $type;
		//$fieldsKelas = 'PasRombel.KETERANGAN,PasRombel.ID_RUANG_KELAS';
		/*$listKelas = $this->Lab->PasRombel->find('list',array('fields'=>'PasRombel.nama','conditions'=>array('tahun_ajaran_id'=>$this->Session->read('tahunAjaran'))));*/
		$this->set(compact('listMataPelajaran','typeLab'));
	}

	function edit($tipe=null,$id = null) {
		//type 1 for ebook 2 for video
		if (!$tipe && !$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Lab', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {

			$this->data['Lab']['author'] = $this->Auth->user('username');
			$typeSubmitted = $this->data['Lab']['type'];
			$labtype = $this->data['Lab']['labtype'];
			// check for image
			
			$image_ok = $this->_upload_cover();
			

			$this->data['Lab']['tahun'] = $this->data['Lab']['tahunBerdiri']['year']; 

			
			if ($this->Lab->save($this->data)) {
				if($labtype == 2){
					$this->Session->setFlash('Video berhasil disimpan','flash_success');
					$this->redirect(array('action'=>'video'));
				}else{
					$this->Session->setFlash('Lab berhasil disimpan','flash_success');
					$this->redirect(array('action'=>'index'));
				}
			} else {
				$this->Session->setFlash('Data tidak berhasil disimpan, silahkan coba lagi','flash_erorr');
				$this->redirect(array('action'=>'index'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Lab->read(null, $id);
		}

		$this->set('lab', $this->Lab->read(null, $id));
		$listMataPelajaran = $this->Lab->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));

		$conditions1 = array('Category.type'=>1);
		$listTypeEbook = $this->Lab->Category->find('list',array('conditions'=>$conditions1,'fields'=>'Category.name'));

		$conditions2 = array('Category.type'=>2);
		$listTypeVideo = $this->Lab->Category->find('list',array('conditions'=>$conditions2,'fields'=>'Category.name'));

		//$fieldsKelas = 'PasRombel.KETERANGAN,PasRombel.ID_RUANG_KELAS';
		/*$listKelas = $this->Lab->PasRombel->find('list',array('fields'=>'PasRombel.nama','conditions'=>array('tahun_ajaran_id'=>$this->Session->read('tahunAjaran'))));*/
		$this->set(compact('listMataPelajaran','tipe'));

		$this->set(compact('listTypeEbook','listTypeVideo'));
	}

	function delete($id = null,$tipe=null) {
		if (!$id) {
			
			

			$this->Session->setFlash('Tidak Berhasil Menghapus','flash_erorr');
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Lab->del($id)) {

			
			
			if($tipe == 2){
				$this->Session->setFlash('Video Berhasil Dihapus','flash_success');
				$this->redirect(array('action'=>'video'));
			}else{

				$directory = WWW_ROOT.'files'.DS.'ebooks'.DS.$id;
				$this->_delete_recursive($directory);
				
				$this->Session->setFlash('Ebook Berhasil Dihapus','flash_success');
				$this->redirect(array('action'=>'index'));
			}
		}
	}


	function administrator_index() {
		$this->Lab->recursive = 0;
		$this->set('labs', $this->paginate());
	}

	function administrator_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Lab.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('lab', $this->Lab->read(null, $id));
	}

	function administrator_add() {
		if (!empty($this->data)) {
			$this->Lab->create();
			if ($this->Lab->save($this->data)) {
				$this->Session->setFlash(__('The Lab has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Lab could not be saved. Please, try again.', true));
			}
		}
	}

	function administrator_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Lab', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Lab->save($this->data)) {
				$this->Session->setFlash(__('The Lab has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Lab could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Lab->read(null, $id);
		}
	}

	function administrator_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Lab', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Lab->del($id)) {
			$this->Session->setFlash(__('Lab deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

	function download($id) {
		$this->set('ebook', $this->Lab->read(null, $id));
	}

	function generatexml($number = null){
		
		$this->set(compact('number'));
		$this->layout = 'default_blank';
		
	}

	function index(){

		

		$conditions = array(

			'Lab.labtype'=>1,

		);

		$ebooks = $this->paginate($conditions);
		
		$listCategory = $this->Lab->Category->find('list',array('fields'=>'Category.name','conditions'=>array('Category.type'=>1)));
		$this->set(compact('listCategory'));

		$this->set('ebooks',$ebooks);
	}


	function search(){
		$keyword=$this->params['url']['searchquery']; //get keyword from querystring//
		//used simpme or condition with singe value checking
		//replace ModelName with actual name of your Appmodel

		$conditions = array(
			'OR'=>array("Lab.title LIKE '%$keyword%'","Lab.penerbit LIKE '%$keyword%'", "Lab.pengarang LIKE '%$keyword%'","Lab.details LIKE '%$keyword%'"),
			'Lab.labtype'=>1,
		);
		$this->set('keyword',$keyword);
		$ebooks = $this->paginate($conditions);
		$listCategory = $this->Lab->Category->find('list',array('fields'=>'Category.name','conditions'=>array('Category.type'=>1)));
		$this->set(compact('listCategory'));
		//$ebooks = $this->Lab->find('all',array('conditions'=>$conditions));
		$this->set(compact('ebooks'));
		

	}

	function search_video(){
		$keyword=$this->params['url']['searchquery']; //get keyword from querystring//
		//used simpme or condition with singe value checking
		//replace ModelName with actual name of your Appmodel

		$conditions = array(
			'OR'=>array("Lab.title LIKE '%$keyword%'","Lab.penerbit LIKE '%$keyword%'", "Lab.pengarang LIKE '%$keyword%'","Lab.details LIKE '%$keyword%'"),
			'Lab.labtype'=>2,
		);
		$this->set('keyword',$keyword);

		$videos = $this->Lab->find('all',array(
			'conditions'=>$conditions
			)
		);
		$this->set('videos',$videos);
		
		$listCategory = $this->Lab->Category->find('list',array('fields'=>'Category.name','conditions'=>array('Category.type'=>2)));
		$this->set(compact('listCategory'));
		//$ebooks = $this->Lab->find('all',array('conditions'=>$conditions));
		
		

	}

	function editxml(){

		//first find ebook
		$ebooks = $this->Lab->find('all',array('conditions'=>array('Lab.labtype'=>1)));

		foreach ($ebooks as $item) {
			$file = WWW_ROOT.DS.'files'.DS.'ebooks'.DS.$item['Lab']['id'].DS.'pageflipdata'.DS.'pageflipdata.xml';
			if (file_exists($file)) {
    			$oldcopyright1 = 'CopyrightMessage="99C1F4F548398C7320B4340428387FE9B7DB79FE90F2D216176A510E9212E429A55087950E0FAC8530C9740DBBC7739735BA5CBE9ED2D3261DCA5EDEA0E5611C4351CACB684EC46CB720FA0F3E7673A8EE9A6ECE9212D10619824A95EC00BC7438A07B169FD9EC1D2050BACC784A8C80E0C1F7833EA9738637D24A940F2D6C7BA0C534F4384A81E72D404C029D1AEB2BF8AD663F8929D430C72944D40826F2D512A0E60B2C93962674DC95D82BE9AE9A5F74094D88141D74C74B4814F72E7E2EB6EDFB533F977397F2CDFACE983CBC8EC8A0FB313E767298B7FD79FE9FE2D6561CB24ACD883BAC8312621EA54B22B3071D5F3C0F6D929D9EE4D064FBA0287375B6101513093193E50091E5FD5EA2EB2BB4B6EA8099177061A35044D309FC8F1CDA6FA3EE7A73DA2DA1AE7A5D84D4841C4351B995FDD9FD58235024FEA0EAC21C32505494A9D8431C545175CD883BAC8312621EA54B22B3071D5F3C0F6D929D9EE4D064FBA0287375B6101510D92F83E50090C4E2BE91DE6CA2C7E78396E99061A35044D309FC8F1CDA6FA3EE7A73DA2DA1AE7A5D84D4841C98DF54F8783FEC8200C1F8B53E767375B6CBFB0E8702E42E0650769498D8ED1C87509895B901CC7FE0C756A652E74D75D69150848021A3E50090C4E2BE91DE6CA2C7E78396E99061A35044D3092D6C7BA0C534F4384A81E7E1CDC7DB5BA5AE99839B57A565061B47237226110B04FFE9E2DBA3CB/5835"';
    			$oldcopyright2 = 'CopyrightMessage="CCC1F4F548398C7320B4340428387FE9B7DB79FE90F2D216176A510E9212E429A55087950E0FAC8530C9740DBBC7739735BA5CBE9ED2D3261DCA5EDEA0E5611C4351CACB6BFABD7A5F8947B67606714504F923E2D70FAF3EF1BE93CD8BFABA4AB589483D67262C43E37235F2D701CF3EFE8EF9CD8C71AB6A718727B679361B45037232C23D01C0B5EFAEC6CB6BFABD7A5F8947B67606714504F923E21B0FAF3EF1BE93CD8BFABA4AB589483D67266043E37235F2D701CF3EFE8EF9CD8C71AB6AB58727B679361B45037232C23D01C0B5EFAE0ACB6BFABD7A5F8947B67606714504F923E15003EFE9E2DE0AD82BC7AE9A939A478372C56148337221C15013D0B5EFAD1CDC6CD7AB6A5F8947B672C54F1C87516415B02872EDB6EDFB0E3F8673DB0B4A598EA312D216286FC50B2E2AE07BF8C909D68B441D6707B21EA37034C15E0091E5F2AEC4D08C80740B908A385D7B36A256E0D935D11A14CFF8FB3D1ADF7BF8BE6BA152E97E8C375C65C37035D1C5B6A9FB423E3273970D6D1CCB6CA4A949D88728A469454F50A3612611500FAF3EED8D1C9A08F/4966"';
    			$oldcopyright3 = 'CopyrightMessage="99C1F4F548398C7320B4340428387FE9B7DB79FE90F2D216176A510E9212E429A55087950E0FAC8530C9740DBBC7739735BA5CBE9ED2D3261DCA5EDEA0E5611C4351CACB683FEC8DB8C279FE9542D546275A6FDEA4254F4834603E812D04F0F9F0ADE9C0BBC7AE99838C78A472C56148343D34E12D04FF0BFA4DC7C0BCE8B609A58C787178256148334F3F910B04F02CFA4DE9C0BCB5BC69A58C778374E54F4834603E812D04F0F9F0ADE9C0BBC7B939838C78A472C56148343D34E12D04FF0BFE8DC7C0BCE8B609A58C787178256148334F33D10B04F02CFA4DE9C0BCB5BC69A58C778378254F4834603E812D04F0F9F0ADE9C0BBC7BD79838C78A472C56148343D34E12D04FF0BE2DD0BCB6BFABD7A5F8947B67606714504F923E1500FAF3EF1BE93CD8BFABA4AB589483D67261B43E37235F2D701CF3EFE8EF9CD8C71AB6A608727B679361B45037232C23D01C0B5EFAEB5CB6BFABD7A5F8947B67606714504F923E20A0FAF3EF1BE93CD8BFABA4AB589483D67265F43E37235F2D701CF3EFE8EF9CD8C71AB6AA48727B679361B45037232C23D01C0B5EFAEF9CB6BFABD7A5F8947B67606714504F923E24E0FAF3EF1BE93CD8BFABA4AB589483D67259447232DFAFE3EA9727635BA6ECEAEC5611C54515394BA2D6C7BA0C534F4384A81E72D404C029D1AEB2BF8AD663F8929D430C0B0FB909B397E30C59256E37022B30714C0E6F2AEA2962DB2AC5A7F9D58C47802FB57F33C36E11A1D5F3CF19D1AD08DC3740B90AE597E87E59257F3E7D8CB1D64505495B92F8F3EED8EC6CB6BFAA94AC68B676172C58348337221C1500FAF3ECAD30/7407"';
    			$oldcopyright4 = 'CopyrightMessage="EEC1F4F548398C7320B4340428387FE9B7DB79FE90F2D216176A510E9212E429A55087950E0FAC8530C9740DBBC7739735BA5CBE9ED2D3261DCA5EDEA0E5611C4351CACB6BFABD7A5F8947B676067145037223E1500FAF3EF1BE93CD8BFABA4AB58947B667261B43E37235F2D701CF3EFE8EF9CD8BFAAB6A608727B679361B45037232C23D01CF3EEFAEB5CB6BFABD7A5F8947B676067145037223E20A0FAF3EF1BE93CD8BFABA4AB58947B667265F43E37235F2D701CF3EFE8EF9CD8BFAAB6AA48727B679361B45037232C23D01CF3EEFAEF9CB6BFABD7A5F8947B676067145037223E24E0FAF3EF1BE93CD8BFABA4AB58947B667259447232D26124E1C6F0BE2DED7DE8BC7B609A58C77616A568250A34F26121B12CF0BFA4DE9D82BA5AE9AC694E7836A565F56034F3E812D1D7FE9E2DE0AD82BC7AE9A939A478372C56152C32D26124E1C6F0BE2DED7DE8BC7B609A59717616A568250A34F26121B12CF0BFA4DE9DC6BA5AE9AC694E7836A565F56034F3E812D11BFE9E2DE0AD82BC7AE9A939A478372C56156032D26124E1C6F0BE2DED7DE8BC7B609A59B57616A568250A34F26121B12CF0BFA4DE9C0BBE9A9461DCA6B96A057DC7320B32405384DBC820509FAED3F867276B7DB41A50737F35C04D1E5E2BD09962BC5C0763F3E32EC3CE6CA163F8C55507800B0FCE43F757375B6FEFBFD3E54962DB2D174F768497C8DB0B7663F9B3AC21D1FDF54F658387C7430B0F404284EC1C5B6A9FB423E3273970D6D1CCB6CA4A949D88728A469454F50A3612611500FAF3EED8D1CA7CFB/6968"';
    			$oldcopyright5 = 'CopyrightMessage="EEC1F4F548398C7320B4340428387FE9B7DB79FE90F2D216176A510E9212E429A55087950E0FAC8530C9740DBBC7739735BA5CBE9ED2D3261DCA5EDEA0E5611C4351CACB6BFABD7A5F8947B676067145037223E1500FAF3EF1BE93CD8BFABA4AB58947B667261B43E37235F2D701CF3EFE8EF9CD8BFAAB6A608727B679361B45037232C23D01CF3EEFAEB5CB6BFABD7A5F8947B676067145037223E20A0FAF3EF1BE93CD8BFABA4AB58947B667265F43E37235F2D701CF3EFE8EF9CD8BFAAB6AA48727B679361B45037232C23D01CF3EEFAEF9CB6BFABD7A5F8947B676067145037223E24E0FAF3EF1BE93CD8BFABA4AB58947B667259447232D26124E1C6F0BE2DED7DE8BC7AE99A58C77B66505945714F923E15010A01BEFAD1CCD8BFAB609838C78A472C56148343D34E12D1C6F0BE2DDC7C0BCE8B609A58C787178256150A34F3E810B04F02CFA4DE9C0BCB5BC69A594E78373D54F4834603E812D04F0F9F0ADE9D82BC7B829838C78A472C56148343D34E12D1C6F0BFD7DC7C0BCE8B609A58C787178256150A34F32C10B04F02CFA4DE9C0BCB5BC69A594E78377154F4834603E812D04F0F9F0ADE9D82BC7BC69838C78A472C56148343D34E12D1C6F0BF1BDC7C0BCE8B609A58C787178256150A34F35F10B04F02CFA4DE9C0BCB5BC69A594E7836A558343E37235F2D701CF3EFE8EF9CD8C71AB69D88C77616A568250A34F26121B12CF0BFA4DE9C0BC71A9461DCA6B96A057DC7320B32405384DBC820509FAED3F867276B7DB41A50737F35C04D1E5E2BD09962BC5C0763F8C58916A355E63A47F31925D1D5C950E5DF8DA2C08BF7AB352E8A266F69144D40826F24C04D03B0F6A73EC3D18CA1BA18C58A261A0BFE40978387C8EC52B26110B1F9FE9E2DDC7DF9BE9A94A5F8B67B66A554F48332D261FE9BF/8433"';
    			$oldcopyright6 = 'CopyrightMessage="99C1F4F548398C7320B4340428387FE9B7DB79FE90F2D216176A510E9212E429A55087950E0FAC8530C9740DBBC7739735BA5CBE9ED2D3261DCA5EDEA0E5611C4351CACB683FEC8DB8C279FE9542D546275A6FDEA4254F4834603E812D04F0F9F0ADE9C0BBC7AE99838C78A472C56148343D34E12D04FF0BFA4DC7C0BCE8B609A58C787178256148334F3F910B04F02CFA4DE9C0BCB5BC69A58C778374E54F4834603E812D04F0F9F0ADE9C0BBC7B939838C78A472C56148343D34E12D04FF0BFE8DC7C0BCE8B609A58C787178256148334F33D10B04F02CFA4DE9C0BCB5BC69A58C778378254F4834603E812D04F0F9F0ADE9C0BBC7BD79838C78A472C56148343D34E12D04FF0BE2DD0BCB6BFABD7A5F8947B67606714504F923E1500FAF3EF1BE93CD8BFABA4AB589483D67261B43E37235F2D701CF3EFE8EF9CD8C71AB6A608727B679361B45037232C23D01C0B5EFAEB5CB6BFABD7A5F8947B67606714504F923E20A0FAF3EF1BE93CD8BFABA4AB589483D67265F43E37235F2D701CF3EFE8EF9CD8C71AB6AA48727B679361B45037232C23D01C0B5EFAEF9CB6BFABD7A5F8947B67606714504F923E24E0FAF3EF1BE93CD8BFABA4AB589483D67259447232DFAFE3EA9727635BA6ECEAEC5611C54515394BA2D6C7BA0C534F4384A81E72D404C029D1AEB2BF8AD663F8929D430C0B0FB909B397E30C59256E37022B30714C0E6F2AEA2962DB2AC5A7F9D58C47802FB57F33C36E11A1D5F3CF19D1AD08DC3740B90AE597E87E59257F3E7D8CB1D64505495B92F8F3EED8EC6CB6BFAA94AC68B676172C58348337221C1500FAF3ECAD30/7407"';
    			$oldcopyright7 = 'CopyrightMessage="88C1F4F548398C7320B4340428387FE9B7DB79FE90F2D216176A510E9212E429A55087950E0FAC8530C9740DBBC7739735BA5CBE9ED2D3261DCA5EDEA0E5611C4351CACB683FEC8DB8C279FE9542D546275A6FDEA4254F1D75DF540B98398C70F0C317723F7572BAB6A9FA21BD32E7599450DC13904AF286275A6B9E9435501D31519795A801CC7320C1FC06BD32D98B6F504395ECD8DC1D31A70B6D9D59B26A374B48136FFC812B26DC950B2DD6D91BF8B6EAB397F94B52C2FBF0D652E61B4723723E80D92D611ADA60D50D4D1AD80B707B74F7684ECC8200C208B56835721C54517513984CAC70F0B2140860287287B6FEFA54BD35611C4351CABFBA73ED4BB4C90A6E8C598F62B26277D69FD8439B10C0E4FA9AEAC92CA2C7E992A7E86E73B74B44D4F731922A009FA3CE9DD6C928518A563F83C77030C63B63A3703E61D6D1DA5DCEA422E866286E1BCE9BD8739735BA5CBE9ED2D3261DCA5EDEA0E5611C4351CABFBA73ED4BB4C90A6E8C598F62B26277D69FD8439B10C0E4FA9AEA962B81C7E99295D7B472A67F53B50701C2F7229FA3CE9DD6C928518A563F83C77030C63B63A3703E61D6D1DA52168ED8101C8751B995A814EC70F0C0E4F548497109B7DB79FE90F2D216176A510E9212E429A55087950EF3FEB70D60E6F2AE91D19BA3C7E99295D7B472A67F53B50701C2F7229FA3CE9DD6C92B6F504395ECD8DC1D31A707A565064E43E37221C24E03EFE9FA4D0BC0BBFAA949D88727B644D68/6025"';
    			$oldcopyright_elsepty = 'CopyrightMessage="CCC1F4F548398C7320B4340428387FE9B7DB79FE90F2D216176A510E9212E429A55087950E0FAC8530C9740DBBC7739735BA5CBE9ED2D3261DCA5EDEA0E5611C4351CACB6BFABD7A5F8947B676067145037223E1500FAF3EF1BE93CD8BFABA4AB58947B667261B43E37235F2D701CF3EFE8EF9CD8BFAAB6A608727B679361B45037232C23D01CF3EEFAEB5CB6BFABD7A5F8947B676067145037223E20A0FAF3EF1BE93CD8BFABA4AB58947B667265F43E37235F2D701CF3EFE8EF9CD8BFAAB6AA48727B679361B45037232C23D01CF3EEFAEF9CB6BFABD7A5F8947B676067145037223E24E0FAF3EF1BE93CD8BFABA4AB58947B667259447232D26124E1C6F0BE2DED7DE8BC7B609A58C77616A568250A34F26121B12CF0BFA4DE9D82BA5AE9AC694E7836A565F56034F3E812D1D7FE9E2DE0AD82BC7AE9A939A478372C56152C37235F2D701CF3EFE8EF9CD8C71AB6A828727B679361B45037232C23D01C0B5EFAED7CB6BFABD7A5F8947B67606714504F923E22C0FAF3EF1BE93CD8BFABA4AB589483D67267143E37235F2D701CF3EFE8EF9CD8C71AB6AC68C78A472C56148343D34E12D1C6F0BE2DD0BCB683FEC8DB8C279FE9542D546275A6FDEA4272B1C0F51A89498D9FD63C72959157E26F30704DF2BB84DE7E29851AE7AB397F78185C55E63A590FC820814C107E2BEA2EB2BB4CB29D68B441D86D7B264B54B26F24C0B4A598EA312D216286FC5C0BBA5B939838C776179358343E4F925015004FFE9E2DDC7C0B958C9/6913"';
    			
    			$newcopyright = 'CopyrightMessage="99C1F4F548398C7320B4340428387FE9B7DB79FE90F2D216176A510E9212E429A55087950E0FAC8530C9740DBBC7739735BA5CBE9ED2D3261DCA5EDEA0E5611C4351CACB683FEC8DB8C279FE9542D546275A6FDEA4254F4834603E812D04F0F9F0ADE9C0BBC7AE99838C78A472C56148343D34E12D04FF0BFA4DC7C0BCE8B609A58C787178256148334F3F910B04F02CFA4DE9C0BCB5BC69A58C778374E54F4834603E812D04F0F9F0ADE9C0BBC7B939838C78A472C56148343D34E12D04FF0BFE8DC7C0BCE8B609A58C787178256148334F33D10B04F02CFA4DE9C0BCB5BC69A58C778378254F4834603E812D04F0F9F0ADE9C0BBC7BD79838C78A472C56148343D34E12D04FF0BE2DD0BCB6BFABD7A5F8947B67606714504F923E1500FAF3EF1BE93CD8BFABA4AB589483D67261B43E37235F2D701CF3EFE8EF9CD8C71AB6A608727B679361B45037232C23D01C0B5EFAEB5CB6BFABD7A5F8947B67606714504F923E20A0FAF3EF1BE93CD8BFABA4AB589483D67265F43E37235F2D701CF3EFE8EF9CD8C71AB6AA48727B679361B45037232C23D01C0B5EFAEF9CB6BFABD7A5F8947B67606714504F923E24E0FAF3EF1BE93CD8BFABA4AB589483D67259447232DFAFE3EA9727635BA6ECEAEC5611C54515394BA2D6C7BA0C534F4384A81E72D404C029D1AEB2BF8AD663F8929D430C0B0FB909B397E30C59256E37022B30714C0E6F2AEA2962DB2AC5A7F9D58C47802FB57F33C36E11A1D5F3CF19D1AD08DC3740B90AE597E87E59257F3E7D8CB1D64505495B92F8F3EED8EC6CB6BFAA94AC68B676172C58348337221C1500FAF3ECAD30/7407"';
    			if( exec('grep '.escapeshellarg($oldcopyright_elsepty).' '.$file)) {
        		
        		$fname = $file;
				$fhandle = fopen($fname,"r");
				$content = fread($fhandle,filesize($fname));
				
				
				$content = str_replace($oldcopyright_elsepty, $newcopyright, $content);
				$fhandle = fopen($fname,"w");

				fwrite($fhandle,$content);
				fclose($fhandle);
				echo $item['Lab']['id'].'Converted <br/>';

        		// do stuff
    			
			    }else if(exec('grep '.escapeshellarg($newcopyright).' '.$file)) {
			    	echo $item['Lab']['id'].'already Converted <br/>';
			    
				}else{
					echo $item['Lab']['id'].' NOT same copyright Converted <br/>';	
				}


				
				

			} else {
				echo $item['Lab']['id'].' NOT Found Converted <br/>';
			    
			}
		}
		
	}

}