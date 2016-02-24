<?php 
/* SVN FILE: $Id$ */
/* Englishse Fixture generated on: 2010-12-10 08:05:48 : 1291943148*/

class EnglishseFixture extends CakeTestFixture {
	var $name = 'Englishse';
	var $table = 'englishses';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'primary'),
		'words' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 200),
		'details' => array('type'=>'text', 'null' => true, 'default' => NULL),
		'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'words'  => 'Lorem ipsum dolor sit amet',
		'details'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'created'  => '2010-12-10 08:05:48',
		'modified'  => '2010-12-10 08:05:48'
	));
}
?>