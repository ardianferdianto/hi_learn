<?php 
/* SVN FILE: $Id$ */
/* EnglishsIndo Fixture generated on: 2010-12-10 08:03:11 : 1291942991*/

class EnglishsIndoFixture extends CakeTestFixture {
	var $name = 'EnglishsIndo';
	var $table = 'englishs_indos';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'primary'),
		'englishs_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 20),
		'indos_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 20),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'englishs_id'  => 1,
		'indos_id'  => 1
	));
}
?>