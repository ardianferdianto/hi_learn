<?php
class AssetsController extends AppController {

	var $name = 'Assets';
	var $helpers = array('Html', 'Form','Fck','Video');
	function beforeFilter() {
	    parent::beforeFilter(); 
	    //$this->Auth->allow('*');
	    $this->Auth->allow('edit_pages');
	    $this->set('menuTab', 'asset');
	   $this->set('menuTabChild', 'indexAsset');
	}
	var $components = array('Filter');
	
	/*function find() {
		//if (!empty($this->data)) {
		$this->Asset->recursive = 2;
		if(isset($this->data['Asset']['title'])){
		
			$conditions = 	array('title LIKE'=> $this->data['Asset']['title'].'%');
			return $conditions;
		}
		if(!empty($this->data['Asset']['tahun_ajaran_id']) && !empty($this->data['Asset']['title'])){
			$conditions = 	array('title LIKE'=> $this->data['Asset']['title'],'tahun_ajaran_id'=> $this->data['Asset']['tahun_ajaran_id']);
		}
		if (!empty($this->data['Asset']['tahun_ajaran_id']) && !empty($this->data['Asset']['title']) && !empty($this->data['Asset']['semester'])){
			$conditions = 	array('title LIKE'=> $this->data['Asset']['title'].'%','tahun_ajaran_id'=> $this->data['Asset']['tahun_ajaran_id'],'semester'=>$this->data['Asset']['semester']);
		}
		if (!empty($this->data['Asset']['tahun_ajaran_id']) && !empty($this->data['Asset']['title']) && !empty($this->data['Asset']['semester']) && !empty($this->data['Asset']['kelas']) && !empty($this->data['Asset']['matapelajaran'])){
			$conditions = 	array('title LIKE'=> $this->data['Asset']['title'].'%','tahun_ajaran_id'=> $this->data['Asset']['tahun_ajaran_id'],'semester'=>$this->data['Asset']['semester'],'kelas'=> $this->data['Asset']['kelas'],'matapelajaran'=> $this->data['Asset']['matapelajaran']);
		}
		if (!empty($this->data['Asset']['tahun_ajaran_id']) && !empty($this->data['Asset']['title']) && !empty($this->data['Asset']['semester']) && !empty($this->data['Asset']['kelas']) && !empty($this->data['Asset']['matapelajaran']) && !empty($this->data['Asset']['guru'])){
			$conditions = 	array('title LIKE'=> $this->data['Asset']['title'].'%','tahun_ajaran_id'=> $this->data['Asset']['tahun_ajaran_id'],'semester'=>$this->data['Asset']['semester'],'kelas'=> $this->data['Asset']['kelas'],'matapelajaran'=> $this->data['Asset']['matapelajaran'],'author'=> $this->data['Asset']['guru']);
		}
		
		
		$assets = $this->Asset->find('all',array('conditions'=>$conditions,'limit'=>'20'));
		
		$assetsGuru = $this->Asset->find('all',array('conditions'=>array('author'=>$this->Auth->user('id'))));
		$listMataPelajaran = $this->Asset->PasMataPelajaran->find('list',array('fields'=>'PasMataPelajaran.NM_MATA_PELAJARAN_DIAJARKAN'));
		//$fieldsKelas = 'PasRombel.KETERANGAN,PasRombel.ID_RUANG_KELAS';
		$listGuru = $this->Asset->PasPegawai->find('list',array('fields'=>'PasPegawai.NM_PEGAWAI'));
		$this->Asset->bindModel(
		    array('belongsTo' => 
		    	array(
		         'PasTahunAjaran' => array(
		             'className' => 'PasTahunAjaran',
		             'foreignKey'=> 'tahun_ajaran_id'
		         )
		        )
		    )
		);
		$listTahunAjaran = $this->Asset->PasTahunAjaran->find('list',array('fields'=>'PasTahunAjaran.NM_TAHUN_AJARAN','order'=>'PasTahunAjaran.KD_TAHUN_AJARAN DESC'));
		$this->set(compact('assets', $this->paginate()));
		$this->set(compact('assetsGuru','listMataPelajaran','listGuru','listTahunAjaran'));
		
	}*/
	
