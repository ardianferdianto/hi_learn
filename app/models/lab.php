<?php
class Lab extends AppModel {

	var $name = 'Lab';
	var $actsAs = array('MeioUpload' => array(
	       'file' => array(
	           'dir' => 'files/labs',
	           'create_directory' => false,
	           
	           
	       )
	     )
	 );
	var $belongsTo = array(
		'Pelajaran' => array(
	      'className' => 'Pelajaran',
	      'foreignKey'=> 'matapelajaran'
	   	),
		'User' => array(
		 'className' => 'User',
		 'foreignKey'=> 'author'
		),
		'Category' => array(
		 'className' => 'Category',
		 'foreignKey'=> 'type'
		)
	);

}
?>