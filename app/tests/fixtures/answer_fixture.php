<?php 
/* SVN FILE: $Id$ */
/* Answer Fixture generated on: 2010-11-22 15:12:37 : 1290413557*/

class AnswerFixture extends CakeTestFixture {
	var $name = 'Answer';
	var $table = 'answers';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'question_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 32),
		'details' => array('type'=>'text', 'null' => false, 'default' => NULL),
		'true' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'question_id'  => 1,
		'details'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'true'  => 1,
		'created'  => '2010-11-22 15:12:37',
		'modified'  => '2010-11-22 15:12:37'
	));
}
?>