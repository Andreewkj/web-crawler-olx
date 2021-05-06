<?php 

/**
 * A classe anuncia será necessária para que os valores sejam inseridos no banco.
 */

namespace App;

	Class Anuncio extends Conn
	{
		public $conn;
		private $titulo;
		private $descricao;
		private $precoAtual;
		private $dataPostagem;
		private $horaPostagem;
		private $imgAnuncio;
		private $linkAnuncio;
		private $localizacao;

		//Utilizando metódos setters e getters magicos
		public function __set($attr, $value)
		{
			$this->$attr = $value;
		}

		public function __get($attr)
		{
			return $this->$attr;
		}

		public function inserir()
		{
			//Como a classe Conn está sendo extendida, é possivel usar o this->conn
			$this->conn = $this->connect();
			//utilizando o for para repetir a query apenas alterando o indice.
			for ($i=0; $i < count($this->titulo) ; $i++) {
				$query = "INSERT INTO anuncios_olx (
				titulo,
				descricao,
				preco_atual,
				data_postagem,
				hora_postagem,
				img_anuncio,
				link_anuncio,
				localizacao
				) VALUES (
				:titulo,
				:descricao,
				:preco_atual,
				:data_postagem,
				:hora_postagem,
				:img_anuncio,
				:link_anuncio,
				:localizacao
				)";

				$query = $this->conn->prepare($query);
				$query->bindValue(':titulo', $this->titulo[$i]);
				$query->bindValue(':descricao', $this->descricao[$i]);
				$query->bindValue(':preco_atual', $this->precoAtual[$i]);
				$query->bindValue(':data_postagem', $this->dataPostagem[$i]);
				$query->bindValue(':hora_postagem', $this->horaPostagem[$i]);
				$query->bindValue(':img_anuncio', $this->imgAnuncio[$i]);
				$query->bindValue(':link_anuncio', $this->linkAnuncio[$i]);
				$query->bindValue(':localizacao', $this->localizacao[$i]);
				$query->execute();


			}        

		}


	}

?>