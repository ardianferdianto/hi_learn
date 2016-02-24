<?php
class KelasController extends AppController {

	var $name = 'Kelas';
	var $uses = array('Kela');
	var $components = array('Auth', 'Acl','Filter');
	
	//var $components = array('');
	function beforeFilter() {
	    parent::beforeFilter();
		//$this->Auth->allow('logout','__getlic','__ceklicense','login');
		//$this->Auth->allow('logout','login');
		//$this->Auth->allow('*');

		//$this->set('menuTabChild', 'profile');
		if($this->action == 'add') {
		  $this->Auth->authenticate = $this->Kela;
		}
		if($this->action == 'edit') {
		  $this->Auth->authenticate = $this->Kela;
		}
		//$licInfo = $this->__getlic();
		//$this->__ceklicense($licInfo['licVal'],$licInfo['lickey']);
	}

	/*function __getlic(){
		$this->Kela->bindModel(
	    	array('belongsTo' =>
		    	array(
				'Profile' => array(
		             'className' => 'Profile',
		             'foreignKey'=> ''
		         )
		        )
		    )
		);

		$profils = $this->Kela->Profile->read(null, 1);
		$lickey = $profils['Profile']['license_key'];
		$licVal = $profils['Profile']['val_sync'];

		$license = array();
		$license['lickey'] = $lickey;
		$license['licVal'] = $licVal;
		//array_push($license, $lickey, $licVal);

		return $license;

	}

	function __ceklicense($getLic,$getIon){

		//Check License first!!!
		$zend_id = $this->getZendidLocal();
		$ion = $getIon;
		$get_lic = $getLic;
		//ion:1-6-1-1315771514-c4ca4238znd:M:NA22Q-RNVUA-6TP86-GD6ZNM:FC82D-K2SGF-5ASZ8-F2ED2

		$get_local_lic = 'ion:'.$ion.'znd:'.$zend_id;

		if ($ion == '1-112-3-sd44taufiq'){
			$get_local_lic = 'ion:'.$ion.'znd:'.$zend_id;
			//$lic_hashed = Security::hash($get_local_lic, null, true);
			$licgenerates = Security::hash($get_local_lic, null, true);
			$lic_hashed = substr($licgenerates, 0, 10);
		}else{
			$get_local_lic = 'ion:'.$ion.'znd:'.$zend_id;
			$lic_hashed = Security::hash($get_local_lic, null, true);
			//$licgenerates = Security::hash($get_local_lic, null, true);
			//$lic_hashed = substr($licgenerates, 0, 10);
		}

		//$lic_hashed = Security::hash($get_local_lic, null, true);

		if($get_lic != $lic_hashed){
			echo '<br>
			<b style="color:red;">Fatal error:</b>  <br>License yang anda gunakan <b>tidak valid!</b> atau <b>tidak legal!!</b>. Silahkan hubungi costumer support untuk keterangan lebih lanjut<br>';
			($this->webroot()) ? exit : NULL;

		}

	}
	function getZendidLocal(){

	$idZend = zend_get_id();

	$banyakIdZend = count($idZend);

	if($banyakIdZend > 1){

		$counttoreturn = $banyakIdZend - 1;
		$idZendSelected = $idZend[$counttoreturn];

	}else if($banyakIdZend == 1){
		$idZendSelected = $idZend;
	}else{
		$idZendSelected = null;
	}

	return $idZendSelected;

	}*/

	function index() {

		$this->Kela->recursive = 0;
		
		$filter = $this->Filter->process($this);

		$this->set('items', $this->Kela->find('all'));

		$this->set('menuTab', 'admin');
		$this->set('menuTabChild', 'listKela');
	}

	function siswa($idKelas = null) {
		if(!$idKelas){
			$this->Session->setFlash(__('Tidak ada Kelas.', true));
			$this->redirect(array('action'=>'home'));
		}else{

			$this->Kela->recursive = 1;


		    $this->paginate = array(
		    'conditions' => array('Kela.group_id'=>3,'Kela.kelas'=>$idKelas),
		    'limit' => 25,
			'order' => array(
				'Kela.created' => 'desc'
				)
			);

		    $users = $this->paginate('Kela');
		    $this->set(compact('users'));


			$this->set('menuTab', 'siswa');
			$this->set('menuTabChild', 'siswa');
		}
	}

