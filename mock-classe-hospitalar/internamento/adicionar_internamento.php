<?PHP
if(isset($_POST["matricula"])){/*Aqui recebemos os dados digitados no formulario na páguna "cadastro.php"*/
	$matricula = $_POST["matricula"];
	date_default_timezone_set('America/Recife');
	$data_internamento = date('d-m-Y H:i:s');
	$data_alta = $_POST["data_alta"];
	$status_internamento = $_POST["status_internamento"];
	
	include "conexao.php";/*Abre a conexão*/
	
	$link->query("INSERT INTO internamento ( matricula, data_internamento, data_alta, status_internamento ) VALUES ('".$matricula."','".$data_internamento."','".$data_alta."','".$status_internamento."');");

	header('Location: http://localhost/sete/index.php');
	exit;
}