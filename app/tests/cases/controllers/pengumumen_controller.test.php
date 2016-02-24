<?php 
/* SVN FILE: $Id$ */
/* PengumumenController Test cases generated on: 2010-11-18 15:16:33 : 1290068193*/
App::import('Controller', 'Pengumumen');

class TestPengumumen extends PengumumenController {
	var $autoRender = false;
}

class PengumumenControllerTest extends CakeTestCase {
	var $Pengumumen = null;

	function startTest() {
		$this->Pengumumen = new TestPengumumen();
		$this->Pengumumen->constructClasses();
	}

	function testPengumumenControllerInstance() {
		$this->assertTrue(is_a($this->Pengumumen, 'PengumumenController'));
	}

	function endTest() {
		unset($this->Pengumumen);
	}
}
?>