	function find() {
		$this->Asset->recursive = 0;
        $filter = $this->Filter->process($this);
        $this->set('assets', $this->paginate(null, $filter));
        $listMataPelajaran = $this->Asset->PasMataPelajaran->find('list',array('fields'=>'PasMataPelajaran.keterangan'));
       
        $listGuru = $this->Asset->PasPegawai->find('list',array('fields'=>'PasPegawai.nama_lengkap'));
        $this->Asset->bindModel(
            array('belongsTo' => 
            	array(
                 'PasTahunAjaran' => array(
                     'className' => 'PasTahunAjaran',
                     'foreignKey'=> 'tahun_ajaran_id'
                 )
                )
            )
        );
        $listTahunAjaran = $this->Asset->PasTahunAjaran->find('list',array('fields'=>'PasTahunAjaran.tahun','order'=>'PasTahunAjaran.id DESC'));
        $this->set(compact('assetsGuru','listMataPelajaran','listGuru','listTahunAjaran'));
        $this->set('menuTabChild', 'AssetFind');
	}
		
	
	function index() {
		
		$this->Asset->recursive = 2;
		if($this->Auth->user('group_id')==1){
		$this->set('assets', $this->paginate());
		}
		if($this->Auth->user('group_id')==2){
		$assetsGuru = $this->Asset->find('all',array('conditions'=>array('author'=>$this->Auth->user('username'))));
		$this->set(compact('assetsGuru'));
		}
		if($this->Auth->user('group_id')==3){
			
		
		
		$assetsMurid = $this->Asset->find('all',array('conditions'=>array('tahun_ajaran_id'=> $this->Session->read('tahunAjaran'),'semester'=>$this->Session->read('semester')),array('limit'=>10)));
		$this->set(compact('assetsMurid'));
		
		}
		
		
		
		
		 $this->set('menuTabChild', 'indexAsset');
		
	}

	function home(){

	}

	function guru() {
		

		$this->Asset->recursive = 2;
		$conditions = array('created_by'=>1);			
		$assets = $this->Asset->find('all',array('conditions'=>$conditions));
		
		$this->set(compact('assets'));	
		
			
		
		
		
	}

	function siswa($author=null,$kelas =null) {
		if(!$author || !$kelas){
			$this->Session->setFlash(__('Tidak ada Siswa.', true));
			$this->redirect(array('action'=>'home'));
		}else{
			//find name user first
			$this->Asset->recursive = 2;
			$conditions = array('created_by'=>2,'author'=>$author);
			$assets = $this->Asset->find('all',array('conditions'=>$conditions));
			if(!$assets){
				$this->Session->setFlash( '<bold>'.$author.'</bold> belum pernah membuat presentase, pilih siswa lain','flash_erorr');
				$this->redirect(array('controller'=>'users','action'=>'presentase_siswa',$kelas));
			}else{
				$this->set(compact('assets','kelas'));	

			}

			
		}
		
		
	}



	function view($id = null) {
	$this->Asset->recursive = 2;
		if (!$id) {
			$this->Session->setFlash(__('Invalid Asset.', true));
			$this->redirect(array('action'=>'index'));
		}
		
		$this->set('asset', $this->Asset->read(null, $id));
		/*$this->set('guru', $this->Asset->PasPegawai->read(null, $this->data['Asset']['author']));*/
		$this->set('menuTabChild', 'indexAsset');
	}

