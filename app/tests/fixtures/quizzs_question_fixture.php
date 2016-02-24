<?php 
/* SVN FILE: $Id$ */
/* QuizzsQuestion Fixture generated on: 2011-11-27 01:33:06 : 1322332386*/

class QuizzsQuestionFixture extends CakeTestFixture {
	var $name = 'QuizzsQuestion';
	var $table = 'quizzs_questions';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 50, 'key' => 'primary'),
		'quizz_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 50),
		'question_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'quizz_id'  => 1,
		'question_id'  => 1,
		'created'  => '2011-11-27 01:33:06',
		'modified'  => '2011-11-27 01:33:06'
	));
}
?>