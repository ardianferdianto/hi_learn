<?php
class Asset extends AppModel {

	var $name = 'Asset';
	//public $actsAs = array('Search.Searchable');
	var $actsAs = array('MeioUpload' => array(
	       'file' => array(
	           'dir' => 'files/assets',
	           'create_directory' => false,
	           
	           
	       )
	     )
	 );
			
	
	
	var $belongsTo = array(
		'Pelajaran' => array(
		       'className' => 'Pelajaran',
		       'foreignKey'=> 'matapelajaran'
		),
		'Grade' => array(
		       'className' => 'Grade',
		       'foreignKey'=> 'kelas'
		),
		'User' => array(
		 	'className' => 'User',
		 	'foreignKey'=> 'author'
		),
		'Presentation' => array(
		 	'className' => 'Presentation',
		 	'foreignKey'=> 'presentation_id'
		)
	);
	
}
?>