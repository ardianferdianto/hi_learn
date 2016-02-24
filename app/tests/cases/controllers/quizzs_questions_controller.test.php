<?php 
/* SVN FILE: $Id$ */
/* QuizzsQuestionsController Test cases generated on: 2011-11-27 01:33:20 : 1322332400*/
App::import('Controller', 'QuizzsQuestions');

class TestQuizzsQuestions extends QuizzsQuestionsController {
	var $autoRender = false;
}

class QuizzsQuestionsControllerTest extends CakeTestCase {
	var $QuizzsQuestions = null;

	function startTest() {
		$this->QuizzsQuestions = new TestQuizzsQuestions();
		$this->QuizzsQuestions->constructClasses();
	}

	function testQuizzsQuestionsControllerInstance() {
		$this->assertTrue(is_a($this->QuizzsQuestions, 'QuizzsQuestionsController'));
	}

	function endTest() {
		unset($this->QuizzsQuestions);
	}
}
?>