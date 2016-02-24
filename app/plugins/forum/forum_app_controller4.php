<?php
/** 
 * Cupcake - Forum Plugin AppController
 *
 * @author 		Miles Johnson - www.milesj.me
 * @copyright	Copyright 2006-2009, Miles Johnson, Inc.
 * @license 	http://www.opensource.org/licenses/mit-license.php - Licensed under The MIT License
 * @link		www.milesj.me/resources/script/forum-plugin
 */
  
App::import(array(
	'type' => 'File', 
	'name' => 'Forum.ForumConfig', 
	'file' => 'config'. DS .'core.php'
));

class ForumAppController extends AppController {

	/**
	 * Remove parent models.
	 *
	 * @access public
	 * @var array
	 */
	public $uses = array();

	/**
	 * Components.
	 *
	 * @access public
	 * @var array
	 */
	public $components = array('RequestHandler', 'Security', 'Cookie', 'Auth', 'Forum.Toolbar', 'Forum.AutoLogin');
	
	/**
	 * Helpers.
	 *
	 * @access public
	 * @var array
	 */
	public $helpers = array('Html', 'Session', 'Form', 'Time', 'Text', 'Javascript', 'Forum.Cupcake', 'Forum.Decoda' => array());

	/**
	 * Run auto login logic.
	 *
	 * @access public
	 * @param array $user - The logged in User
	 * @return void
	 */
	public function _autoLogin($user) {
		ClassRegistry::init('Forum.User')->login($user);

		$this->Session->delete('Forum');
		$this->Toolbar->initForum();
	}
	
	function build_acl() {
			if (!Configure::read('debug')) {
				return $this->_stop();
			}
			$log = array();
	
			$aco =& $this->Acl->Aco;
			$root = $aco->node('controllers');
			if (!$root) {
				$aco->create(array('parent_id' => null, 'model' => null, 'alias' => 'controllers'));
				$root = $aco->save();
				$root['Aco']['id'] = $aco->id; 
				$log[] = 'Created Aco node for controllers';
			} else {
				$root = $root[0];
			}   
	
			App::import('Core', 'File');
			$Controllers = Configure::listObjects('controller');
			$appIndex = array_search('App', $Controllers);
			if ($appIndex !== false ) {
				unset($Controllers[$appIndex]);
			}
			$baseMethods = get_class_methods('Controller');
			$baseMethods[] = 'buildAcl';
	
			$Plugins = $this->_getPluginControllerNames();
			$Controllers = array_merge($Controllers, $Plugins);
	
			// look at each controller in app/controllers
			foreach ($Controllers as $ctrlName) {
				$methods = $this->_getClassMethods($this->_getPluginControllerPath($ctrlName));
	
				// Do all Plugins First
				if ($this->_isPlugin($ctrlName)){
					$pluginNode = $aco->node('controllers/'.$this->_getPluginName($ctrlName));
					if (!$pluginNode) {
						$aco->create(array('parent_id' => $root['Aco']['id'], 'model' => null, 'alias' => $this->_getPluginName($ctrlName)));
						$pluginNode = $aco->save();
						$pluginNode['Aco']['id'] = $aco->id;
						$log[] = 'Created Aco node for ' . $this->_getPluginName($ctrlName) . ' Plugin';
					}
				}
				// find / make controller node
				$controllerNode = $aco->node('controllers/'.$ctrlName);
				if (!$controllerNode) {
					if ($this->_isPlugin($ctrlName)){
						$pluginNode = $aco->node('controllers/' . $this->_getPluginName($ctrlName));
						$aco->create(array('parent_id' => $pluginNode['0']['Aco']['id'], 'model' => null, 'alias' => $this->_getPluginControllerName($ctrlName)));
						$controllerNode = $aco->save();
						$controllerNode['Aco']['id'] = $aco->id;
						$log[] = 'Created Aco node for ' . $this->_getPluginControllerName($ctrlName) . ' ' . $this->_getPluginName($ctrlName) . ' Plugin Controller';
					} else {
						$aco->create(array('parent_id' => $root['Aco']['id'], 'model' => null, 'alias' => $ctrlName));
						$controllerNode = $aco->save();
						$controllerNode['Aco']['id'] = $aco->id;
						$log[] = 'Created Aco node for ' . $ctrlName;
					}
				} else {
					$controllerNode = $controllerNode[0];
				}
	
				//clean the methods. to remove those in Controller and private actions.
				foreach ($methods as $k => $method) {
					if (strpos($method, '_', 0) === 0) {
						unset($methods[$k]);
						continue;
					}
					if (in_array($method, $baseMethods)) {
						unset($methods[$k]);
						continue;
					}
					$methodNode = $aco->node('controllers/'.$ctrlName.'/'.$method);
					if (!$methodNode) {
						$aco->create(array('parent_id' => $controllerNode['Aco']['id'], 'model' => null, 'alias' => $method));
						$methodNode = $aco->save();
						$log[] = 'Created Aco node for '. $method;
					}
				}
			}
			if(count($log)>0) {
				debug($log);
			}
		}
	
