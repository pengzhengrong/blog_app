<?php

namespace Library;
// use Library;
// define('BASE_PATH',$_SERVER['DOCUMENT_ROOT']);

define('SMARTY_PATH','Home/View/');



abstract Class  Controller {

	protected $smarty;

	Public function __construct() {
		spl_autoload_unregister('\Library\Blog::autoload');
		require 'Smarty/Smarty.class.php';
		$smarty = new \Smarty();
		$smarty->template_dir = 'Home/View/';
		$smarty->compile_dir = 'Runtime/Temp/';
		$smarty->config_dir = 'Runtime/Config/';
		$smarty->cache_dir = 'Runtime/Cache/';
		// P( $smarty->getConfig_dir() );
		$this->smarty = $smarty;
		// echo 'controller';
	}

	Public function display() {
		P(CONTROLLER_NAME.'_'.METHOD_NAME);
		$template = CONTROLLER_NAME.'_'.METHOD_NAME.'.html';
		$this->smarty->display($template);
	}

	Public function assign($key , $value) {
		$this->smarty->assign($key,$value);
	}

	Public function __set($key, $value) {
		$this->smarty->assign($key,$value);
	}
}



