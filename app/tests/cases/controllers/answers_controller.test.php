<?php 
/* SVN FILE: $Id$ */
/* AnswersController Test cases generated on: 2010-11-22 15:16:48 : 1290413808*/
App::import('Controller', 'Answers');

class TestAnswers extends AnswersController {
	var $autoRender = false;
}

class AnswersControllerTest extends CakeTestCase {
	var $Answers = null;

	function startTest() {
		$this->Answers = new TestAnswers();
		$this->Answers->constructClasses();
	}

	function testAnswersControllerInstance() {
		$this->assertTrue(is_a($this->Answers, 'AnswersController'));
	}

	function endTest() {
		unset($this->Answers);
	}
}
?>