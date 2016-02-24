<?php 
/* SVN FILE: $Id$ */
/* TugasController Test cases generated on: 2010-11-18 15:16:42 : 1290068202*/
App::import('Controller', 'Tugas');

class TestTugas extends TugasController {
	var $autoRender = false;
}

class TugasControllerTest extends CakeTestCase {
	var $Tugas = null;

	function startTest() {
		$this->Tugas = new TestTugas();
		$this->Tugas->constructClasses();
	}

	function testTugasControllerInstance() {
		$this->assertTrue(is_a($this->Tugas, 'TugasController'));
	}

	function endTest() {
		unset($this->Tugas);
	}
}
?>