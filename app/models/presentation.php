<?php
class Presentation extends AppModel {

	var $name = 'Presentation';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'Asset' => array(
			'className' => 'Asset',
			'foreignKey' => 'presentation_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		
		)		
	);

}
?>