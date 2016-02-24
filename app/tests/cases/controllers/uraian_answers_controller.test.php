<?php 
/* SVN FILE: $Id$ */
/* UraianAnswersController Test cases generated on: 2011-11-27 09:46:33 : 1322361993*/
App::import('Controller', 'UraianAnswers');

class TestUraianAnswers extends UraianAnswersController {
	var $autoRender = false;
}

class UraianAnswersControllerTest extends CakeTestCase {
	var $UraianAnswers = null;

	function startTest() {
		$this->UraianAnswers = new TestUraianAnswers();
		$this->UraianAnswers->constructClasses();
	}

	function testUraianAnswersControllerInstance() {
		$this->assertTrue(is_a($this->UraianAnswers, 'UraianAnswersController'));
	}

	function endTest() {
		unset($this->UraianAnswers);
	}
}
?>