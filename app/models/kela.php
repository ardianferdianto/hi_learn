<?php
class Kela extends AppModel {

	var $name = 'Kela';
	//public $actsAs = array('Search.Searchable');
		
	
	
	var $belongsTo = array(
		
		'Grade' => array(
		       'className' => 'Grade',
		       'foreignKey'=> 'grade_id'
		),
		
	);

	var $hasMany = array(
		'Kela' => array(
			'className' => 'Kela',
			'foreignKey' => 'kelas',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
}
?>