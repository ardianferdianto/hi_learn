<?php 
/* SVN FILE: $Id$ */
/* Quizz Test cases generated on: 2010-11-22 15:40:23 : 1290415223*/
App::import('Model', 'Quizz');

class QuizzTestCase extends CakeTestCase {
	var $Quizz = null;
	var $fixtures = array('app.quizz', 'app.question', 'app.quizz_point');

	function startTest() {
		$this->Quizz =& ClassRegistry::init('Quizz');
	}

	function testQuizzInstance() {
		$this->assertTrue(is_a($this->Quizz, 'Quizz'));
	}

	function testQuizzFind() {
		$this->Quizz->recursive = -1;
		$results = $this->Quizz->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Quizz' => array(
			'id'  => 1,
			'author'  => 1,
			'matapelajaran'  => 1,
			'kelas'  => 1,
			'time'  => 'Lorem ipsum dolor sit amet',
			'details'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'published'  => 1,
			'created'  => '2010-11-22 15:40:22',
			'modified'  => '2010-11-22 15:40:22'
		));
		$this->assertEqual($results, $expected);
	}
}
?>