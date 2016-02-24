<?php
class UserMessagesController extends AppController {

	var $name = 'UserMessages';
	var $helpers = array('Html', 'Form','Fck','Video');

	function beforeFilter() {
	    parent::beforeFilter();
	    //$this->Auth->allow('*');
	    $this->set('menuTab', 'user');
	     $this->set('menuTabChild', 'message');
	}

	function index() {
		$this->UserMessage->recursive = 2;
		$inbox = $this->UserMessage->find('all',array('conditions'=>array('to'=>$this->Auth->user('id')),'order' => array('UserMessage.created' => 'DESC')));
		$sentitem = $this->UserMessage->find('all',array('conditions'=>array('from'=>$this->Auth->user('id'))));
		$this->set(compact('inbox','sentitem'));


	}

	function sent() {
		$this->UserMessage->recursive = 2;

		$inbox = $this->UserMessage->find('all',array('conditions'=>array('from'=>$this->Auth->user('id')),'order' => array('UserMessage.created' => 'DESC')));
		$this->set(compact('inbox'));


	}

	function checkunread(){

		 $this->UserMessage->recursive = 2;
		 return $this->UserMessage->find('all',array('conditions'=>array('to'=>$this->Auth->user('username'),'read !='=>1)));

	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid UserMessage.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('userMessage', $this->UserMessage->read(null, $id));
	}
	function read($id = null){
		if (!$id) {
			$this->Session->setFlash(__('Invalid UserMessage.', true));
			$this->redirect(array('action'=>'index'));
		}


		$this->set('userMessage', $this->UserMessage->read(null, $id));


		$this->UserMessage->saveField('read',1);


	}

	function add() {
		if (!empty($this->data)) {
			//defining from
			$this->data['UserMessage']['from'] = $this->Auth->user('id');
			if ($this->data['UserMessage']['to_guru']!= null){
				$this->data['UserMessage']['to'] = $this->data['UserMessage']['to_guru'];
				$this->data['UserMessage']['sent'] = 1;
			} else if ($this->data['UserMessage']['to_siswa'] != null){
				$this->data['UserMessage']['to'] = $this->data['UserMessage']['to_siswa'];
				$this->data['UserMessage']['sent'] = 1;
			}
			 else if ($this->data['UserMessage']['to_reply'] != null ){
				$this->data['UserMessage']['to'] = $this->data['UserMessage']['to_reply'];
				$this->data['UserMessage']['sent'] = 1;
			}
			else{
				$this->Session->setFlash('Maaf terjadi kesalahan, silahkan coba lagi','flash_erorr');
			}

			$this->UserMessage->create();
			if ($this->UserMessage->save($this->data)) {

				$this->Session->setFlash('Pesan berhasil dikirim','flash_success');
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash('Maaf terjadi kesalahan, silahkan coba lagi','flash_erorr');
			}
		}
		$conditions = array('ReceipentGuru.group_id' => array(2,1));
		$listGuru = $this->UserMessage->ReceipentGuru->find('list',array('conditions' => $conditions,'fields'=>'ReceipentGuru.nama'));

		$listKelas = $this->UserMessage->ReceipentSiswa->Kela->find('list',array('fields'=>'Kela.name'));
		/*$listKelas = $this->UserMessage->PasRombel->find('list',array('fields'=>'PasRombel.nama','conditions'=>array('tahun_ajaran_id'=>$this->Session->read('tahunAjaran'))));*/
		$this->set(compact('listGuru','listKelas'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid UserMessage', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->UserMessage->save($this->data)) {
				$this->Session->setFlash(__('The UserMessage has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The UserMessage could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->UserMessage->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for UserMessage', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->UserMessage->del($id)) {
			$this->Session->setFlash(__('UserMessage deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

	function get_siswa_dropdown() {
		$this->UserMessage->recursive = 2;
		if(!empty($this->data['UserMessage']['rombel_id'])) {
			$rombel_id = (int)$this->data['UserMessage']['rombel_id'];
			$conditions = array('SiswaPas.kelas' => $rombel_id,'SiswaPas.group_id' => 3);
			$options = $this->UserMessage->SiswaPas->find('all',array('conditions' => $conditions,'order'=>'SiswaPas.nama ASC'));
			$this->set('options',$options);
			$this->render('get_siswa_dropdown','ajax');
		}
	}

}
?>