<?php
class PengumumenController extends AppController {

	var $name = 'Pengumumen';
	var $helpers = array('Html', 'Form','Fck','Video');
	function beforeFilter() {
	    parent::beforeFilter();
	    $this->set('menuTab', 'kelas');
	    $this->set('menuTabChild', 'pengumuman'); 
	    $this->Auth->allow('video');
	}

	var $components = array('Filter');
	
	function index() {
		$this->Pengumuman->recursive = 0;
		$pengumumen = $this->Pengumuman->find('all',array('conditions'=>array('Pengumuman.expiration_date >'=>date('Y-m-d', strtotime("now")))));
		$this->set(compact('pengumumen'));
	}

	function video() {
		$this->Pengumuman->recursive = 0;
		$pengumumen = $this->Pengumuman->find('all',array('conditions'=>array('Pengumuman.expiration_date >'=>date('Y-m-d', strtotime("now")))));
		$this->set(compact('pengumumen'));
		//$this->layout='default_video';
	}

	function category($id = null) {
		if(($id == 1)&&($this->Auth->user('group_id') == 3)){
			$this->Session->setFlash( 'Anda tidak berhak masuk ke halaman ini','flash_erorr');
	    	$this->redirect(array('action'=>'home'));
		}
		$this->Pengumuman->recursive = 0;
		$pengumumen = $this->Pengumuman->find('all',array('conditions'=>array('Pengumuman.scope'=>$id),'order' => array('Pengumuman.created' => 'DESC')));
		$this->set(compact('pengumumen','id'));
	}

	function home() {
		
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Pengumuman.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('pengumuman', $this->Pengumuman->read(null, $id));
	}

	

	function add($cat=null) {
		if (!empty($this->data)) {
			
			$tipe = $this->data['Pengumuman']['scope'];

			$this->Pengumuman->create();

			if ($this->Pengumuman->save($this->data)) {
				$this->Session->setFlash('Info berhasil disimpan,','flash_success');
				$this->redirect(array('action'=>'category/'.$tipe));
			} else {
				$this->Session->setFlash('Info tidak berhasil disimpan,','flash_erorr');
			}
		}
		$this->set(compact('cat'));
	}


	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Pengumuman', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Pengumuman->save($this->data)) {
				$this->Session->setFlash('Pengumuman berhasil disimpan,','flash_success');
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash('Pengumuman tidak berhasil disimpan,','flash_erorr');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Pengumuman->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Pengumuman', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Pengumuman->del($id)) {
			$this->Session->setFlash('Pengumuman berhasil dihapus','flash_success');
			$this->redirect(array('action'=>'home'));
		}
	}


	function administrator_index() {
		$this->Pengumuman->recursive = 0;
		$this->set('pengumumen', $this->paginate());
	}

	function administrator_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Pengumuman.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('pengumuman', $this->Pengumuman->read(null, $id));
	}

	function administrator_add() {
		if (!empty($this->data)) {
			$this->Pengumuman->create();
			if ($this->Pengumuman->save($this->data)) {
				$this->Session->setFlash(__('The Pengumuman has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Pengumuman could not be saved. Please, try again.', true));
			}
		}
	}

	function administrator_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Pengumuman', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Pengumuman->save($this->data)) {
				$this->Session->setFlash(__('The Pengumuman has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Pengumuman could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Pengumuman->read(null, $id);
		}
	}

	function administrator_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Pengumuman', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Pengumuman->del($id)) {
			$this->Session->setFlash(__('Pengumuman deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>