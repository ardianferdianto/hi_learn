<?php
class CategoriesController extends AppController {

	var $name = 'Categories';
	var $helpers = array('Html', 'Form');
	
	function beforeFilter() {
	    parent::beforeFilter();
		//$this->Auth->allow('logout','__getlic','__ceklicense','login');
		//$this->Auth->allow('logout','login');
		$this->Auth->allow('*');
		//$this->set('menuTab', 'admin');
		//$this->set('menuTabChild', 'matpel');
	    
		
	}
	
	function index() {
		$this->Category->recursive = 0;
		$this->set('categories', $this->paginate());
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
				$this->data['Category']['cover'] = $result['urls'][0];
			}
		}

	return $image_ok;
	}


	function type($id=null) {
		$this->Category->recursive = 0;
		$conditions = array('Category.type'=>$id);
		$categories = $this->Category->find('all',array('conditions'=>$conditions));
		if($id==1){
			$namakategory = 'Ebook';
		}else{
			$namakategory = 'Video';
		}	
		$this->set('categories', $categories);
		$this->set('namakategory', $namakategory);

		$this->set('idkategory',$id);
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Category.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('pelajaran', $this->Category->read(null, $id));
	}

	function add($type=null) {
		if (!empty($this->data)) {
			$typesubmitted = $this->data['Category']['type'];
			$image_ok = $this->_upload_cover();
			$this->Category->create();
			if ($this->Category->save($this->data)) {

				$this->Session->setFlash(__('Kategori berhasil ditambahkan', 'flash_success'));
				$this->redirect(array('action'=>'type',$typesubmitted));
				
				
			} else {
				
				$this->Session->setFlash(__('Tidak Berhasil Menambahkan Kategori', 'flash_erorr'));
				$this->redirect(array('action'=>'type',$typesubmitted));

			}
		}

		$this->set('type',$type);
	}


	function add_responses($idtoResponse,$status,$nametoResponse,$flashMessage){
		
		if (!$idtoResponse && !$status) {
			$this->Session->setFlash(__('Invalid Ebook.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('nametoResponse',$nametoResponse);
		$this->set('status',$status);
		$this->set('flashMessage',$flashMessage);
		$this->set('idtoResponse',$idtoResponse);

		$this->layout = 'default_blank';
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Category', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			$image_ok = $this->_upload_cover();
			$typein = $this->data['Category']['type'];
			
			if ($this->Category->save($this->data)) {
				
				$this->Session->setFlash(__('Kategori berhasil diupdate', 'flash_success'));
				$this->redirect(array('action'=>'type',$typein));
			} else {
				$this->Session->setFlash('Kategori tidak berhasil diupdate silahkan ulangi','flash_erorr');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Category->read(null, $id);
		}
	}

	function delete($id = null,$type = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Category', true));
			$this->redirect(array('action'=>'type',$type));
		}
		if ($this->Category->del($id)) {
			$this->Session->setFlash(__('Category deleted', true));
			$this->redirect(array('action'=>'type',$type));
		}
	}

}
?>