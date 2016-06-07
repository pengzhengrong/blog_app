<?php
namespace Library;
// use Library;
// print_r($_SERVER["QUERY_STRING"]);
// require 'Smarty/Autoloader.php';
Class Blog {

	Public static function start(){
		spl_autoload_register('\Library\Blog::autoload');
		// spl_autoload_register('\Smarty\Autoloader::autoload');
		
		// print_r($_SERVER["PATH_INFO"]);
		try{
			self::load_config();
			// $route = new \Home\Library\Route();
			// include './Library/Route.class.php';
			$route = new Route();
			// $route->test();
		}catch(Exception $e){
			$e.getMessage();
		}
	}


	Public static  function load_config() {
		include 'Home/Common/config.php';
		include 'Home/Common/function.php';
		P( 'load_config' );
	}

	Public static function  autoload( $class ) {
		// P('namespace:'.__NAMESPACE__);
		$class = str_replace('\\', '/', $class);
		if( substr( $class , 0,10) == 'Controller' ){
			// P('controller--');
			// $class = 'Home/Controller/'.$class.'Controller.class.php';
			$class = 'Library/'.$class.'.class.php';
		}/*else if( substr($class, -6) == 'Smarty'){
			$class = 'Smarty/'.$class.'.class.php';
		}*/else{
			$class .= '.class.php';
		}
		P('autoload:'.$class);
		if( file_exists( $class)){
			P('FILE EXIST');
			include $class;
			P('autoload success');
			return true;
		}else{
			P( 'file is not exist');
			return false;
		}
	}

}