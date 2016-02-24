<?php 
/* SVN FILE: $Id$ */
/* SubjectsController Test cases generated on: 2012-06-15 08:52:20 : 1339725140*/
App::import('Controller', 'Subjects');

class TestSubjects extends SubjectsController {
	var $autoRender = false;
}

class SubjectsControllerTest extends CakeTestCase {
	var $Subjects = null;

	function startTest() {
		$this->Subjects = new TestSubjects();
		$this->Subjects->constructClasses();
	}

	function testSubjectsControllerInstance() {
		$this->assertTrue(is_a($this->Subjects, 'SubjectsController'));
	}

	function endTest() {
		unset($this->Subjects);
	}
}
?>