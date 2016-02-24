<?php 
/* SVN FILE: $Id$ */
/* IndosController Test cases generated on: 2010-12-10 08:07:04 : 1291943224*/
App::import('Controller', 'Indos');

class TestIndos extends IndosController {
	var $autoRender = false;
}

class IndosControllerTest extends CakeTestCase {
	var $Indos = null;

	function startTest() {
		$this->Indos = new TestIndos();
		$this->Indos->constructClasses();
	}

	function testIndosControllerInstance() {
		$this->assertTrue(is_a($this->Indos, 'IndosController'));
	}

	function endTest() {
		unset($this->Indos);
	}
}
?>