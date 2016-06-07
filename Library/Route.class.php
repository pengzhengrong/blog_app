<?php
namespace Library;
Class Route {

	Public function __construct(){
		P($_SERVER["PATH_INFO"]);
		$pathinfo = $_SERVER['PATH_INFO'];
		$path = explode('/', $pathinfo );
		// P($path);
		define('MODULE_NAME', $path[1]);
		define('CONTROLLER_NAME', $path[2]);
		define('METHOD_NAME',$path[3]);
		// $this->test();
		$class = '\\'.MODULE_NAME.'\\Controller\\'.CONTROLLER_NAME.'Controller';
		// $class = CLASS_1;
		// $class = new $class;
		P('route: '.$class);
		// $controller = new $class;
		// $controller->METHOD;
		// call_user_func( array( $class, METHOD ) );
		$reflectionMethod  = new  \ReflectionMethod ( $class ,  METHOD_NAME );
		$reflectionMethod -> invoke (new $class );
	}

	Public function test() {
		echo 'route';
	}
}