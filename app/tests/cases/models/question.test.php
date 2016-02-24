<?php 
/* SVN FILE: $Id$ */
/* Question Test cases generated on: 2010-11-22 15:37:33 : 1290415053*/
App::import('Model', 'Question');

class QuestionTestCase extends CakeTestCase {
	var $Question = null;
	var $fixtures = array('app.question', 'app.quizz', 'app.answer');

	function startTest() {
		$this->Question =& ClassRegistry::init('Question');
	}

	function testQuestionInstance() {
		$this->assertTrue(is_a($this->Question, 'Question'));
	}

	function testQuestionFind() {
		$this->Question->recursive = -1;
		$results = $this->Question->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Question' => array(
			'id'  => 1,
			'quizz_id'  => 1,
			'question'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'images'  => 'Lorem ipsum dolor sit amet',
			'created'  => '2010-11-22 15:37:32',
			'modified'  => '2010-11-22 15:37:32'
		));
		$this->assertEqual($results, $expected);
	}
}
?>