<?php 
/* SVN FILE: $Id$ */
/* Pengumuman Test cases generated on: 2010-11-18 15:15:23 : 1290068123*/
App::import('Model', 'Pengumuman');

class PengumumanTestCase extends CakeTestCase {
	var $Pengumuman = null;
	var $fixtures = array('app.pengumuman');

	function startTest() {
		$this->Pengumuman =& ClassRegistry::init('Pengumuman');
	}

	function testPengumumanInstance() {
		$this->assertTrue(is_a($this->Pengumuman, 'Pengumuman'));
	}

	function testPengumumanFind() {
		$this->Pengumuman->recursive = -1;
		$results = $this->Pengumuman->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Pengumuman' => array(
			'id'  => 1,
			'scope'  => 1,
			'title'  => 'Lorem ipsum dolor sit amet',
			'content'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'start_date'  => '2010-11-18 15:15:23',
			'expiration_date'  => '2010-11-18 15:15:23'
		));
		$this->assertEqual($results, $expected);
	}
}
?>