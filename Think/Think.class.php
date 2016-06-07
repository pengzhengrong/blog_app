<?php
namespace Think;
Class Think {

	Public static function start(){
		spl_autoload_register(__NAMESPACE__.'\Think::autoload');
		try{
			self::load_config();
			$route = new Route();
		}catch(\Exception $e){
			$e->getMessage();
		}
	}


	Public static  function load_config() {
		include 'Home/Common/config.php';
		include 'Home/Common/function.php';
	}

	Public static function  autoload( $class ) {
		// P(CLASS);
		$class = str_replace('\\', '/', $class);
		if( substr( $class , 0,10) == 'Controller' ){
			// $class = 'Home/Controller/'.$class.'Controller.class.php';
			$class = __NAMESPACE__.'/'.$class.'.class.php';
		}/*else if( substr($class, -6) == 'Smarty'){
			$class = 'Smarty/'.$class.'.class.php';
		}*/else{
			$class .= '.class.php';
		if( file_exists( $class)){
			include $class;
			return true;
		}else{
			return false;
		}
	}

}