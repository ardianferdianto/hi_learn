<?php 
/* SVN FILE: $Id$ */
/* Asset Test cases generated on: 2010-11-18 15:14:46 : 1290068086*/
App::import('Model', 'Asset');

class AssetTestCase extends CakeTestCase {
	var $Asset = null;
	var $fixtures = array('app.asset');

	function startTest() {
		$this->Asset =& ClassRegistry::init('Asset');
	}

	function testAssetInstance() {
		$this->assertTrue(is_a($this->Asset, 'Asset'));
	}

	function testAssetFind() {
		$this->Asset->recursive = -1;
		$results = $this->Asset->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Asset' => array(
			'id'  => 1,
			'kelas'  => 1,
			'matapelajaran'  => 1,
			'author'  => 1,
			'title'  => 'Lorem ipsum dolor sit amet',
			'content'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'start_date'  => '2010-11-18 15:14:46',
			'modified_date'  => '2010-11-18 15:14:46'
		));
		$this->assertEqual($results, $expected);
	}
}
?>