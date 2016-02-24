<?php 
/* SVN FILE: $Id$ */
/* Pelajaran Fixture generated on: 2011-11-26 01:52:02 : 1322247122*/

class PelajaranFixture extends CakeTestFixture {
	var $name = 'Pelajaran';
	var $table = 'pelajarans';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'nama' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'nama'  => 'Lorem ipsum dolor sit amet',
		'created'  => '2011-11-26 01:52:02',
		'modified'  => '2011-11-26 01:52:02'
	));
}
?>