<?php
session_start();
require '../Controller/Crud_DAO.php';
require 'Class_Login.php';

	$log = new Login();
	$log_crud = new Crud();

	$_SESSION['Login'] = $_POST['login'];
	$log->setsenha($_POST['senha']);

	$log_crud->Login($log);

?>