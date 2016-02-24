<?php 
/* SVN FILE: $Id$ */
/* Profile Fixture generated on: 2011-11-28 19:30:35 : 1322483435*/

class ProfileFixture extends CakeTestFixture {
	var $name = 'Profile';
	var $table = 'profiles';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'alamat' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'no_tlp' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 32),
		'tgl_berdiri' => array('type'=>'text', 'null' => false, 'default' => NULL, 'length' => 4),
		'status' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 2),
		'email' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 32),
		'license_key' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'val_sync' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'image' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 300),
		'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'name'  => 'Lorem ipsum dolor sit amet',
		'alamat'  => 'Lorem ipsum dolor sit amet',
		'no_tlp'  => 'Lorem ipsum dolor sit amet',
		'tgl_berdiri'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'status'  => 1,
		'email'  => 'Lorem ipsum dolor sit amet',
		'license_key'  => 'Lorem ipsum dolor sit amet',
		'val_sync'  => 'Lorem ipsum dolor sit amet',
		'image'  => 'Lorem ipsum dolor sit amet',
		'created'  => '2011-11-28 19:30:35',
		'modified'  => '2011-11-28 19:30:35'
	));
}
?>