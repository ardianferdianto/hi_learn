<?php 
/* SVN FILE: $Id$ */
/* Englishse Test cases generated on: 2010-12-10 08:05:48 : 1291943148*/
App::import('Model', 'Englishse');

class EnglishseTestCase extends CakeTestCase {
	var $Englishse = null;
	var $fixtures = array('app.englishse');

	function startTest() {
		$this->Englishse =& ClassRegistry::init('Englishse');
	}

	function testEnglishseInstance() {
		$this->assertTrue(is_a($this->Englishse, 'Englishse'));
	}

	function testEnglishseFind() {
		$this->Englishse->recursive = -1;
		$results = $this->Englishse->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Englishse' => array(
			'id'  => 1,
			'words'  => 'Lorem ipsum dolor sit amet',
			'details'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created'  => '2010-12-10 08:05:48',
			'modified'  => '2010-12-10 08:05:48'
		));
		$this->assertEqual($results, $expected);
	}
}
?>