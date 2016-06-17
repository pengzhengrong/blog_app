<?php

namespace Think;

define('SMARTY_PATH',MODULE_NAME.'/View/');
Class View {
	protected $smarty;

	Public function __construct() {
		require 'Think/Core/Smarty/Smarty.class.php';
		$smarty = new \Smarty();
		$smarty->template_dir = 'Home/View/';
		$smarty->compile_dir = 'Runtime/Temp/';
		$smarty->config_dir = 'Runtime/Config/';
		$smarty->cache_dir = 'Runtime/Cache/';
		$smarty->registerPlugin('function','U','U');
		$this->smarty = $smarty;
	}

	Public function display($tpl='') {
		$template = CONTROLLER_NAME.'_'.METHOD_NAME.TMPL_PREFIX;
		if( !empty($tpl) ) {
			if(strpos($tpl , TMPL_PREFIX) > -1){
				$template = $tpl;
			}else{
				$template = $tpl.TMPL_PREFIX;
			}
		}
		// header('Content-Type:text/html;charset:utf-8');
		$this->smarty->display($template);
	}

	Public function assign($key , $value) {
		$this->smarty->assign($key,$value);
	}


	Public function register_function() {
		$this->smarty>registerPlugin('function','U','U');
	}
}