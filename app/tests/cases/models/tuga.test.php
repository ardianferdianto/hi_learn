<?php 
/* SVN FILE: $Id$ */
/* Tuga Test cases generated on: 2010-11-18 15:15:39 : 1290068139*/
App::import('Model', 'Tuga');

class TugaTestCase extends CakeTestCase {
	var $Tuga = null;
	var $fixtures = array('app.tuga');

	function startTest() {
		$this->Tuga =& ClassRegistry::init('Tuga');
	}

	function testTugaInstance() {
		$this->assertTrue(is_a($this->Tuga, 'Tuga'));
	}

	function testTugaFind() {
		$this->Tuga->recursive = -1;
		$results = $this->Tuga->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Tuga' => array(
			'id'  => 1,
			'kelas'  => 1,
			'matapelajaran'  => 1,
			'title'  => 'Lorem ipsum dolor sit amet',
			'content'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'start_date'  => '2010-11-18 15:15:39',
			'expiration_date'  => '2010-11-18 15:15:39'
		));
		$this->assertEqual($results, $expected);
	}
}
?>