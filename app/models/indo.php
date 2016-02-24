<?php
class Indo extends AppModel {

	var $name = 'Indo';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasAndBelongsToMany = array(
		'Englishse' => array(
			'className' => 'Englishse',
			'joinTable' => 'englishses_indos',
			'foreignKey' => 'indo_id',
			'associationForeignKey' => 'englishse_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
?>