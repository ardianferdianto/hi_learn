<?php 
/* SVN FILE: $Id$ */
/* QuestionsController Test cases generated on: 2010-11-22 15:41:22 : 1290415282*/
App::import('Controller', 'Questions');

class TestQuestions extends QuestionsController {
	var $autoRender = false;
}

class QuestionsControllerTest extends CakeTestCase {
	var $Questions = null;

	function startTest() {
		$this->Questions = new TestQuestions();
		$this->Questions->constructClasses();
	}

	function testQuestionsControllerInstance() {
		$this->assertTrue(is_a($this->Questions, 'QuestionsController'));
	}

	function endTest() {
		unset($this->Questions);
	}
}
?>