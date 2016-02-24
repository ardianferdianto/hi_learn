<?php 
/* SVN FILE: $Id$ */
/* FileTuga Test cases generated on: 2010-11-18 21:43:19 : 1290091399*/
App::import('Model', 'FileTuga');

class FileTugaTestCase extends CakeTestCase {
	var $FileTuga = null;
	var $fixtures = array('app.file_tuga', 'app.tugas');

	function startTest() {
		$this->FileTuga =& ClassRegistry::init('FileTuga');
	}

	function testFileTugaInstance() {
		$this->assertTrue(is_a($this->FileTuga, 'FileTuga'));
	}

	function testFileTugaFind() {
		$this->FileTuga->recursive = -1;
		$results = $this->FileTuga->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('FileTuga' => array(
			'id'  => 1,
			'tugas_id'  => 1,
			'siswa_id'  => 1,
			'description'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'file'  => 'Lorem ipsum dolor sit amet',
			'created'  => '2010-11-18 21:43:19',
			'modified'  => '2010-11-18 21:43:19'
		));
		$this->assertEqual($results, $expected);
	}
}
?>