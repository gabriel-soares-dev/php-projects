<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!--Aqui recebe os dados via "$_POST" para ser inseridos no banco de dados-->
<?php
if(isset($_POST["cnpj"])){
	$cnpj = $_POST["cnpj"];
	$nome_hospital = $_POST["nome_hospital"];
	$endereco = $_POST["endereco"];
	$sala = $_POST["sala"];
	$data_cadastro = $_POST["data_cadastro"];
	date_default_timezone_set('America/Belem');
	$ultima_atualizacao = date('d-m-Y H:i:s');
	include "conexao.php";

	$link->query("UPDATE hospital SET nome_hospital='$nome_hospital', endereco='$endereco', sala='$sala', data_cadastro='$data_cadastro', ultima_atualizacao='$ultima_atualizacao' WHERE cnpj='$cnpj';");
}
header('Location: consulta_hospital.php');/*Após inseridos os dados o usuário sera redirecionado para a página que lista todos os estudantes*/
exit();
?>

</body>
</html>