		function _getClassMethods($ctrlName = null) {
			App::import('Controller', $ctrlName);
			if (strlen(strstr($ctrlName, '.')) > 0) {
				// plugin's controller
				$num = strpos($ctrlName, '.');
				$ctrlName = substr($ctrlName, $num+1);
			}
			$ctrlclass = $ctrlName . 'Controller';
			$methods = get_class_methods($ctrlclass);
	
			// Add scaffold defaults if scaffolds are being used
			$properties = get_class_vars($ctrlclass);
			if (array_key_exists('scaffold',$properties)) {
				if($properties['scaffold'] == 'admin') {
					$methods = array_merge($methods, array('admin_add', 'admin_edit', 'admin_index', 'admin_view', 'admin_delete'));
				} else {
					$methods = array_merge($methods, array('add', 'edit', 'index', 'view', 'delete'));
				}
			}
			return $methods;
		}
	
		function _isPlugin($ctrlName = null) {
			$arr = String::tokenize($ctrlName, '/');
			if (count($arr) > 1) {
				return true;
			} else {
				return false;
			}
		}
	
		function _getPluginControllerPath($ctrlName = null) {
			$arr = String::tokenize($ctrlName, '/');
			if (count($arr) == 2) {
				return $arr[0] . '.' . $arr[1];
			} else {
				return $arr[0];
			}
		}
	
		function _getPluginName($ctrlName = null) {
			$arr = String::tokenize($ctrlName, '/');
			if (count($arr) == 2) {
				return $arr[0];
			} else {
				return false;
			}
		}
	
		function _getPluginControllerName($ctrlName = null) {
			$arr = String::tokenize($ctrlName, '/');
			if (count($arr) == 2) {
				return $arr[1];
			} else {
				return false;
			}
		}
	
	/**
	 * Get the names of the plugin controllers ...
	 * 
	 * This function will get an array of the plugin controller names, and
	 * also makes sure the controllers are available for us to get the 
	 * method names by doing an App::import for each plugin controller.
	 *
	 * @return array of plugin names.
	 *
	 */
		function _getPluginControllerNames() {
			App::import('Core', 'File', 'Folder');
			$paths = Configure::getInstance();
			$folder =& new Folder();
			$folder->cd(APP . 'plugins');
	
			// Get the list of plugins
			$Plugins = $folder->read();
			$Plugins = $Plugins[0];
			$arr = array();
	
			// Loop through the plugins
			foreach($Plugins as $pluginName) {
				// Change directory to the plugin
				$didCD = $folder->cd(APP . 'plugins'. DS . $pluginName . DS . 'controllers');
				// Get a list of the files that have a file name that ends
				// with controller.php
				$files = $folder->findRecursive('.*_controller\.php');
	
				// Loop through the controllers we found in the plugins directory
				foreach($files as $fileName) {
					// Get the base file name
					$file = basename($fileName);
	
					// Get the controller name
					$file = Inflector::camelize(substr($file, 0, strlen($file)-strlen('_controller.php')));
					if (!preg_match('/^'. Inflector::humanize($pluginName). 'App/', $file)) {
						if (!App::import('Controller', $pluginName.'.'.$file)) {
							debug('Error importing '.$file.' for plugin '.$pluginName);
						} else {
							/// Now prepend the Plugin name ...
							// This is required to allow us to fetch the method names.
							$arr[] = Inflector::humanize($pluginName) . "/" . $file;
						}
					}
				}
			}
			return $arr;
		}
	

	/**
	 * Refreshes the Auth to get new data.
	 *
	 * @access public
	 * @param string $field
	 * @param string $value
	 * @return void
	 */
	public function _refreshAuth($field = '', $value = '') {
		if (!empty($field) && !empty($value)) {
			$this->Session->write($this->Auth->sessionKey .'.'. $field, $value);
		} else {
			if (isset($this->User)) {
				$this->Auth->login($this->User->read(false, $this->Auth->user('id')));
			} else {
				$this->Auth->login(ClassRegistry::init('Forum.User')->findById($this->Auth->user('id')));
			}
		}
	}
	
	/**
	 * Before filter.
	 * 
	 * @access public
	 * @return void
	 */
	public function beforeFilter() {
		parent::beforeFilter();
		
		Security::setHash('md5');
		$Config = ForumConfig::getInstance();

		// Load l10n/i18n support
		if ($this->Auth->user('locale')) {
			$locale = $this->Auth->user('locale');
		} else {
			$locale = (isset($Config->settings['default_locale']) ? $Config->settings['default_locale'] : 'eng');
		}

		Configure::write('Config.language', $locale);
		setlocale(LC_ALL, $locale .'UTF8', $locale .'UTF-8', $locale, 'eng.UTF8', 'eng.UTF-8', 'eng', 'en_US');
		
		// Auth settings
		$referer = $this->referer();
		if (empty($referer) || $referer == '/forum/users/login' || $referer == '/admin/forum/users/login') {
			$referer = array('plugin' => null,'controller' => 'users', 'action' => 'login');
		}

		$this->Auth->loginAction = array('plugin' => null,'controller' => 'users', 'action' => 'login', 'admin' => false);
		$this->Auth->loginRedirect = $referer;
		$this->Auth->logoutRedirect = $referer;
		$this->Auth->autoRedirect = false;
		
		// AutoLogin settings
		$this->AutoLogin->settings = array(
			'plugin' => null,
			'controller' => 'users',
			'loginAction' => 'login',
			'logoutAction' => 'logout'
		);

		$this->Cookie->key = Configure::read('Security.salt');
		
		// Apply censored words
		if (!empty($Config->settings['censored_words'])) {
			$censored = explode(',', str_replace(', ', ',', $Config->settings['censored_words']));
			$this->helpers['Forum.Decoda'] = array('censored' => $censored);
		}
		
		// Initialize
		$this->Toolbar->initForum();
	}

}
 