<?php

define('IN_Think',true);
define('IS_DEBUG',false);
$class = 'Think/Think.class.php';
if( file_exists($class) ){
	// echo $_SERVER['PATH_INFO'];
	require $class;
	// $think = new Think();
	// $think::start();
}else{
	exit('Can\'t found '.$class);
}






