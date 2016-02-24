<?php 
/* SVN FILE: $Id$ */
/* Lab Test cases generated on: 2010-11-26 01:54:55 : 1290711295*/
App::import('Model', 'Lab');

class LabTestCase extends CakeTestCase {
	var $Lab = null;
	var $fixtures = array('app.lab');

	function startTest() {
		$this->Lab =& ClassRegistry::init('Lab');
	}

	function testLabInstance() {
		$this->assertTrue(is_a($this->Lab, 'Lab'));
	}

	function testLabFind() {
		$this->Lab->recursive = -1;
		$results = $this->Lab->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Lab' => array(
			'id'  => 1,
			'kelas'  => 1,
			'matapelajaran'  => 1,
			'author'  => 1,
			'title'  => 'Lorem ipsum dolor sit amet',
			'details'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'file'  => 'Lorem ipsum dolor sit amet',
			'created'  => '2010-11-26',
			'modified'  => '2010-11-26'
		));
		$this->assertEqual($results, $expected);
	}
}
?>