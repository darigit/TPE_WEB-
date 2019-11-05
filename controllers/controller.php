<?php

define('HOME', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/verlibros');
define('ADMIN', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/inicio');
define('LOGIN', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/login');


require_once 'views/loginView.php';
require_once "libs/Smarty.class.php";
require_once 'models/UserModel.php';
require_once 'models/librosModel.php';

class controller {
        protected $view;
        protected $model;
        
        public function __construct(){
			$this->loginView = new LoginView();
			$this->librosView = new librosView;
        	$this->loginUserModel = new UserModel();
			$this->librosModel = new librosModel();
        }
	
	function mostrar_Login(){
		
	}
	
	function isAdmin() {
		// session_start();
        if (isset($_SESSION['USERNAME']))
			return true;
		return false;
		
	}
	
  }
?>