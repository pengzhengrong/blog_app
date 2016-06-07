<?php

function P($param){
	if( is_array($param) ) {
		echo '<pre>';
		print_r( $param );
		return;
	}
	echo $param."<br>";
}

/*function __autoload($class) {
	echo $class.'.class.php';
	include $class.'.class.php';
	// route = new Route();
}*/

