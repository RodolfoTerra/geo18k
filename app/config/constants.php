<?php 

	define('HOST', $_SERVER['HTTP_HOST']);
	define('PROTOCOL', 'http://');

	define('LOCAL_PATH', 'geo18k');


	if(HOST == "localhost:8080"){
		$local = PROTOCOL.HOST.'/'.LOCAL_PATH.'/';
		$imagem = PROTOCOL.HOST.'/'.LOCAL_PATH.'/';
		$image2= PROTOCOL.HOST.'/'.LOCAL_PATH.'/';

	}else{
		$local = "";
		$imagem = "../../";
		$image2= "../../../";
	}
