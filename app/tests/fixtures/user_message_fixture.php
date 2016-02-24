<?php 
/* SVN FILE: $Id$ */
/* UserMessage Fixture generated on: 2010-12-08 22:32:12 : 1291822332*/

class UserMessageFixture extends CakeTestFixture {
	var $name = 'UserMessage';
	var $table = 'user_messages';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'primary'),
		'from' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 20),
		'to' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 20),
		'message' => array('type'=>'text', 'null' => false, 'default' => NULL),
		'sent' => array('type'=>'integer', 'null' => false, 'default' => '0', 'length' => 1),
		'read' => array('type'=>'string', 'null' => false, 'default' => '0', 'length' => 1),
		'indexes' => array()
	);
	var $records = array(array(
		'id'  => 1,
		'from'  => 1,
		'to'  => 1,
		'message'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'sent'  => 1,
		'read'  => 'Lorem ipsum dolor sit ame'
	));
}
?>