	function presentase_siswa($idKelas = null) {
		if(!$idKelas){
			$this->Session->setFlash(__('Tidak ada Kelas.', true));
			$this->redirect(array('controller'=>'assets','action'=>'index'));
		}else{

			$this->Kela->recursive = 1;
			$conditions = array('Kela.group_id'=>3,'Kela.kelas'=>$idKelas);
			$users = $this->Kela->find('all',array('conditions'=>$conditions));

			$this->set(compact('users'));

			$this->set('idKelas', $idKelas);
			$this->set('menuTab', 'siswa');
			$this->set('menuTabChild', 'siswa');
		}
	}

	function guru() {


		$this->Kela->recursive = 1;


	    $this->paginate = array(
	    'conditions' => array('Kela.group_id'=>2),
	    'limit' => 25,
		'order' => array(
			'Kela.created' => 'desc'
			)
		);

	    $users = $this->paginate('Kela');
	    $this->set(compact('users'));


		$this->set('menuTab', 'guru');
		$this->set('menuTabChild', 'guru');
	}

	function presentase_guru() {


		$this->Kela->recursive = 1;


	    $this->paginate = array(
	    'conditions' => array('Kela.group_id'=>array(2,1)),
	    'limit' => 25,
		'order' => array(
			'Kela.created' => 'desc'
			)
		);

	    $users = $this->paginate('Kela');
	    $this->set(compact('users'));


		$this->set('menuTab', 'guru');
		$this->set('menuTabChild', 'guru');
	}



	function view($id = null) {
		$this->set('menuTab', 'user');
		if (!$id) {
			$this->Session->setFlash(__('Invalid Kela.', true));
			$this->redirect(array('action'=>'index'));
		}


		$this->set('user', $this->Kela->read(null, $id));
		$this->set('menuTabChild', 'profile');
	}

	function add() {
		$this->set('menuTab', 'user');
		if (!empty($this->data)) {

			$this->Kela->create();
			if ($this->Kela->save($this->data)) {
				$this->Session->setFlash('Kela berhasil ditambahkan','flash_success');
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash('Kela tidak berhasil ditambahkan silahkan ulangi','flash_erorr');
			}

		}
		
		$grades = $this->Kela->Grade->find('list');
		$this->set(compact('grades'));
		
		$this->set('menuTab', 'admin');
		$this->set('menuTabChild', 'useradd');

	}

	function edit($id = null) {
		$this->set('menuTab', 'user');
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Kela', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Kela->save($this->data)) {
				$this->Session->setFlash('Password berhasil dirubah','flash_success');
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash('Password tidak berhasil dirubah,Silahkan coba lagi','flash_erorr');
				//$this->redirect(array('action'=>'change_password'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Kela->read(null, $id);
		}
		
