<?php 
/* SVN FILE: $Id$ */
/* QuizzPoint Test cases generated on: 2010-11-22 15:41:04 : 1290415264*/
App::import('Model', 'QuizzPoint');

class QuizzPointTestCase extends CakeTestCase {
	var $QuizzPoint = null;
	var $fixtures = array('app.quizz_point', 'app.quizz');

	function startTest() {
		$this->QuizzPoint =& ClassRegistry::init('QuizzPoint');
	}

	function testQuizzPointInstance() {
		$this->assertTrue(is_a($this->QuizzPoint, 'QuizzPoint'));
	}

	function testQuizzPointFind() {
		$this->QuizzPoint->recursive = -1;
		$results = $this->QuizzPoint->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('QuizzPoint' => array(
			'id'  => 1,
			'siswa'  => 1,
			'points'  => 1,
			'details'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created'  => '2010-11-22 15:41:03',
			'modified'  => '2010-11-22 15:41:03',
			'quizz_id'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>