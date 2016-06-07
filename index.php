<?php

define('IN_BLOG',true);
require './Library/Blog.class.php';
// echo $_SERVER['PATH_INFO'];
// print_r($_SERVER["PATH_INFO"]);
try{
	$blog = new \Library\Blog();
}catch( \Exception $e){
	$e.getMessage();
}


$blog::start();

// $route = new Route();


