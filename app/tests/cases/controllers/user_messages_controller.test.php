<?php 
/* SVN FILE: $Id$ */
/* UserMessagesController Test cases generated on: 2010-12-08 22:32:23 : 1291822343*/
App::import('Controller', 'UserMessages');

class TestUserMessages extends UserMessagesController {
	var $autoRender = false;
}

class UserMessagesControllerTest extends CakeTestCase {
	var $UserMessages = null;

	function startTest() {
		$this->UserMessages = new TestUserMessages();
		$this->UserMessages->constructClasses();
	}

	function testUserMessagesControllerInstance() {
		$this->assertTrue(is_a($this->UserMessages, 'UserMessagesController'));
	}

	function endTest() {
		unset($this->UserMessages);
	}
}
?>