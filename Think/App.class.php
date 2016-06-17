<?php

namespace Think;

Class App {


	Public static function init() {

		define('ROOT',$_SERVER['DOCUMENT_ROOT'].'/');
		define( 'REQUEST_METHOD' , $_SERVER['REQUEST_METHOD'] );
		define( 'IS_GET' , REQUEST_METHOD==='GET'?true:false );
		define( 'IS_POST' , REQUEST_METHOD==='POST'?true:false);

		Route::start();

		$class = '\\'.MODULE_NAME.'\\Controller\\'.CONTROLLER_NAME.'Controller';
		self::redirectToTmpl($class );
		self::invoke($class);
	}

	Public static function redirectToTmpl($class) {
		if( !method_exists($class, METHOD_NAME) ) {
			if( !class_exists($class) ) {
				exit('controller unexist');
			}
			$tmpl = CONTROLLER_NAME.'_'.METHOD_NAME;
			$filename = ROOT.MODULE_NAME.'/View/'.$tmpl.TMPL_PREFIX;
			if( !file_exists($filename) ) {
				$tmpl = METHOD_NAME;
			}

			$filename = ROOT.MODULE_NAME.'/View/'.$tmpl.TMPL_PREFIX;
			if( !file_exists($filename) ) {
				exit('404');
			}
			$view = new \Think\View;
			$view->display($filename);
		}
		return;
	}

	Public static function invoke($class) {
		$_method  = new  \ReflectionMethod ( $class ,  METHOD_NAME );
		$class = new $class;
		if( $_method->isPublic() && !$_method->isStatic() ) {
			$_class = new \ReflectionClass($class);
			if( $_class->hasMethod('_before_'.METHOD_NAME) ) {
				$_before = $_class->getMethod('_before_'.METHOD_NAME);
				if( $_before->isPublic() ) {
					$_before->invoke($class);
				}
			}
			$_method -> invoke ( $class );
			if( $_class->hasMethod('_after_'.METHOD_NAME) ) {
				$_after = $_class->getMethod('_after_'.METHOD_NAME);
				if( $_after->isPublic() ) {
					$_after->invoke($class);
				}
			}
		}
	}

}