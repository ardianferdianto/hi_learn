<?php
class BooksController extends AppController {

	var $name = 'Books';
	var $helpers = array('Html', 'Form','Video');
	function beforeFilter() {
	    parent::beforeFilter(); 
	   //$this->Auth->allow('*');
	    $this->set('menuTab', 'perpus');
	    $this->set('menuTabChild', 'buku');
	}
	var $components = array('Filter');

function search(){

	$this->Book->recursive = 0;
	$filter = $this->Filter->process($this);
	$this->set('books', $this->paginate(null, $filter));
	$listCategory = $this->Book->Category->find('list',array('fields'=>'Category.name'));
	//$fieldsKelas = 'PasRombel.KETERANGAN,PasRombel.ID_RUANG_KELAS';
	
	//$this->set(compact('assets', $this->paginate()));
	$this->set(compact('listCategory'));
	//$this->set('menuTabChild', 'AssetFind');

}
function show_books(){
	
	Configure::write('debug', '0');
	$books = $this->Book->find('all', array('conditions' => array('Book.name LIKE' => $this->data['Book']['name'].'%')));
	
	$this->set(compact('books'));
	
	$this->render('show_books','ajax');
}
function books_view($id = null) {
	
	Configure::write('debug', '0');
	if(empty($book_id)) {
		if($this->data['Book']['name']) {
			$book = $this->Book->findByname($this->data['Book']['name']);
			if(isset($book['Book']['id'])){
				$book_id = $book['Book']['id'];
			} else {
				$this->set('nobook', true);
			}
		}
	};
	$this->set('books',$this->Book->find('all', array
	('conditions' => array('Book.id' => $book_id),'limit'=>1)));
	$this->render('books_view','ajax');
}
function view($id = null) {
	$this->Book->recursive = 1;
	if (!$id) {
		$this->flash(__('Invalid Book', true), array('action'=>'index'));
	}
	$this->set('book', $this->Book->read(null, $id));
}

}
?>