<?php
class PelajaransController extends AppController {

	var $name = 'Pelajarans';
	var $helpers = array('Html', 'Form');
	
	function beforeFilter() {
	    parent::beforeFilter();
		//$this->Auth->allow('logout','__getlic','__ceklicense','login');
		$this->Auth->allow('logout','login');
		//$this->Auth->allow('*');
		$this->set('menuTab', 'admin');
		$this->set('menuTabChild', 'matpel');
	    
		
	}
	
	function index() {
		$this->Pelajaran->recursive = 0;
		$this->set('pelajarans', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Pelajaran.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('pelajaran', $this->Pelajaran->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Pelajaran->create();
			if ($this->Pelajaran->save($this->data)) {
				
				$this->Session->setFlash(__('Mata Pelajaran berhasil ditambahkan', 'flash_success'));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash('Mata Pelajarantidak berhasil ditambahkan silahkan ulangi','flash_erorr');

			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Pelajaran', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Pelajaran->save($this->data)) {
				$this->Session->setFlash(__('Mata Pelajaran berhasil diupdate', 'flash_success'));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash('Mata Pelajarantidak berhasil diupdate silahkan ulangi','flash_erorr');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Pelajaran->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Pelajaran', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Pelajaran->del($id)) {
			$this->Session->setFlash(__('Pelajaran deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>