<?php
namespace Think;

define('EXT','.php');
define('EXT_C', '.class.php');
define('__PUBLIC__','/Public/Home');
define('PHP_SELF',$_SERVER['PHP_SELF']);



Class Think {

	Public static $_config = array();

	Public static function start() {
		spl_autoload_register(__NAMESPACE__.'\Think::autoload');
		set_exception_handler('myException');
		self::load_config();
		self::load_lib();
		\Think\App::init();
	}

	Public static  function load_config() {
		// static $_config = array();
		$config =  include 'Think/Common/config'.EXT;
		$config2 = include 'Home/Common/config'.EXT;
		self::$_config = array_merge( $config, $config2);
		require_once 'Think/Common/functions'.EXT;
		require_once 'Home/Common/function'.EXT;
		// P($_config);
	}

	Public static function load_lib() {
		include 'Think/Route'.EXT_C;
		include 'Think/App'.EXT_C;
	}
	
	Public static function  autoload( $class ) {
		// P('autoload: '.$class);
		$class = str_replace('\\', '/', $class);
		if( substr( $class , 0,10) == 'Controller' ){
			$class = __NAMESPACE__.'/'.$class.'.class.php';
		}else{
			$class .= '.class.php';
		}
		if( file_exists( $class)){
			include $class;
			return true;
		}else{
			return false;
		}
	}

}