	function add($type = null) {
	
		if (!empty($this->data)) {
			
			$created_by = $this->data['Asset']['created_by'];
			$group_id = $this->Auth->user('group_id');
			$this->data['Asset']['author'] = $this->Auth->user('username');
			$this->data['Asset']['tahun_ajaran_id'] = $this->Session->read('tahunAjaran');
			$this->data['Asset']['semester'] = $this->Session->read('semester');
			$this->Asset->create();
			if ($this->Asset->save($this->data)) {
				if($group_id==3){
					$this->Session->setFlash('Data berhasil ditambahkan','flash_success');
					$this->redirect(array('action'=>'index'));
				}else{
					$this->Session->setFlash('Data berhasil ditambahkan','flash_success');
					$this->redirect(array('action'=>'guru'));
				}
			
			} else {
				$this->Session->setFlash('Data tidak berhasil ditambahkan, silahkan coba lagi','flash_erorr');
			}
			$this->set('menuTabChild', 'indexAsset');
			
		}
		
		$listMataPelajaran = $this->Asset->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));
		$typeLab = $type;
		//$fieldsKelas = 'PasRombel.KETERANGAN,PasRombel.ID_RUANG_KELAS';
		//$listKelas = $this->Asset->PasRombel->find('list',array('fields'=>'PasRombel.nama','conditions'=>array('tahun_ajaran_id'=>$this->Session->read('tahunAjaran'))));
		$this->set(compact('listMataPelajaran','typeLab'));
		$this->layout = 'default_wow';

	}

	function edit_pages($id=null){
		if(!$id){
			if (isset($this->params['url']['que'])) {
				if($this->params['url']['que']=='add'){	
					if(!empty($this->data)){
						$this->Asset->Presentation->create();
						if ($this->Asset->Presentation->saveAll($this->data)) {
							$lastId=$this->Asset->Presentation->getInsertID();
							$recordPresentation = $this->Asset->Presentation->read(null, $lastId);
							$this->set('data',$recordPresentation);
						} else {
							$this->set('data','error');
						}
					}
					else{
						$this->set('data','isi');	
						$this->layout = 'default_blank';
					}
				}
			}else{

			}
		}else{
			$this->set('data',$this->Asset->Presentation->read(null, $id));
		}

		$this->layout = 'default_blank';
	}
	function add2($type = null) {
	
		if (!empty($this->data)) {
			
			$created_by = $this->data['Asset']['created_by'];
			$group_id = $this->Auth->user('group_id');
			$this->data['Asset']['author'] = $this->Auth->user('username');
			$this->data['Asset']['tahun_ajaran_id'] = $this->Session->read('tahunAjaran');
			$this->data['Asset']['semester'] = $this->Session->read('semester');
			$this->Asset->create();
			if ($this->Asset->save($this->data)) {
				if($group_id==3){
					$this->Session->setFlash('Data berhasil ditambahkan','flash_success');
					$this->redirect(array('action'=>'index'));
				}else{
					$this->Session->setFlash('Data berhasil ditambahkan','flash_success');
					$this->redirect(array('action'=>'guru'));
				}
			
			} else {
				$this->Session->setFlash('Data tidak berhasil ditambahkan, silahkan coba lagi','flash_erorr');
			}
			$this->set('menuTabChild', 'indexAsset');
			
		}
		
		$listMataPelajaran = $this->Asset->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));
		$listKelas = $this->Asset->Grade->find('list',array('fields'=>'Grade.name'));
		$typeLab = $type;
		//$fieldsKelas = 'PasRombel.KETERANGAN,PasRombel.ID_RUANG_KELAS';
		
		$this->set(compact('listMataPelajaran','typeLab','listKelas'));
	}

	function edit($id = null) {

		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Asset', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			
			if ($this->Asset->save($this->data)) {
				$this->Session->setFlash('Data berhasil ditambahkan','flash_success');
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash('Data tidak berhasil ditambahkan, silahkan coba lagi','flash_erorr');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Asset->read(null, $id);
		}
		$this->set('asset', $this->Asset->read(null, $id));
		$listMataPelajaran = $this->Asset->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));
		//$fieldsKelas = 'PasRombel.KETERANGAN,PasRombel.ID_RUANG_KELAS';
		$this->set(compact('listMataPelajaran'));
		$this->set('menuTabChild', 'indexAsset');
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Asset', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Asset->del($id)) {
			$this->Session->setFlash(__('Asset deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('menuTabChild', 'indexAsset');
	}


	function administrator_index() {
		$this->Asset->recursive = 0;
		$this->set('assets', $this->paginate());
	}

	function administrator_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Asset.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('asset', $this->Asset->read(null, $id));
	}

	function administrator_add() {
		if (!empty($this->data)) {
			$this->Asset->create();
			if ($this->Asset->save($this->data)) {
				$this->Session->setFlash(__('The Asset has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Asset could not be saved. Please, try again.', true));
			}
		}
	}

	function administrator_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Asset', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Asset->save($this->data)) {
				$this->Session->setFlash(__('The Asset has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Asset could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Asset->read(null, $id);
		}
	}

	function administrator_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Asset', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Asset->del($id)) {
			$this->Session->setFlash(__('Asset deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>