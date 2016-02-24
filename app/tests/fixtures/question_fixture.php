<?php 
/* SVN FILE: $Id$ */
/* Question Fixture generated on: 2010-11-22 15:37:32 : 1290415052*/

class QuestionFixture extends CakeTestFixture {
	var $name = 'Question';
	var $table = 'questions';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'quizz_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 32),
		'question' => array('type'=>'text', 'null' => false, 'default' => NULL),
		'images' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'quizz_id'  => 1,
		'question'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'images'  => 'Lorem ipsum dolor sit amet',
		'created'  => '2010-11-22 15:37:32',
		'modified'  => '2010-11-22 15:37:32'
	));
}
?>