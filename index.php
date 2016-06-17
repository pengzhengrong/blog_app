<?php

define('IN_Think',true);
define('IS_DEBUG',false);

// echo '<pre>';
// print_r($_SERVER);
// die;

$class = dirname(__FILE__)."/Think/Think.class.php";

include $class;
\Think\Think::start();







