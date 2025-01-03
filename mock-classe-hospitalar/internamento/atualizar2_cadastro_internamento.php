<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!--Aqui recebe os dados via "$_POST" para ser inseridos no banco de dados-->
<?php
if(isset($_POST["id_internamento"])){
	$id_internamento = $_POST["id_internamento"];
	$matricula = $_POST["matricula"];
	$data_internamento = $_POST["data_internamento"];
	date_default_timezone_set('America/Recife');
	$data_alta = date('d-m-Y H:i:s');
	$status_internamento = $_POST["status_internamento"];
	include "conexao.php";

	$link->query("UPDATE internamento SET matricula='$matricula', data_internamento='$data_internamento', data_alta='$data_alta', status_internamento='$status_internamento' WHERE id_internamento='$id_internamento';");
}
header('Location: http://localhost/sete/index.php');/*Após inseridos os dados o usuário sera redirecionado para a página que lista todos os estudantes*/
exit();
?>

</body>
</html>