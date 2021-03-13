<?php
require 'Conexao_BD.php';
session_start();

class Crud{

		//metodo de login
		public function Login($log){

				$sql = "SELECT login, senha From usuarios WHERE Login = (?) And Senha = (?)";

				$result = Conectar::conectado()->prepare($sql);

				$result->bindvalue(1, $_SESSION['Login']);
				$result->bindvalue(2, $log->getsenha());
				$result->execute();

				if($result->rowCount() == 0){

					echo "<script>alert('Login ou Senha Invalidos!');</script>";

				}else{
					echo "<script>alert('Login efetuado com sucesso!');</script>";

				}
			}
}

?>