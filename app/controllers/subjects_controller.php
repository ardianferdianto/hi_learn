<?php
class SubjectsController extends AppController {

	var $name = 'Subjects';
	var $components = array('Auth', 'Acl','Filter');

	function beforeFilter() {
	    parent::beforeFilter();
		//$this->Auth->allow('logout','__getlic','__ceklicense','login');
		
		$this->Auth->allow('view');
	    $this->set('menuTab', 'asset');
	  	$this->set('menuTabChild', 'indexAsset');
	  	$this->Auth->allow('*');
		
		//$licInfo = $this->__getlic();
		//$this->__ceklicense($licInfo['licVal'],$licInfo['lickey']);
	}

	function index() {
		$this->Subject->recursive = 0;
		$conditions1 = array('type'=>1,'grade'=>10);
		$conditions2 = array('type'=>1,'grade'=>11);
		$conditions3 = array('type'=>1,'grade'=>12);
		$subjects1 = $this->Subject->find('all',array('condition'=>$conditions1));
		$subjects2 = $this->Subject->find('all',array('condition'=>$conditions2));
		$subjects3 = $this->Subject->find('all',array('condition'=>$conditions3));
		$this->set(compact('subjects1','subjects2','subjects3'));
		
	}
	function home() {
		$this->Subject->recursive = 0;
		$conditions1 = array('type'=>1,'grade'=>10);
		$conditions2 = array('type'=>1,'grade'=>11);
		$conditions3 = array('type'=>1,'grade'=>12);
		$subjects1 = $this->Subject->find('all',array('conditions'=>$conditions1));
		$subjects2 = $this->Subject->find('all',array('conditions'=>$conditions2));
		$subjects3 = $this->Subject->find('all',array('conditions'=>$conditions3));
		$this->set(compact('subjects1','subjects2','subjects3'));
		$conditions = array('Grade.id !='=> 13);
		$classlist = $this->Subject->Grade->find('all',array('conditions'=>$conditions));
		$this->set('classlist',$classlist);
		$vendorlist = $this->Subject->Vendor->find('all');
		$this->set('vendorlist',$vendorlist);
	}


	function kelas($kelasId = null) {
		if(!$kelasId){
			$this->Session->setFlash(__('Pembelajaran tidak ditemukan.', true));
			$this->redirect(array('action'=>'home'));
		}else{
			$this->Subject->recursive = 0;
			$conditions = array('type'=>1,'grade_id'=>$kelasId);
			$subjectlist = $this->Subject->find('all',array('conditions'=>$conditions));
			$listclass = $this->Subject->Grade->find('list',array('fields'=>'Grade.name'));
			$subjectlist = $this->Subject->find('all',array('conditions'=>$conditions));
			$listBidangStudi = $this->Subject->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));
			
