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

					echo "<script>alert('Login ou Senha Invalidos!');window.location.href=''</script>";

				}else{
					echo "<script>alert('Login efetuado com sucesso!');window.location.href='../Views/Cadastro.html'</script>";

				}
			}

		public function Insert($cad){

			//comando sql
		$sql = 'INSERT INTO pacientes(nome, cpf, rg, data_nascimento, telefone, telefone_2, email, tipo_sanguineo, cidade, estado, rua, numero, complemento, bairro, sus, sexo, usuario_fk) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';

		//instacia de conexao de db e prepara sql
		$conex = Conectar::conectado()->prepare($sql);

		//relacionado os gets
		$conex->bindValue(1,$cad->getnome());
		$conex->bindValue(2,$cad->getcpf());
		$conex->bindValue(3,$cad->getrg());
		$conex->bindValue(4,$cad->getdata());
		$conex->bindValue(5,$cad->gettelefone());
		$conex->bindValue(6,$cad->gettelefone2());
		$conex->bindValue(7,$cad->getemail());
		$conex->bindValue(8,$cad->getsangue());
		$conex->bindValue(9,$cad->getcidade());
		$conex->bindValue(10,$cad->getestado());
		$conex->bindValue(11,$cad->getrua());
		$conex->bindValue(12,$cad->getnumero());
		$conex->bindValue(13,$cad->getcomplemento());
		$conex->bindValue(14,$cad->getbairro());
		$conex->bindValue(15,$cad->getsus());
		$conex->bindValue(16,$cad->getsexo());
		$conex->bindValue(17,$_SESSION['Login']);
		

		//enviar para o BD(executando) e imprimindo mensagem de execução
		if ($conex->execute()){
			echo "<script>alert('Cadastro realizado com sucesso!');window.location.href='../Views/Cadastro.html'</script>";
		}
		else{
			echo "<script>alert('Erro ao Cadastrar!');window.location.href=''</script>";
		}

		}


}

?>