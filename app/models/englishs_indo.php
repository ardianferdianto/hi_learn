<?php
class EnglishsIndo extends AppModel {

	var $name = 'EnglishsIndo';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Englishs' => array(
			'className' => 'Englishs',
			'foreignKey' => 'englishs_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Indos' => array(
			'className' => 'Indos',
			'foreignKey' => 'indos_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>