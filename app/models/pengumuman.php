<?php
class Pengumuman extends AppModel {

	var $name = 'Pengumuman';
	var $useTable = 'pengumumans';

	var $belongsTo = array(
		
		'User' => array(
		       'className' => 'User',
		       'foreignKey'=> 'user_id'
		   ),
	);

	var $actsAs = array('MeioUpload' => array(
	       'file' => array(
	           'dir' => 'pengumuman-atachment',
	           'create_directory' => false,
	           
	           
	       )
	     )
	 );

}
?>