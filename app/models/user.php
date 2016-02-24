<?php
class User extends AppModel {

	var $name = 'User';
	var $actsAs = array('Acl' => array('requester'));

	function parentNode() {
	    if (!$this->id && empty($this->data)) {
	        return null;
	    }
	    $data = $this->data;
	    if (empty($this->data)) {
	        $data = $this->read();
	    }
	    if (!$data['User']['group_id']) {
	        return null;
	    } else {
	        return array('Group' => array('id' => $data['User']['group_id']));
	    }
	}
	
	
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Group' => array(
			'className' => 'Group',
			'foreignKey' => 'group_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Kela' => array(
			'className' => 'Kela',
			'foreignKey' => 'kelas',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)

	);
	
	var $hasMany = array(
		'Quizz' => array(
			'className' => 'Quizz',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'UraianAnswer' => array(
			'className' => 'UraianAnswer',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'QuizzPoint' => array(
			'className' => 'QuizzPoint',
			'foreignKey' => 'siswa',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Forum.Access',
		'Forum.Moderator'
		
	);
	
	 
        var $validate = array(
 			'username' => array(
 				'notempty' => array(
	 				'rule' => array('minLenght', 1),
	 				'required' => true,
	 				'allowEmpty' => false,
	 				'message' => 'Username tidak boleh kosong'
 				),
 				'unique' => array(
		 			'rule' => array('checkUnique', 'username'),
 					'message' => 'Username sudah terdaftar, data tidak bisa menduplikasi'
 				)
 			),
            'password'=>array(
	                          'Password tidak boleh kosong'=>array(
	                               'rule'=>array('notEmpty')
	                            ),
	                          'Password harus lebih dari 4 karakter'=>array(
	                               'rule'=>array('minLength', 4)
	                            ),
	                          'Password confirm harus sama'=>array(
	                               'rule'=>array('passwordCompare', 'password_confirm')
	                          ))
	    );







	   	function passwordCompare($data, $fieldTwo) {

	       if($data['password'] != $this->data[$this->alias][$fieldTwo]) {
	            $this->invalidate($fieldTwo, 'Password confirm harus sama');
	            return false;
	       }

	       return true;
	   }

	   function hashPasswords($data, $enforce=false) {

	      if($enforce && isset($this->data[$this->alias]['password'])) {
	          if(!empty($this->data[$this->alias]['password'])) {
	              $this->data[$this->alias]['password'] = Security::hash($this->data[$this->alias]['password'], null, true);
	          }
	      }

	      return $data;
	   }

	   function checkUnique($data, $fieldName) {
	   	$valid = false;
	   	if(isset($fieldName) && $this->hasField($fieldName)) {
	   		$valid = $this->isUnique(array($fieldName => $data));
	   	}
	   	return $valid;
	   }

	   function beforeSave() {

	       $this->hashPasswords(null, true);

	       return true;

	   }

	   /**
 * A column map allowing you to define the name of certain user columns.
 *
 * @access public
 * @var array
 */
public $columnMap = array(
	'status'		=> 'status',
	'signature'		=> 'signature',
	'locale'		=> 'locale', // Must allow 3 characters: eng
	'timezone'		=> 'timezone', // Must allow 5 digits: -10.5
	'totalPosts'	=> 'totalPosts',
	'totalTopics'	=> 'totalTopics',
	'currentLogin'	=> 'currentLogin',
	'lastLogin'		=> 'lastLogin'
);
        
	
		

}
?>