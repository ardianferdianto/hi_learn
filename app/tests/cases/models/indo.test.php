<?php 
/* SVN FILE: $Id$ */
/* Indo Test cases generated on: 2010-12-10 08:06:20 : 1291943180*/
App::import('Model', 'Indo');

class IndoTestCase extends CakeTestCase {
	var $Indo = null;
	var $fixtures = array('app.indo');

	function startTest() {
		$this->Indo =& ClassRegistry::init('Indo');
	}

	function testIndoInstance() {
		$this->assertTrue(is_a($this->Indo, 'Indo'));
	}

	function testIndoFind() {
		$this->Indo->recursive = -1;
		$results = $this->Indo->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Indo' => array(
			'id'  => 1,
			'words'  => 'Lorem ipsum dolor sit amet',
			'details'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created'  => '2010-12-10 08:06:19',
			'modified'  => '2010-12-10 08:06:19'
		));
		$this->assertEqual($results, $expected);
	}
}
?>