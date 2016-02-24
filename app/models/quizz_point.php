<?php
class QuizzPoint extends AppModel {

	var $name = 'QuizzPoint';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Quizz' => array(
			'className' => 'Quizz',
			'foreignKey' => 'quizz_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'siswa',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		
	);

}
?>