<?php

namespace Think;
// use Library;
// define('BASE_PATH',$_SERVER['DOCUMENT_ROOT']);

define('SMARTY_PATH','Home/View/');

abstract Class  Controller {

	protected $smarty;

	Public function __construct() {
		// spl_autoload_unregister(__NAMESPACE__.'\Think::autoload');
		require 'Smarty/Smarty.class.php';
		$smarty = new \Smarty();
		$smarty->template_dir = 'Home/View/';
		$smarty->compile_dir = 'Runtime/Temp/';
		$smarty->config_dir = 'Runtime/Config/';
		$smarty->cache_dir = 'Runtime/Cache/';
		// $smarty->register_function('U','U');
		$smarty->registerPlugin('function','U','U');
		$this->smarty = $smarty;
	}

	Public function display() {
		$template = CONTROLLER_NAME.'_'.METHOD_NAME.'.html';
		header('Content-Type:text/html;charset:utf-8');
		$this->smarty->display($template);
	}

	Public function assign($key , $value) {
		$this->smarty->assign($key,$value);
	}

	Public function __set($key, $value) {
		$this->smarty->assign($key,$value);
	}

	Public function register_function() {
		$this->smarty>register_function('U','U');
	}
}



