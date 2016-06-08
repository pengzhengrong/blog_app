<?php

define('IN_Think',true);
define('IS_DEBUG',false);
define('PHP_SELF',$_SERVER['PHP_SELF']);

// print_r($_GET);
// print_r($_POST);
// $path = $_SERVER['PATH_INFO'];
// $paths =  pathinfo($path);
// print_r($paths);
// echo strtolower(pathinfo($_SERVER['PATH_INFO'],PATHINFO_EXTENSION));
echo '<pre>';
print_r($_SERVER);
// $_GET['p']=1;
// print_r($_GET);

// $pathinfo = $_SERVER['PATH_INFO'];

$class = dirname(__FILE__)."/Think/Think.class.php";
// echo $_SERVER['SCRIPT_FILENAME'];  // /home/pzr/workspace/blog_app/index.php
include $class;
\Think\Think::start();







