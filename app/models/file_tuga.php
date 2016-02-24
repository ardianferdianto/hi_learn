<?php
class FileTuga extends AppModel {

	var $name = 'FileTuga';
	
	var $actsAs = array('MeioUpload' => array(
	       'file' => array(
	           'dir' => 'files/tugas',
	           'create_directory' => false,
	           
	           
	       )
	     )
	 );

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Tuga' => array(
			'className' => 'Tuga',
			'foreignKey' => 'tugas_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'siswa_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		/*'SiswaPas' => array(
			'className' => 'SiswaPas',
			'foreignKey' => 'siswa_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)*/
	);

}
?>