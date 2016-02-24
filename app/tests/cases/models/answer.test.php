<?php 
/* SVN FILE: $Id$ */
/* Answer Test cases generated on: 2010-11-22 15:12:37 : 1290413557*/
App::import('Model', 'Answer');

class AnswerTestCase extends CakeTestCase {
	var $Answer = null;
	var $fixtures = array('app.answer', 'app.question');

	function startTest() {
		$this->Answer =& ClassRegistry::init('Answer');
	}

	function testAnswerInstance() {
		$this->assertTrue(is_a($this->Answer, 'Answer'));
	}

	function testAnswerFind() {
		$this->Answer->recursive = -1;
		$results = $this->Answer->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Answer' => array(
			'id'  => 1,
			'question_id'  => 1,
			'details'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'true'  => 1,
			'created'  => '2010-11-22 15:12:37',
			'modified'  => '2010-11-22 15:12:37'
		));
		$this->assertEqual($results, $expected);
	}
}
?>