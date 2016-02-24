<?php 
/* SVN FILE: $Id$ */
/* UraianAnswer Fixture generated on: 2011-11-27 09:46:22 : 1322361982*/

class UraianAnswerFixture extends CakeTestFixture {
	var $name = 'UraianAnswer';
	var $table = 'uraian_answers';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 60, 'key' => 'primary'),
		'user_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 40),
		'question_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 40),
		'quizz_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 40),
		'Jawaban' => array('type'=>'text', 'null' => false, 'default' => NULL),
		'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'user_id'  => 1,
		'question_id'  => 1,
		'quizz_id'  => 1,
		'Jawaban'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'created'  => '2011-11-27 09:46:22',
		'modified'  => '2011-11-27 09:46:22'
	));
}
?>