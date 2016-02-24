<?php 
/* SVN FILE: $Id$ */
/* EnglishsIndo Test cases generated on: 2010-12-10 08:03:11 : 1291942991*/
App::import('Model', 'EnglishsIndo');

class EnglishsIndoTestCase extends CakeTestCase {
	var $EnglishsIndo = null;
	var $fixtures = array('app.englishs_indo', 'app.englishs', 'app.indos');

	function startTest() {
		$this->EnglishsIndo =& ClassRegistry::init('EnglishsIndo');
	}

	function testEnglishsIndoInstance() {
		$this->assertTrue(is_a($this->EnglishsIndo, 'EnglishsIndo'));
	}

	function testEnglishsIndoFind() {
		$this->EnglishsIndo->recursive = -1;
		$results = $this->EnglishsIndo->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('EnglishsIndo' => array(
			'id'  => 1,
			'englishs_id'  => 1,
			'indos_id'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>