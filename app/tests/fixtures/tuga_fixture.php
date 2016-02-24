<?php 
/* SVN FILE: $Id$ */
/* Tuga Fixture generated on: 2010-11-18 15:15:39 : 1290068139*/

class TugaFixture extends CakeTestFixture {
	var $name = 'Tuga';
	var $table = 'tugas';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'kelas' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'matapelajaran' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'title' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 32),
		'content' => array('type'=>'text', 'null' => false, 'default' => NULL),
		'start_date' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'expiration_date' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'kelas'  => 1,
		'matapelajaran'  => 1,
		'title'  => 'Lorem ipsum dolor sit amet',
		'content'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'start_date'  => '2010-11-18 15:15:39',
		'expiration_date'  => '2010-11-18 15:15:39'
	));
}
?>