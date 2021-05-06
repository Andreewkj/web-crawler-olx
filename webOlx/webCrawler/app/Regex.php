<?php

/**
 * A classe Regex será necessária para a busca baseada em expressões regulares no site olx.com.br
 * 
 */
namespace App;

    class Regex
    {
        public $conteudo;

        /*Caracteres especiais utilizando para encontrar as informações isoladas
        */
        private $titulo = '/<\s*div class="fnmrjs-6"*\s?[^>]*><\s*h2[^>]*>(.*?)<\s*\/\s*h2>/';

        private $descricao = '/<\s*div class="fnmrjs-12"*\s?[^>]*><\s*\/s*div><\s*span[^>]*>(.*?)<\s*\/s*span>/';

        private $precoAtual = '/<\s*div class="aoie8y-0"*\s?[^>]*><\s*span[^>]*>(.*?)<\s*\/s*span>/';

        private $dataPostagem = '/<\s*div\s?class="wlwg1t-0[^>]*><\s*span*\s?[^>]*>(.*?)<\s*\/s*span>/';

        private $horaPostagem = '/<\s*div\s?class="wlwg1t-0[^>]*><\s*span*\s?[^>]*>[^>]*<\s*\/s*span><\s*span[^>]*>(.*?)<\s*\/s*span>/';

        private $imagem = '/<\s*img\s?src="(.*?)"[^>]*class="\s?sc-101cdir-\s?/';

        private $link = '/<li\s?class="sc-1fcmfeb-2[^>]*><a[^>]*href="(.*?)"/';

        private $localizacao = '/<\s*div\s?class="sc-7l84qu-0[^>]*><\s*span*\s?[^>]*>(.*?)<\s*\/s*span>/';

        //Utilizando metódos setters e getters magicos
        public function __construct($url) {
            $this->conteudo = file_get_contents($url); 
        }

        public function buscarMath($attr){
            preg_match_all($this->$attr, $this->conteudo, $match);
            return $match[1];  
        }

    }

?>