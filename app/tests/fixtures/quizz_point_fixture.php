<?php 
/* SVN FILE: $Id$ */
/* QuizzPoint Fixture generated on: 2010-11-22 15:41:03 : 1290415263*/

class QuizzPointFixture extends CakeTestFixture {
	var $name = 'QuizzPoint';
	var $table = 'quizz_points';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'siswa' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 32),
		'points' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'details' => array('type'=>'text', 'null' => true, 'default' => NULL),
		'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'quizz_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 32),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'siswa'  => 1,
		'points'  => 1,
		'details'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'created'  => '2010-11-22 15:41:03',
		'modified'  => '2010-11-22 15:41:03',
		'quizz_id'  => 1
	));
}
?>