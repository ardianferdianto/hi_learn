<?php 
/* SVN FILE: $Id$ */
/* QuizzPointsController Test cases generated on: 2010-11-22 15:41:53 : 1290415313*/
App::import('Controller', 'QuizzPoints');

class TestQuizzPoints extends QuizzPointsController {
	var $autoRender = false;
}

class QuizzPointsControllerTest extends CakeTestCase {
	var $QuizzPoints = null;

	function startTest() {
		$this->QuizzPoints = new TestQuizzPoints();
		$this->QuizzPoints->constructClasses();
	}

	function testQuizzPointsControllerInstance() {
		$this->assertTrue(is_a($this->QuizzPoints, 'QuizzPointsController'));
	}

	function endTest() {
		unset($this->QuizzPoints);
	}
}
?>