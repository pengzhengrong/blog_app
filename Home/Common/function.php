<?php

function P($param , $type=false){
	if( IS_DEBUG ){ return; }
	if( is_array($param) ) {
		if( $type ){
			var_dump($param);
		}else{
			echo '<pre>';
			print_r( $param );
		}
		return;
	}
	echo $param."<br>";
}
