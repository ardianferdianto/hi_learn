<?php 
/* SVN FILE: $Id$ */
/* FileTugasController Test cases generated on: 2010-11-18 21:43:38 : 1290091418*/
App::import('Controller', 'FileTugas');

class TestFileTugas extends FileTugasController {
	var $autoRender = false;
}

class FileTugasControllerTest extends CakeTestCase {
	var $FileTugas = null;

	function startTest() {
		$this->FileTugas = new TestFileTugas();
		$this->FileTugas->constructClasses();
	}

	function testFileTugasControllerInstance() {
		$this->assertTrue(is_a($this->FileTugas, 'FileTugasController'));
	}

	function endTest() {
		unset($this->FileTugas);
	}
}
?>