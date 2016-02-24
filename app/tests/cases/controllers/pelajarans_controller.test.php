<?php 
/* SVN FILE: $Id$ */
/* PelajaransController Test cases generated on: 2011-11-26 01:52:14 : 1322247134*/
App::import('Controller', 'Pelajarans');

class TestPelajarans extends PelajaransController {
	var $autoRender = false;
}

class PelajaransControllerTest extends CakeTestCase {
	var $Pelajarans = null;

	function startTest() {
		$this->Pelajarans = new TestPelajarans();
		$this->Pelajarans->constructClasses();
	}

	function testPelajaransControllerInstance() {
		$this->assertTrue(is_a($this->Pelajarans, 'PelajaransController'));
	}

	function endTest() {
		unset($this->Pelajarans);
	}
}
?>