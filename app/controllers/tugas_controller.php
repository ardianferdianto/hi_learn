<?php
class TugasController extends AppController {

	var $name = 'Tugas';
	var $helpers = array('Html', 'Form');
	
	function beforeFilter() {
	    parent::beforeFilter();
	    $this->set('menuTab', 'kelas');
	    $this->set('menuTabChild', 'tugas');
	}
	function index() {
		
		$this->Tuga->recursive = 1;
		if($this->Auth->user('group_id')==1){
		//$tugas = $this->Tuga->find('all',array('conditions'=>array('tahun_ajaran_id'=> $this->Session->read('tahunAjaran'),'semester'=>$this->Session->read('semester')),'limit'=>'20'));
			$tugas = $this->Tuga->find('all',array('limit'=>'20'));
		$this->set(compact('tugas', $this->paginate()));
		}
		if($this->Auth->user('group_id')==2){
		//jika login guru
		$tugasGuru = $this->Tuga->find('all',array('conditions'=>array('author'=>$this->Auth->user('id'))));
		$this->set(compact('tugasGuru', $this->paginate()));
		}
		//jika login sebagai murid
		if($this->Auth->user('group_id')==3){
			
			/*foreach ($this->Session->read('saveRombel') as $n){
			$save =  $n['PasSiswaRombel']['kela_id'];
			}*/
			//$tugasMurid = $this->Tuga->find('all',array('conditions'=>array('Tuga.expiration_date >'=>date('Y-m-d', strtotime("now")),'Tuga.kelas'=>$save)));

			$tugasMurid = $this->Tuga->find('all',array('conditions'=>array('Tuga.expiration_date >'=>date('Y-m-d', strtotime("now")),'Tuga.kelas'=>$this->Auth->user('kelas'))));
			
			$this->set(compact('tugasMurid', $this->paginate()));
			
			
		}
		
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Tugas tidak ditemukan.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Tuga->recursive = 2;
			
		$this->set('tuga', $this->Tuga->read(null, $id));
		$tugasSerahList = $this->Tuga->FileTuga->find('all',array('conditions'=>array('FileTuga.tugas_id'=>$id)));
		
		
			
			//$namaSiswa = $this->Tuga->SiswaPas->find('all',array('conditions'=>array('SiswaPas.NIS'=>$this->Auth->user('username'))));
			//$tugasSerahList = $this->Tuga->FileTuga->find('all',array('conditions'=>array('FileTuga.tugas_id'=>$id)));
		
		$this->set(compact('tugasSerahList','namaSiswa'));
	}

	function add() {
		if($this->Auth->user('group_id') ==3){
		$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			$this->data['Tuga']['author'] = $this->Auth->user('id');
			//$this->data['Tuga']['tahun_ajaran_id'] = $this->Session->read('tahunAjaran');
			//$this->data['Tuga']['semester'] = $this->Session->read('semester');
			$this->data['Tuga']['tahun_ajaran_id'] = 1;
			$this->data['Tuga']['semester'] = 1;
			$this->Tuga->create();
			if ($this->Tuga->save($this->data)) {
				 
				$this->Session->setFlash('Tugas berhasil ditambahkan','flash_success');
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash('Tugas tidak berhasil ditambahkan,Silahkan coba lagi','flash_erorr');
			}
			
		}
		
		
		$listMataPelajaran = $this->Tuga->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));
		//$fieldsKelas = 'PasRombel.KETERANGAN,PasRombel.ID_RUANG_KELAS';

		$listKelas = $this->Tuga->Kela->find('list',array('fields'=>'Kela.name'));
		$this->set(compact('listMataPelajaran','listKelas'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Tuga', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Tuga->save($this->data)) {
				$this->Session->setFlash('Tugas berhasil ditambahkan','flash_success');
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash('Tugas berhasil ditambahkan,Silahkan coba lagi','flash_erorr');
			}
		}
		if (empty($this->data)) {
			$this->set('tugas',$this->data = $this->Tuga->read(null, $id));
		}
		$listKelas = $this->Tuga->Kela->find('list',array('fields'=>'Kela.name'));
		$listMataPelajaran = $this->Tuga->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));
		$this->set(compact('listMataPelajaran','listKelas'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash('Tugas berhasil dihapus','flash_success');
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Tuga->del($id)) {
			$this->Session->setFlash(__('Tugas dihapus', true));
			$this->redirect(array('action'=>'index'));
		}
	}


	function administrator_index() {
		$this->Tuga->recursive = 0;
		$this->set('tugas', $this->paginate());
	}

	function administrator_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Tuga.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('tuga', $this->Tuga->read(null, $id));
	}

	function administrator_add() {
		if (!empty($this->data)) {
			$this->Tuga->create();
			if ($this->Tuga->save($this->data)) {
				$this->Session->setFlash(__('Tugas has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('Tugas could not be saved. Please, try again.', true));
			}
		}
	}

	function administrator_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Tuga', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Tuga->save($this->data)) {
				$this->Session->setFlash(__('Tugas has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('Tugas could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Tuga->read(null, $id);
		}
	}

	function administrator_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Tuga', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Tuga->del($id)) {
			$this->Session->setFlash(__('Tugas dihapus', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>