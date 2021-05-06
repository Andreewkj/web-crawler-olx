<?php

	class Anuncio
	{
		public function mostrar()
		{
			$con = new PDO('mysql: host=locahost; dbname=alpes_one;','root','');

			$sql = "SELECT * FROM anuncios_olx ORDER BY id ASC";
			$sql = $con->prepare($sql);
			$sql->execute();

			$resultados = array();

			while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
				$resultados[] = $row;
			}

			if (!$resultados) {
				throw new Exception("Nenhum Anuncio encontrado.");
			}
			
			return $resultados;
		}
	}