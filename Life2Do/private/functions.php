<?php 

function h($string){
	return htmlspecialchars($string);
}

function url($string){
	if($string[0] != '/'){
		$string = '/' . $string;
	}
	return WWW_ROOT . $string;
}

function test($array){
	echo "<pre>";
		print_r($array);
	echo "</pre>";
}