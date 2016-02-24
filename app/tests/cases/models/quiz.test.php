<?php 
/* SVN FILE: $Id$ */
/* Quiz Test cases generated on: 2010-11-22 15:15:29 : 1290413729*/
App::import('Model', 'Quiz');

class QuizTestCase extends CakeTestCase {
	var $Quiz = null;
	var $fixtures = array('app.quiz', 'app.question');

	function startTest() {
		$this->Quiz =& ClassRegistry::init('Quiz');
	}

	function testQuizInstance() {
		$this->assertTrue(is_a($this->Quiz, 'Quiz'));
	}

	function testQuizFind() {
		$this->Quiz->recursive = -1;
		$results = $this->Quiz->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Quiz' => array(
			'id'  => 1,
			'author'  => 1,
			'question_id'  => 1,
			'matapelajaran'  => 1,
			'kelas'  => 1,
			'time'  => 'Lorem ipsum dolor sit amet',
			'details'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'published'  => 1,
			'created'  => '2010-11-22 15:15:29',
			'modified'  => '2010-11-22 15:15:29'
		));
		$this->assertEqual($results, $expected);
	}
}
?>