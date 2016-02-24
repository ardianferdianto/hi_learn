<?php 
/* SVN FILE: $Id$ */
/* LabsController Test cases generated on: 2010-11-26 01:55:05 : 1290711305*/
App::import('Controller', 'Labs');

class TestLabs extends LabsController {
	var $autoRender = false;
}

class LabsControllerTest extends CakeTestCase {
	var $Labs = null;

	function startTest() {
		$this->Labs = new TestLabs();
		$this->Labs->constructClasses();
	}

	function testLabsControllerInstance() {
		$this->assertTrue(is_a($this->Labs, 'LabsController'));
	}

	function endTest() {
		unset($this->Labs);
	}
}
?>