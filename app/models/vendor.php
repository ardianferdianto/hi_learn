<?php
class Vendor extends AppModel {

	var $name = 'Vendor';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'Subject' => array(
			'className' => 'Subject',
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