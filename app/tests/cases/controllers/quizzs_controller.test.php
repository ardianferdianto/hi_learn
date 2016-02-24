<?php 
/* SVN FILE: $Id$ */
/* QuizzsController Test cases generated on: 2010-11-22 15:41:34 : 1290415294*/
App::import('Controller', 'Quizzs');

class TestQuizzs extends QuizzsController {
	var $autoRender = false;
}

class QuizzsControllerTest extends CakeTestCase {
	var $Quizzs = null;

	function startTest() {
		$this->Quizzs = new TestQuizzs();
		$this->Quizzs->constructClasses();
	}

	function testQuizzsControllerInstance() {
		$this->assertTrue(is_a($this->Quizzs, 'QuizzsController'));
	}

	function endTest() {
		unset($this->Quizzs);
	}
}
?>