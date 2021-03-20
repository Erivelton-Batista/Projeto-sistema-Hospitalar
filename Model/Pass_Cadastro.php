<?php

require '../Controller/Crud_DAO.php';
require 'Class_Cadastro.php';

	$cad = new Cadastro();
	$cad_crud = new Crud();

	$cad->setnome($_POST['Nome']);
	$cad->setcpf($_POST['CPF']);
	$cad->setrg($_POST['RG']);
	$cad->setdata($_POST['Nascimento']);
	$cad->settelefone($_POST['Telefone']);
	$cad->settelefone2($_POST['Celular']);
	$cad->setemail($_POST['Email']);
	$cad->setsangue($_POST['Sangue']);
	$cad->setsus($_POST['SUS']);
	$cad->setsexo($_POST['Sexo']);
	$cad->setrua($_POST['Endereço']);
	$cad->setnumero($_POST['Numero']);
	$cad->setcomplemento($_POST['Complemento']);
	$cad->setbairro($_POST['Bairro']);
	$cad->setcidade($_POST['Cidade']);
	$cad->setestado($_POST['Estado']);

	$cad_crud->Insert($cad);







?>