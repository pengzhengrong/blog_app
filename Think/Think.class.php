<?php
namespace Think;

define('EXT','.php');

Class Think {

	Public static $_config = array();

	Public static function start() {
		spl_autoload_register(__NAMESPACE__.'\Think::autoload');
		self::load_config();
		self::defined_vars();
		$route = new Route();
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
			// P('autoload '.$class.' success');
			return true;
		}else{
			// P('autoload '.$class.' FAILED');
			return false;
		}
	}

	Public static function defined_vars() {
		define( 'REQUEST_METHOD' , server('REQUEST_METHOD') );
		define( 'IS_GET' , REQUEST_METHOD==='GET'?true:false );
		define( 'IS_POST' , IS_GET?0:1);
		$pathinfo = server('PATH_INFO');
		$path = explode('/', $pathinfo );
		P($path);
		define('MODULE_NAME', $path[1]);
		define('CONTROLLER_NAME', $path[2]);
		define('METHOD_NAME',$path[3]);
		$vars = array_reverse( array_slice( $path ,4 ) );
		if( IS_GET ) {
			while( count($vars) ) {
				$_GET[array_pop($vars)] = array_pop($vars);
			}
		}elseif( IS_POST ) {
			while( count($vars) ) {
				$_POST[array_pop($vars)] = array_pop($vars);
			}
		}
		
	}

}