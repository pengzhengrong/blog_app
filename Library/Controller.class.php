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
		$smarty->template_dir = SMARTY_PATH.'templates/';
		$smarty->compile_dir = SMARTY_PATH.'templates_c/';
		$smarty->config_dir = SMARTY_PATH.'configs/';
		$smarty->cache_dir = SMARTY_PATH.'cache/';
		// P( $smarty->getConfig_dir() );
		$this->smarty = $smarty;
		// echo 'controller';
	}

	Public function display() {
		// P('display');
		// P($this->smarty->getTemplate_dir() );
		$this->smarty->assign('title','php');
		$this->smarty->assign('content','smarty');
		header ( 'Content-type: text/html;charset:utf8' );
		$this->smarty->display('index.html');
	}
}



