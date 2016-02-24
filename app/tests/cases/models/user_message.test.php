<?php 
/* SVN FILE: $Id$ */
/* UserMessage Test cases generated on: 2010-12-08 22:32:12 : 1291822332*/
App::import('Model', 'UserMessage');

class UserMessageTestCase extends CakeTestCase {
	var $UserMessage = null;
	var $fixtures = array('app.user_message');

	function startTest() {
		$this->UserMessage =& ClassRegistry::init('UserMessage');
	}

	function testUserMessageInstance() {
		$this->assertTrue(is_a($this->UserMessage, 'UserMessage'));
	}

	function testUserMessageFind() {
		$this->UserMessage->recursive = -1;
		$results = $this->UserMessage->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('UserMessage' => array(
			'id'  => 1,
			'from'  => 1,
			'to'  => 1,
			'message'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'sent'  => 1,
			'read'  => 'Lorem ipsum dolor sit ame'
		));
		$this->assertEqual($results, $expected);
	}
}
?>