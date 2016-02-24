<?php 
/* SVN FILE: $Id$ */
/* FileTuga Fixture generated on: 2010-11-18 21:43:19 : 1290091399*/

class FileTugaFixture extends CakeTestFixture {
	var $name = 'FileTuga';
	var $table = 'file_tugas';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'tugas_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'siswa_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 30),
		'description' => array('type'=>'text', 'null' => true, 'default' => NULL),
		'file' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 32),
		'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'tugas_id'  => 1,
		'siswa_id'  => 1,
		'description'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'file'  => 'Lorem ipsum dolor sit amet',
		'created'  => '2010-11-18 21:43:19',
		'modified'  => '2010-11-18 21:43:19'
	));
}
?>