		$grades = $this->Kela->Grade->find('list');
		$this->set(compact('grades'));
		$this->set('menuTab', 'admin');
		$this->set('menuTabChild', 'listKela');
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Kela', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Kela->del($id)) {
			$this->Session->setFlash(__('Kela deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}


	function administrator_index() {
		$this->Kela->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function administrator_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Kela.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('user', $this->Kela->read(null, $id));
	}

	function administrator_add() {
		if (!empty($this->data)) {
			$this->Kela->create();
			if ($this->Kela->save($this->data)) {
				$this->Session->setFlash(__('The Kela has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Kela could not be saved. Please, try again.', true));
			}
		}
		$groups = $this->Kela->Group->find('list');
		$this->set(compact('groups'));
	}

	function administrator_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Kela', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Kela->save($this->data)) {
				$this->Session->setFlash(__('The Kela has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Kela could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Kela->read(null, $id);
		}
		$groups = $this->Kela->Group->find('list');
		$this->set(compact('groups'));
	}

	function administrator_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Kela', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Kela->del($id)) {
			$this->Session->setFlash(__('Kela deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

	function login() {

		$this->Kela->bindModel(
	    	array('belongsTo' =>
		    	array(
				'Profile' => array(
		             'className' => 'Profile',
		             'foreignKey'=> ''
		         )
		        )
		    )
		);

	    //Auth Magic
		if ($this->Auth->user()) {

			if (!empty($this->data)) {


				$profils = $this->Kela->Profile->read(null, 1);
				$profile_save = $profils['Profile']['name'];
				$this->Session->write('namaSekolah', $profile_save);

				//restrore session tahunajaran dan semester

				if($this->Auth->user('group_id')==3){

				}

				else{

				}





          }
       $this->redirect($this->Auth->redirect());
      }
	$this->layout='default_login';




	}

	function logout() {

		//destroy session
		$this->Session->destroy();
	   	$cookie = $this->Cookie->read('Kela');
		if($cookie)
            $this->Cookie->del('Kela');
        $this->Session->setFlash('Anda Berhasil Logout, Terima Kasih');
        $this->redirect($this->Auth->logout());

         //$this->Session->del('saveSiswaName', $saveSiswaName);
	}

	function home(){

		$this->Kela->recursive = 2;
		$this->set('menuTab', 'home');
		$this->set('menuTabChild', 'home');
		$this->layout='default_home';
	}

	function change_password(){
		$this->set('menuTab', 'user');
		$id = $this->Auth->user('id');
		$this->set('id',$id);
		$this->set('user', $this->Kela->read(null, $id));
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Kela', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Kela->save($this->data)) {
				$this->Session->setFlash('Password berhasil dirubah','flash_success');
				$this->redirect(array('action'=>'home'));
			} else {
				$this->Session->setFlash('Password tidak berhasil dirubah,Silahkan coba lagi','flash_erorr');
				$this->redirect(array('action'=>'home'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Kela->read(null, $id);

		}

		$this->set('menuTabChild', 'passwordChange');
	}




	function initDB() {
	    $group =& $this->Kela->Group;
	    //Allow admins to everything
	    $group->id = 1;
	    $this->Acl->allow($group, 'controllers');
	    //$this->Acl->deny($group, 'controllers/Questions/quizz');

	    //Defining what alloweing for Pegawai
	    //lastupdate 22des10
	        /*$group->id = 2;
	       $this->Acl->allow($group, 'controllers');
	       $this->Acl->allow($group, 'controllers/Categories');
	        $this->Acl->allow($group, 'controllers/Home');
	        $this->Acl->allow($group, 'controllers/Posts');
	        $this->Acl->allow($group, 'controllers/Reports');
	        $this->Acl->allow($group, 'controllers/Staffs');
	        $this->Acl->allow($group, 'controllers/Topics');
	        //$this->Acl->deny($group, 'controllers/Kelas/index');
	        //$this->Acl->deny($group, 'controllers/Kelas/edit');
	        //$this->Acl->deny($group, 'controllers/Kelas/delete');
	        //$this->Acl->deny($group, 'controllers/Kelas/add');
	        //$this->Acl->deny($group, 'controllers/KelaMessages/edit');
	        //$this->Acl->deny($group, 'controllers/KelaMessages/delete');

	        //$this->Acl->deny($group, 'controllers/Quizzs/take_quiz');
	        //$this->Acl->deny($group, 'controllers/Quizzs/do_quizz');
	        //$this->Acl->deny($group, 'controllers/Quizzs/results');
	        //$this->Acl->deny($group, 'controllers/Rents');
	        //$this->Acl->deny($group, 'controllers/QuizzPoints/delete');
	        //$this->Acl->deny($group, 'controllers/Questions/quizz');




	    //Defining what alloeing on Siswa
	        $group->id = 3;
	        $this->Acl->deny($group, 'controllers');
	        $this->Acl->allow($group, 'controllers/Categories');
	        $this->Acl->allow($group, 'controllers/Home');
	        $this->Acl->allow($group, 'controllers/Posts');
	        $this->Acl->allow($group, 'controllers/Reports');
	        $this->Acl->allow($group, 'controllers/Staffs');
	        $this->Acl->allow($group, 'controllers/Topics');
	        /*$this->Acl->allow($group, 'controllers/Kelas/siswa');
			$this->Acl->allow($group, 'controllers/Kelas/guru');

			$this->Acl->allow($group, 'controllers/QuizzPoints/history');
			$this->Acl->allow($group, 'controllers/QuizzPoints/print_history');
			$this->Acl->allow($group, 'controllers/QuizzPoints/export_xls');

			$this->Acl->allow($group, 'controllers/UraianAnswers/index');
			$this->Acl->allow($group, 'controllers/UraianAnswers/view');
			$this->Acl->allow($group, 'controllers/UraianAnswers/edit');

	        $this->Acl->allow($group, 'controllers/Assets/view');
	        $this->Acl->allow($group, 'controllers/Assets/index');
	        $this->Acl->allow($group, 'controllers/Assets/find');
	        $this->Acl->allow($group, 'controllers/FileTugas/index');
	        $this->Acl->allow($group, 'controllers/FileTugas/add');
	        $this->Acl->allow($group, 'controllers/FileTugas/edit');
	        $this->Acl->allow($group, 'controllers/Labs/index');
	        $this->Acl->allow($group, 'controllers/Labs/view');
	        $this->Acl->allow($group, 'controllers/Labs/find');

	        $this->Acl->allow($group, 'controllers/Pengumumen/index');
	        $this->Acl->allow($group, 'controllers/Pengumumen/view');
	        $this->Acl->allow($group, 'controllers/Pengumumen/home');
	        $this->Acl->allow($group, 'controllers/Tugas/index');
	        $this->Acl->allow($group, 'controllers/Tugas/view');
	        $this->Acl->allow($group, 'controllers/Kelas/home');
	        $this->Acl->allow($group, 'controllers/Kelas/view');
	        $this->Acl->allow($group, 'controllers/Kelas/change_password');
	         $this->Acl->allow($group, 'controllers/Kelas/login');
	          $this->Acl->allow($group, 'controllers/Kelas/logout');
	        $this->Acl->allow($group, 'controllers/KelaMessages');
	        $this->Acl->deny($group, 'controllers/KelaMessages/edit');
	        $this->Acl->deny($group, 'controllers/KelaMessages/delete');
	        $this->Acl->allow($group, 'controllers/Rents');
	        $this->Acl->allow($group, 'controllers/Quizzs/index');
	        $this->Acl->allow($group, 'controllers/Quizzs/take_quiz');
	        $this->Acl->allow($group, 'controllers/Quizzs/do_quizz');
	        $this->Acl->allow($group, 'controllers/Quizzs/results');
	        $this->Acl->allow($group, 'controllers/QuizzPoints');
	        $this->Acl->deny($group, 'controllers/QuizzPoints/delete');
	        $this->Acl->allow($group, 'controllers/Indos/index');
	        $this->Acl->allow($group, 'controllers/Indos/search');
	        $this->Acl->allow($group, 'controllers/Indos/show_words');
	        $this->Acl->allow($group, 'controllers/Indos/words_view');
	        $this->Acl->allow($group, 'controllers/Indos/view');
	        $this->Acl->allow($group, 'controllers/Englishses/index');
	        $this->Acl->allow($group, 'controllers/Englishses/search');
	        $this->Acl->allow($group, 'controllers/Englishses/show_words');
	        $this->Acl->allow($group, 'controllers/Englishses/words_view');
	        $this->Acl->allow($group, 'controllers/Englishses/view');
	        $this->Acl->allow($group, 'controllers/Englishses/view');
	        $this->Acl->allow($group, 'controllers/Books');

	        $this->Acl->allow($group, 'controllers/Labs/ebook');
	        $this->Acl->allow($group, 'controllers/Labs/lifeskill');
	        $this->Acl->allow($group, 'controllers/Labs/carachter');*/

	        //update  init DB per 15 august 2012


	        /*$this->Acl->allow($group, 'controllers/Subjects/home');
	        $this->Acl->allow($group, 'controllers/Subjects/kelas');
	        $this->Acl->allow($group, 'controllers/Subjects/ensiklopedia');

	        $this->Acl->allow($group, 'controllers/Labs/find_category');
	        $this->Acl->allow($group, 'controllers/Labs/view_thumb');
	        $this->Acl->allow($group, 'controllers/Labs/video');
	        $this->Acl->allow($group, 'controllers/Labs/find_category_video');
	        $this->Acl->allow($group, 'controllers/Labs/view_thumb_video');
	        $this->Acl->allow($group, 'controllers/Labs/view_video');

	        $this->Acl->allow($group, 'controllers/Pengumumen/home');
	        $this->Acl->allow($group, 'controllers/Pengumumen/category');
	        $this->Acl->allow($group, 'controllers/Pengumumen/view');
	        $this->Acl->allow($group, 'controllers/Pengumumen/add');

	        //ASSET
	        $this->Acl->allow($group, 'controllers/Assets/guru');

	        $this->Acl->allow($group, 'controllers/Assets/view');
	        $this->Acl->allow($group, 'controllers/Assets/edit');
	        $this->Acl->allow($group, 'controllers/Assets/add');
	        $this->Acl->allow($group, 'controllers/Assets/delete');

	        //BANK SOAL
	        $this->Acl->allow($group, 'controllers/Questions/home');
	        $this->Acl->allow($group, 'controllers/Questions/proses');
	        $this->Acl->allow($group, 'controllers/Questions/quizz');
	        $this->Acl->allow($group, 'controllers/Questions/view_pdf');
	        $this->Acl->allow($group, 'controllers/Questions/view_pdf');
	        $this->Acl->allow($group, 'controllers/Questions/viewquizz_pdf');


	        $this->Acl->allow($group, 'controllers/Kelas/presentase_siswa');*/



	        //$this->Acl->allow($group, 'controllers/Assets/siswa');

	        //$this->Acl->allow($group, 'controllers/Labs/view_thumb');







	}
}
?>