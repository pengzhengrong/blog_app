<?php

function M($model) {
	$_cache_key = 'FUNCTION_M_'.$model;
	static $_config = array();
	if( $_config[$_cache_key] ) {
		return $_config[$_cache_key];
	}
	$dsn = C('DB_TYPE').':dbname='.C('DB_NAME').';host='.C('DB_HOST').';charset=utf8';
	$username = C('DB_USER');
	$passwd = C('DB_PASSWD');
	$config = array(
		'dsn' => $dsn,
		'username' => $username,
		'password' => $passwd,
		'table_name' => C('TABLE_PREFIX').$model,
		);
	$db = new \Think\Db($config);
	$_config[$_cache_key] = $db;
	return $db;
}

function C($key) {
	$_config = \Think\Think::$_config;
	if( empty($key) ){
		return $_config;
	}
	return $_config[$key];
}

function U($url='',$vars='',$suffix=true,$domain=false) {
	$uri = $_SERVER['SCRIPT_NAME'].MODULE_NAME.'/'.CONTROLLER_NAME.'/'.METHOD_NAME;
        	$url = str_replace(TMPL_PREFIX, '', $uri);
        	if( is_array($vars)) {
        		foreach ($vars as $k => $v) {
        			$url .= "/$k/$v";
        		}
        	}
	return $url;
}

function server( $key ) {
	return $_SERVER[$key];
}

function I( $key , $default_value , $handle='htmlspecialchars') {
	// $_REQUEST = array_merge( $_GET , $_POST );
	if( empty($key) ) {
		return $_REQUEST;
	}
	if( isset($_REQUEST[$key]) ) {
		return $handle($_REQUEST[$key]);
	}
	return $default_value;
}

function myException($e) {
	// echo "<b>Exception:</b> " , $exception->getMessage();
	// P($exception);
	// P($e->getMessage());
echo <<<EOF
$e
EOF;
}