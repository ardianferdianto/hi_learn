<?php
class Tuga extends AppModel {

	var $name = 'Tuga';
	
	var $hasMany = array(
		'FileTuga' => array(
			'className' => 'FileTuga',
			'foreignKey' => 'tugas_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	var $belongsTo = array(
		'Pelajaran' => array(
		       'className' => 'Pelajaran',
		       
		),
		'Kela' => array(
		    'className' => 'Kela',
		    'foreignKey'=> 'kelas'
		)
	);
}
?>