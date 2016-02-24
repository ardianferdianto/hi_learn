<?php 
/* SVN FILE: $Id$ */
/* Profile Test cases generated on: 2011-11-28 19:30:35 : 1322483435*/
App::import('Model', 'Profile');

class ProfileTestCase extends CakeTestCase {
	var $Profile = null;
	var $fixtures = array('app.profile');

	function startTest() {
		$this->Profile =& ClassRegistry::init('Profile');
	}

	function testProfileInstance() {
		$this->assertTrue(is_a($this->Profile, 'Profile'));
	}

	function testProfileFind() {
		$this->Profile->recursive = -1;
		$results = $this->Profile->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Profile' => array(
			'id'  => 1,
			'name'  => 'Lorem ipsum dolor sit amet',
			'alamat'  => 'Lorem ipsum dolor sit amet',
			'no_tlp'  => 'Lorem ipsum dolor sit amet',
			'tgl_berdiri'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'status'  => 1,
			'email'  => 'Lorem ipsum dolor sit amet',
			'license_key'  => 'Lorem ipsum dolor sit amet',
			'val_sync'  => 'Lorem ipsum dolor sit amet',
			'image'  => 'Lorem ipsum dolor sit amet',
			'created'  => '2011-11-28 19:30:35',
			'modified'  => '2011-11-28 19:30:35'
		));
		$this->assertEqual($results, $expected);
	}
}
?>