<?php
class Pembelajaran extends AppModel {

	var $name = 'Pembelajaran';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Class' => array(
			'className' => 'Class',
			'foreignKey' => 'class_id',
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
		'Vendor' => array(
			'className' => 'Vendor',
			'foreignKey' => 'vendor_id',
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