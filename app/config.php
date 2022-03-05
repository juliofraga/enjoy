<?php

	 // Arquivo de configuração

	const DB = [
		'HOST' => 'localhost',
		'USUARIO' => 'root',
		'SENHA' => '',
		'BANCO' => 'enjoy',
		'PORTA' => '3306'
	];

	define('BUSCA_POST_INDEX', '1');
	define('BUSCA_POST_PREVIEW', '0');

	// dirname — Retorna o caminho/path do diretório pai
	define('APP', dirname(__FILE__));
	define('URL','http://localhost/enjoy');
	define('APP_NOME','Blog - Enjoy the Journey');
	define('APP_VERSAO','1.0.0');
	
?>
