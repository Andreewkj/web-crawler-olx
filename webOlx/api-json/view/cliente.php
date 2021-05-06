<?php

	$url = 'http://localhost/api-json/api/';

	//acessa a classe e o metodo atras da url para buscar os resultados
	$classe = 'anuncio';
	$metodo = 'mostrar';

	$montar = $url.'/'.$classe.'/'.$metodo;

	$retorno = file_get_contents($montar);

	var_dump(json_decode($retorno, 1));
	
?>