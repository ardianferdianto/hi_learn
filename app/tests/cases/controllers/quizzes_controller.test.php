<?php 
/* SVN FILE: $Id$ */
/* QuizzesController Test cases generated on: 2010-11-22 15:17:14 : 1290413834*/
App::import('Controller', 'Quizzes');

class TestQuizzes extends QuizzesController {
	var $autoRender = false;
}

class QuizzesControllerTest extends CakeTestCase {
	var $Quizzes = null;

	function startTest() {
		$this->Quizzes = new TestQuizzes();
		$this->Quizzes->constructClasses();
	}

	function testQuizzesControllerInstance() {
		$this->assertTrue(is_a($this->Quizzes, 'QuizzesController'));
	}

	function endTest() {
		unset($this->Quizzes);
	}
}
?>