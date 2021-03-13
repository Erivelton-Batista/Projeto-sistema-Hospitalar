<?php

class Conectar{

	private $instace;

//nome da data base = hospital

//metodo de conexão com banco de dados
		public static function conectado(){

			try{
				$instace = new PDO('mysql:host=localhost;dbname=hospital;','root','');

			}catch(PDOException $e){

				die("Erro de Conexão: ".$e->getMessage());
			}

		return $instace;
		}
}
?>