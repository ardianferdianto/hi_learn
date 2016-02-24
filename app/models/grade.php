<?php
class Grade extends AppModel {

	var $name = 'Grade';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'Subject' => array(
			'className' => 'Subject',
			'foreignKey' => 'grade_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		
		),

		'Question' => array(
			'className' => 'Question',
			'foreignKey' => 'kelas',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		
		),
		
		
	);

}
?>