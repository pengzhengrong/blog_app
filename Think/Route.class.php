<?php
namespace Think;

define('TMPL_PREFIX',empty(C('TMPL_PREFIX'))?'.html':C('TMPL_PREFIX'));

Class Route {

	Public static function start() {
		self::parseUrl();
		self::checkRoute();
	}

	Public static function parseUrl() {
		$pathinfo = server('PATH_INFO');
		empty($pathinfo)?self::parseQueryString():self::parsePathInfo($pathinfo);
	}

	Public static function parseParams($params) {
		if( is_string($params) ) {
			// P($params);
			$params = explode('/', $params );
			foreach ($params as $k=>$v) {
				if( empty($v) ) {
					array_splice($params,$k,$k+1);
				}
			}
			// P($params);
		}
		if( is_array($params) ) {
			if( IS_GET ) {
				$_GET = array();
				while( count($params) ) {
					$_GET[array_shift($params)] = array_shift($params);
				}
			}
		}
		$_REQUEST = array_merge( $_GET , $_POST );

	}

	Public static function checkRoute() {
		$str = empty(C('MODULE_LIST'))?C('DEFAULT_MODULE'):C('MODULE_LIST');
		$modules = explode(',', $str);
		// P($modules);die;
		if( !in_array(MODULE_NAME, $modules) ) {
			try{
				throw new \Exception(MODULE_NAME." unexist ");
			}catch( \Exception $e ) {
				echo '<pre>';
				print_r($e);
				die;
			}
		}
	}

	Public static function parseQueryString() {
		define('MODULE_NAME', C('DEFAULT_MODULE'));
		define('CONTROLLER_NAME',C('DEFAULT_CONTROLLER'));
		define('METHOD_NAME',C('DEFAULT_METHOD'));
		if( isset($_GET['s']) ) {
			$params = $_GET['s'];
			self::parseParams($params);
		}
	}

	Public static function parsePathInfo($pathinfo) {
		$path = explode('/', trim($pathinfo) );
		array_shift($path);
		define('MODULE_NAME', $path[0]);
		define('CONTROLLER_NAME', $path[1]);
		define('METHOD_NAME',self::parseMethod($path[2]) );
		$vars = array_slice( $path ,3 );
		self::parseParams($vars);
	}

	Public static function parseMethod($method) {
		if( strpos($method,TMPL_PREFIX) > -1 ) {
			$method = str_replace(TMPL_PREFIX, '', $method) ;
			return $method;
		}
		return $method;
	}

}