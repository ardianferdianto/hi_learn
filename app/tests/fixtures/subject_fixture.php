<?php 
/* SVN FILE: $Id$ */
/* Subject Fixture generated on: 2012-06-15 08:52:04 : 1339725124*/

class SubjectFixture extends CakeTestFixture {
	var $name = 'Subject';
	var $table = 'subjects';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 40, 'key' => 'primary'),
		'name' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 400),
		'grade' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 2),
		'type' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 1),
		'file_name' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'folder_name' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'comments' => array('type'=>'text', 'null' => false, 'default' => NULL),
		'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
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
}
?>