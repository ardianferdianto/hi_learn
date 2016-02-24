<?php 
/* SVN FILE: $Id$ */
/* EnglishsesController Test cases generated on: 2010-12-10 08:06:42 : 1291943202*/
App::import('Controller', 'Englishses');

class TestEnglishses extends EnglishsesController {
	var $autoRender = false;
}

class EnglishsesControllerTest extends CakeTestCase {
	var $Englishses = null;

	function startTest() {
		$this->Englishses = new TestEnglishses();
		$this->Englishses->constructClasses();
	}

	function testEnglishsesControllerInstance() {
		$this->assertTrue(is_a($this->Englishses, 'EnglishsesController'));
	}

	function endTest() {
		unset($this->Englishses);
	}
}
?>