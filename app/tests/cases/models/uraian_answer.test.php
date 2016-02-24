<?php 
/* SVN FILE: $Id$ */
/* UraianAnswer Test cases generated on: 2011-11-27 09:46:22 : 1322361982*/
App::import('Model', 'UraianAnswer');

class UraianAnswerTestCase extends CakeTestCase {
	var $UraianAnswer = null;
	var $fixtures = array('app.uraian_answer', 'app.user', 'app.question', 'app.quizz');

	function startTest() {
		$this->UraianAnswer =& ClassRegistry::init('UraianAnswer');
	}

	function testUraianAnswerInstance() {
		$this->assertTrue(is_a($this->UraianAnswer, 'UraianAnswer'));
	}

	function testUraianAnswerFind() {
		$this->UraianAnswer->recursive = -1;
		$results = $this->UraianAnswer->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('UraianAnswer' => array(
			'id'  => 1,
			'user_id'  => 1,
			'question_id'  => 1,
			'quizz_id'  => 1,
			'Jawaban'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created'  => '2011-11-27 09:46:22',
			'modified'  => '2011-11-27 09:46:22'
		));
		$this->assertEqual($results, $expected);
	}
}
?>