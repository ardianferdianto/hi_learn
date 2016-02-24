<?php
class FileTugasController extends AppController {

	var $name = 'FileTugas';
	var $helpers = array('Html', 'Form');
	
	function beforeFilter() {
	    parent::beforeFilter(); 
	    $this->set('menuTab', 'kelas');
	    $this->set('menuTabChild', 'tugas');
	}
	function index() {
		$this->FileTuga->recursive = 0;
		$this->set('fileTugas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid FileTuga.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('fileTuga', $this->FileTuga->read(null, $id));
	}
	
	
	
	
	
	function add($tugasId = null) {
		if (!$tugasId && empty($this->data)) {
			$this->Session->setFlash(__('File Tugas Salah', true));
			$this->redirect(array('controller'=>'tugas','action'=>'index'));
		}
		$this->set('tugasId',$tugasId);
		$tugasStatus = $this->FileTuga->find('all',array('conditions'=>array('FileTuga.tugas_id'=>$tugasId,'FileTuga.siswa_id'=>$this->Auth->user('id'))));
		
		
		if (!empty($this->data)) {
			
			
			$this->data['FileTuga']['siswa_id'] = $this->Auth->user('id');
			$this->FileTuga->create();
			if ($this->FileTuga->save($this->data)) {
				$this->Session->setFlash('Anda berhasil mengumpulkan tugas','flash_success');
				
				$this->redirect(array('controller'=>'tugas','action'=>'index'));
			
			} else {
				$this->Session->setFlash('Maaf gagal mengupload tugas, silahkan coba lagi','flash_erorr');
				
			}
			
		}
		$this->set('namaTugas', $this->FileTuga->Tuga->read(null, $tugasId));
		$tugas = $this->FileTuga->Tuga->find('list');
		
		if($this->Auth->user('group_id') == 3 ){
		$this->FileTuga->bindModel(
		    array('hasMany' => array(
		            'User' => array(
		                'className' => 'User'
		            )
		        )
		    )
		);
		$namaSiswa = $this->FileTuga->User->find('first',array('conditions'=>array('User.id'=>$this->Auth->user('id'))));
		$this->set(compact('namaSiswa'));
		}
		
		$this->set(compact('tugas','tugasStatus'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Tugas Salah, silahkan coba lagi','flash_erorr');
			
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->FileTuga->save($this->data)) {
				$this->Session->setFlash('Anda berhasil mengumpulkan tugas','flash_success');
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash('Maaf gagal mengupload tugas, silahkan coba lagi','flash_erorr');
				
			}
		}
		if (empty($this->data)) {
			$this->data = $this->FileTuga->read(null, $id);
		}
		$tugas = $this->FileTuga->Tuga->find('list');
		$this->set(compact('tugas'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for FileTuga', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->FileTuga->del($id)) {
			$this->Session->setFlash(__('FileTuga deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}


	function administrator_index() {
		$this->FileTuga->recursive = 0;
		$this->set('fileTugas', $this->paginate());
	}

	function administrator_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid FileTuga.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('fileTuga', $this->FileTuga->read(null, $id));
	}

	function administrator_add() {
		if (!empty($this->data)) {
			$this->FileTuga->create();
			if ($this->FileTuga->save($this->data)) {
				$this->Session->setFlash(__('The FileTuga has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The FileTuga could not be saved. Please, try again.', true));
			}
		}
		$tugas = $this->FileTuga->Tuga->find('list');
		$this->set(compact('tugas'));
	}

	function administrator_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid FileTuga', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->FileTuga->save($this->data)) {
				$this->Session->setFlash(__('The FileTuga has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The FileTuga could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->FileTuga->read(null, $id);
		}
		$tugas = $this->FileTuga->Tuga->find('list');
		$this->set(compact('tugas'));
	}

	function administrator_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for FileTuga', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->FileTuga->del($id)) {
			$this->Session->setFlash(__('FileTuga deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}
	
	

}
?>