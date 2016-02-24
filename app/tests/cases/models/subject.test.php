<?php 
/* SVN FILE: $Id$ */
/* Subject Test cases generated on: 2012-06-15 08:52:04 : 1339725124*/
App::import('Model', 'Subject');

class SubjectTestCase extends CakeTestCase {
	var $Subject = null;
	var $fixtures = array('app.subject');

	function startTest() {
		$this->Subject =& ClassRegistry::init('Subject');
	}

	function testSubjectInstance() {
		$this->assertTrue(is_a($this->Subject, 'Subject'));
	}

	function testSubjectFind() {
		$this->Subject->recursive = -1;
		$results = $this->Subject->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Subject' => array(
			'id'  => 1,
			'name'  => 'Lorem ipsum dolor sit amet',
			'grade'  => 1,
			'type'  => 1,
			'file_name'  => 'Lorem ipsum dolor sit amet',
			'folder_name'  => 'Lorem ipsum dolor sit amet',
			'comments'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created'  => '2012-06-15 08:52:04',
			'modified'  => '2012-06-15 08:52:04'
		));
		$this->assertEqual($results, $expected);
	}
}
?>