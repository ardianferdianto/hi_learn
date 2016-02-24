<?php
class UserMessage extends AppModel {

	var $name = 'UserMessage';
	
	var $belongsTo = array(
		
		'SenderSiswa' => array(
			'className' => 'User',
			'foreignKey' => 'from',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'SenderGuru' => array(
			'className' => 'User',
			'foreignKey' => 'from',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ReceipentSiswa' => array(
			'className' => 'User',
			'foreignKey' => 'to',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GuruPas' => array(
			'className' => 'User',
			'foreignKey' => 'to',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'SiswaPas' => array(
			'className' => 'User',
			'foreignKey' => 'to',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ReceipentGuru' => array(
			'className' => 'User',
			'foreignKey' => 'to',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		
	);

	var $actsAs = array('MeioUpload' => array(
	       'file' => array(
	           'dir' => 'mail-attachment',
	           'create_directory' => false,
	           
	           
	       )
	     )
	 );

}
?>