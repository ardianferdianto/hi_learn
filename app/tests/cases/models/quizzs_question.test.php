<?php 
/* SVN FILE: $Id$ */
/* QuizzsQuestion Test cases generated on: 2011-11-27 01:33:06 : 1322332386*/
App::import('Model', 'QuizzsQuestion');

class QuizzsQuestionTestCase extends CakeTestCase {
	var $QuizzsQuestion = null;
	var $fixtures = array('app.quizzs_question', 'app.quizz', 'app.question');

	function startTest() {
		$this->QuizzsQuestion =& ClassRegistry::init('QuizzsQuestion');
	}

	function testQuizzsQuestionInstance() {
		$this->assertTrue(is_a($this->QuizzsQuestion, 'QuizzsQuestion'));
	}

	function testQuizzsQuestionFind() {
		$this->QuizzsQuestion->recursive = -1;
		$results = $this->QuizzsQuestion->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('QuizzsQuestion' => array(
			'id'  => 1,
			'quizz_id'  => 1,
			'question_id'  => 1,
			'created'  => '2011-11-27 01:33:06',
			'modified'  => '2011-11-27 01:33:06'
		));
		$this->assertEqual($results, $expected);
	}
}
?>