			$this->set(compact('subjects','kelasId','listclass','subjectlist','listBidangStudi'));
			

		}
	}

	function ensiklopedia() {
		$this->Subject->recursive = 0;
		$this->set('subjects', $this->paginate());

		$conditions = array('type'=>2);
		$ensiklopedia = $this->Subject->find('all',array('conditions'=>$conditions));
		$this->set(compact('ensiklopedia'));


		$listclass = $this->Subject->Grade->find('list',array('fields'=>'Grade.name'));
		
		$listBidangStudi = $this->Subject->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));
		$this->set(compact('listclass','listBidangStudi'));
	}

	function view() {
		$param_filename=$this->params['url']['filename']; //get keyword from querystring//
		$param_filefolder=$this->params['url']['filefolder']; //get keyword from querystring//
		$this->set('param_filename',$param_filename);
		$this->set('param_filefolder',$param_filefolder);
		$this->layout= 'default_blank';
	}

	function _upload_subject() {
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
				$this->data['Subject']['icon'] = $result['urls'][0];
			}
		}

	return $image_ok;
	}


	function add() {
		if (!empty($this->data)) {
			$tipepembelajaran = $this->data['Subject']['type'];

			$image_ok = $this->_upload_subject();

			$this->Subject->create();
			
			if ($this->Subject->save($this->data)) {

				if($tipepembelajaran ==1){

					if ($this->data['Subject']['zipfile']) {

						$pelajaran = $this->data['Subject']['pelajaran_id'];
						$name = $this->data['Subject']['name'];
						$lastID  = $this->Subject->getInsertID();
						//$bagian1 = $this->data['Subject']['bagian1'];
						//$bagian2 = $this->data['Subject']['bagian2'];
						//$bagian3 = $this->data['Subject']['bagian3'];
						//$bagian4 = $this->data['Subject']['bagian4'];

						$kelas = $this->data['Subject']['grade_id'];

						$file = new File($this->data['Subject']['zipfile']['tmp_name']);
						
						$foldertounzip  = WWW_ROOT.DS.'pembelajaran'.DS.'kelas'.$kelas.DS.$lastID;
						$foldertoupload  = WWW_ROOT.DS.'pembelajaran'.DS.'kelas'.$kelas.DS.$lastID.'.zip';

						
						

						$data = $file->read();
						$file->close();

						$file = new File($foldertoupload,true);
						$file->write($data);
						$file->close();
						// do unzip file

						//delete folder first
						$file = new Folder($foldertounzip);
						//$file->write();

						$zip = new ZipArchive;
					     $res = $zip->open($foldertoupload);

					     $path = 'pembelajaran/kelas'.$kelas.'/'.$lastID.'/';

						$record = $this->Subject->read(null, $lastID);
						$this->Subject->saveField('folder_name', $path);
					     if ($res === TRUE) {
					         $zip->extractTo($foldertounzip);
					         $zip->close();
					        $this->Session->setFlash('Berhasil Mengupload data','flash_success');
							$this->redirect(array('action'=>'kelas/'.$kelas));
					     } else {
					        $this->Session->setFlash('Tidak Berhasil Mengupload data','flash_erorr');
							$this->redirect(array('action'=>'home'));
					     }

					    
							
						//}
					}
				}elseif($tipepembelajaran == 2){

					if ($this->data['Subject']['zipfile']) {

						//$pelajaran = $this->data['Subject']['pelajaran_id'];
						$name = $this->data['Subject']['name'];
						$lastID  = $this->Subject->getInsertID();
						

						$file = new File($this->data['Subject']['zipfile']['tmp_name']);
						
						$foldertounzip  = WWW_ROOT.DS.'pembelajaran'.DS.'ensiklopedia'.DS.$lastID;
						$foldertoupload  = WWW_ROOT.DS.'pembelajaran'.DS.'ensiklopedia'.DS.$lastID.'.zip';

						
						

						$data = $file->read();
						$file->close();

						$file = new File($foldertoupload,true);
						$file->write($data);
						$file->close();
						// do unzip file

						//delete folder first
						$file = new Folder($foldertounzip);
						//$file->write();

						$zip = new ZipArchive;
					    $res = $zip->open($foldertoupload);
					    
					    $path = 'pembelajaran/ensiklopedia/'.$lastID.'/';

						$record = $this->Subject->read(null, $lastID);
						$this->Subject->saveField('folder_name', $path);

					     if ($res === TRUE) {
					         $zip->extractTo($foldertounzip);
					         $zip->close();

					        $this->Session->setFlash('Berhasil Mengupload data','flash_success');
							$this->redirect(array('action'=>'ensiklopedia'));
					     } else {
					        $this->Session->setFlash('Tidak Berhasil Mengupload data','flash_erorr');
							$this->redirect(array('action'=>'home'));
					     }

					    
							
						//}
					}
				}//end tipe pembelajaran

			} else {
				$this->Session->setFlash('Data tidak berhasil disimpan, silahkan coba lagi','flash_erorr');
				$this->redirect(array('action'=>'index'));
			}
		}
	}

	

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Subject', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			$jenisdata = $this->data['Subject']['type'];
			if ($this->Subject->save($this->data)) {
				if($jenisdata == 1){
					$this->Session->setFlash(__('Data berhasil disimpan', true));
					$this->redirect(array('action'=>'home'));
				}elseif($jenisdata == 2){
					$this->Session->setFlash(__('Data berhasil disimpan', true));
					$this->redirect(array('action'=>'ensiklopedia'));
				}else{
					$this->Session->setFlash(__('Data berhasil disimpan', true));
					$this->redirect(array('controller'=>'users','action'=>'home'));
				}
			} else {
				$this->Session->setFlash(__('The Subject could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Subject->read(null, $id);
		}
	}

	function delete($id = null,$tipe =null,$kelas = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Subject', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Subject->del($id)) {
			if($tipe == 1){
				$directory = WWW_ROOT.'pembelajaran'.DS.'kelas'.$kelas.DS.$id;
				$this->_delete_recursive($directory);
				$directory = WWW_ROOT.'pembelajaran'.DS.'kelas'.$kelas.DS.$id;
				$this->_delete_recursive($directory.'.zip');

				$this->Session->setFlash('Berhasil menghapus data','flash_success');
				
				$this->redirect(array('controller'=>'subjects','action'=>'kelas',$kelas));
			}elseif ($tipe == 2) {
				
				$directory = WWW_ROOT.'pembelajaran'.DS.'ensiklopedia'.DS.$id;
				$this->_delete_recursive($directory);

				$this->Session->setFlash('Berhasil menghapus data','flash_success');
				$this->redirect(array('controller'=>'subjects','action'=>'ensiklopedia'));
			}
		}
	}

}
?>