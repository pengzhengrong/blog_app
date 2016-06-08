<?php

function M($model) {
	// P(C() );
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
	return $db;
}

function C($key) {
	$_config = \Think\Think::$_config;
	if( empty($key) ){
		return $_config;
	}
	return $_config[$key];
}

function U($params) {
	// if( is_string($vars) ) {
	// 	$url .= $vars;
	// }
	// if( is_array($vars) ) {
	// 	$temp = '';
	// 	foreach ($vars as $k => $v) {
	// 		$temp .= "/$k/$v";
	// 	}
	// 	$url .= $temp;
	// }
	// return url;
	return $params['url'].$params['vars'][0];
}

function server( $key ) {
	return $_SERVER[$key];
}