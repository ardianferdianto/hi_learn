<?php 
/* SVN FILE: $Id$ */
/* Quizz Fixture generated on: 2010-11-22 15:40:22 : 1290415222*/

class QuizzFixture extends CakeTestFixture {
	var $name = 'Quizz';
	var $table = 'quizzs';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'author' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 32),
		'matapelajaran' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'kelas' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'time' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 32),
		'details' => array('type'=>'text', 'null' => false, 'default' => NULL),
		'published' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
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
}
?>