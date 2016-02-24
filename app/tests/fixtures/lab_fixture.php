<?php 
/* SVN FILE: $Id$ */
/* Lab Fixture generated on: 2010-11-26 01:54:54 : 1290711294*/

class LabFixture extends CakeTestFixture {
	var $name = 'Lab';
	var $table = 'labs';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'kelas' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'matapelajaran' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'author' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'title' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'details' => array('type'=>'text', 'null' => true, 'default' => NULL),
		'file' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'created' => array('type'=>'date', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'date', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'kelas'  => 1,
		'matapelajaran'  => 1,
		'author'  => 1,
		'title'  => 'Lorem ipsum dolor sit amet',
		'details'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'file'  => 'Lorem ipsum dolor sit amet',
		'created'  => '2010-11-26',
		'modified'  => '2010-11-26'
	));
}
?>