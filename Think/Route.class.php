<?php
namespace Think;
Class Route {

	Public function __construct() {
		self::parseUrl();
		$class = '\\'.MODULE_NAME.'\\Controller\\'.CONTROLLER_NAME.'Controller';
		$reflectionMethod  = new  \ReflectionMethod ( $class ,  METHOD_NAME );
		$reflectionMethod -> invoke (new $class );
	}

	Public static function parseUrl() {
		$pathinfo = $_SERVER['PATH_INFO'];
		$path = explode('/', $pathinfo );
		// P($path);
		define('MODULE_NAME', $path[1]);
		define('CONTROLLER_NAME', $path[2]);
		define('METHOD_NAME',$path[3]);
		$vars = array_reverse( array_slice( $path ,4 ) );
		if( $_SERVER['REQUEST_METHOD'] === 'GET' ) {
			while( count($vars) ) {
				$_GET[array_pop($vars)] = array_pop($vars);
			}
		}elseif( $_ )
		P($_GET);
	}

	Public function test() {
		echo 'route';
	}
}