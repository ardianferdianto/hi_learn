<?php
class Englishse extends AppModel {

	var $name = 'Englishse';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasAndBelongsToMany = array(
		'Indo' => array(
			'className' => 'Indo',
			'joinTable' => 'englishses_indos',
			'foreignKey' => 'englishse_id',
			'associationForeignKey' => 'indo_id',
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