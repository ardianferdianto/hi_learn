<?php
class ProfilesController extends AppController {

	var $name = 'Profiles';
	var $helpers = array('Html', 'Form');

	function beforeFilter() {
	    parent::beforeFilter();
		//$this->Auth->allow('logout','__getlic','__ceklicense','login');
	     	$this->set('menuTab', 'asset');
	  	 $this->set('menuTabChild', 'indexAsset');

		//$licInfo = $this->__getlic();
		//$this->__ceklicense($licInfo['licVal'],$licInfo['lickey']);
	}

	function index() {
		$this->Profile->recursive = 0;
		$this->set('profiles', $this->paginate());
	}

	function view() {
		$id = 1;
		if (!$id) {
			$this->Session->setFlash(__('Invalid Profile.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('profile', $this->Profile->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Profile->create();
			if ($this->Profile->save($this->data)) {
				$this->Session->setFlash(__('The Profile has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Profile could not be saved. Please, try again.', true));
			}
		}
	}

	function edit() {
		$id = 1;
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Profile', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			$this->data['Profile']['tgl_berdiri'] = $this->data['Profile']['tgl_berdiri']['year'];
			if ($this->Profile->save($this->data)) {
				$this->Session->setFlash('Pengaturan berhasil disimpan','flash_success');
				$this->redirect(array('controller'=>'users','action'=>'home'));
			} else {
				$this->Session->setFlash(__('The Profile could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Profile->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Profile', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Profile->del($id)) {
			$this->Session->setFlash(__('Profile deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>