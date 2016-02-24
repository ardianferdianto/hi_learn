<?php 
/* SVN FILE: $Id$ */
/* Asset Fixture generated on: 2010-11-18 15:14:46 : 1290068086*/

class AssetFixture extends CakeTestFixture {
	var $name = 'Asset';
	var $table = 'assets';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'kelas' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'matapelajaran' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'author' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'title' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 32),
		'content' => array('type'=>'text', 'null' => false, 'default' => NULL),
		'start_date' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modified_date' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'kelas'  => 1,
		'matapelajaran'  => 1,
		'author'  => 1,
		'title'  => 'Lorem ipsum dolor sit amet',
		'content'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'start_date'  => '2010-11-18 15:14:46',
		'modified_date'  => '2010-11-18 15:14:46'
	));
}
?>