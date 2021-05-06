<?php 

	//recuperando o vendor e as constantes do banco de dados
	require_once "./config/config.php";
    require_once "./vendor/autoload.php";

	//Optei a configuração externa para que seja possivel alterar a página de busca posteriormente
	$url = "https://www.olx.com.br/autos-e-pecas/carros-vans-e-utilitarios/hyundai/hb20";

	use App\Conn;
	use App\Regex;
	use App\Anuncio;
	
	//Enviando o padrão para a função construct 
	$regex = new Regex($url);
	$anuncio = new Anuncio();

	$regex->buscarMath('titulo');
	$regex->buscarMath('descricao');
	$regex->buscarMath('precoAtual');
	$regex->buscarMath('dataPostagem');
	$regex->buscarMath('horaPostagem');
	$regex->buscarMath('imagem');
	$regex->buscarMath('link');
	$regex->buscarMath('localizacao');

	$anuncio->__set('titulo', $regex->buscarMath('titulo'));
	$anuncio->__set('descricao', $regex->buscarMath('descricao'));
	$anuncio->__set('precoAtual', $regex->buscarMath('precoAtual'));
	$anuncio->__set('dataPostagem', $regex->buscarMath('dataPostagem'));
	$anuncio->__set('horaPostagem', $regex->buscarMath('horaPostagem'));
	$anuncio->__set('imgAnuncio', $regex->buscarMath('imagem'));
	$anuncio->__set('linkAnuncio', $regex->buscarMath('link'));
	$anuncio->__set('localizacao', $regex->buscarMath('localizacao'));
	
?>
