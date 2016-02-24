<?php 
/* SVN FILE: $Id$ */
/* Pelajaran Test cases generated on: 2011-11-26 01:52:02 : 1322247122*/
App::import('Model', 'Pelajaran');

class PelajaranTestCase extends CakeTestCase {
	var $Pelajaran = null;
	var $fixtures = array('app.pelajaran', 'app.quizz');

	function startTest() {
		$this->Pelajaran =& ClassRegistry::init('Pelajaran');
	}

	function testPelajaranInstance() {
		$this->assertTrue(is_a($this->Pelajaran, 'Pelajaran'));
	}

	function testPelajaranFind() {
		$this->Pelajaran->recursive = -1;
		$results = $this->Pelajaran->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Pelajaran' => array(
			'id'  => 1,
			'nama'  => 'Lorem ipsum dolor sit amet',
			'created'  => '2011-11-26 01:52:02',
			'modified'  => '2011-11-26 01:52:02'
		));
		$this->assertEqual($results, $expected);
	}
}
?>