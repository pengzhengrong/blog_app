<?php

function P($param){
	if( IS_DEBUG ){ return; }
	if( is_array($param) ) {
		echo '<pre>';
		print_r( $param );
		return;
	}
	echo $param."<br>";
}
