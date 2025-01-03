<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!--Aqui recebe os dados via "$_POST" para ser inseridos no banco de dados-->
<?php
if(isset($_POST["idCadastro"])){
	$idCadastro = $_POST["idCadastro"];
	$nome_estudante = $_POST["nome_estudante"];
	$data_nascimento = $_POST["data_nascimento"];
	$nome_pai = $_POST["nome_pai"];
	$nome_mae = $_POST["nome_mae"];
	$cep = $_POST["cep"];
	$endereco = $_POST["endereco"];
	$bairro = $_POST["bairro"];
	$cidade = $_POST["cidade"];
	$uf = $_POST["uf"];
	$telefone = $_POST["telefone"];
	$turma = $_POST["turma"];
	$data_cadastro = $_POST["data_cadastro"];
	date_default_timezone_set('America/Recife');
	$ultima_atualizacao = date('d-m-Y H:i:s');
	$status_internamento = $_POST['status_internamento'];
	include "conexao.php";

	$link->query("UPDATE estudante SET nome_estudante='$nome_estudante', data_nascimento='$data_nascimento', nome_pai='$nome_pai', nome_mae='$nome_mae', cep='$cep', endereco='$endereco', bairro='$bairro', cidade='$cidade', uf='$uf', telefone='$telefone', turma='$turma', data_cadastro='$data_cadastro', ultima_atualizacao='$ultima_atualizacao', status_internamento='$status_internamento' WHERE idCadastro='$idCadastro';");
}
header('Location: consulta_estudante.php');/*Após inseridos os dados o usuário sera redirecionado para a página que lista todos os estudantes*/
exit();
?>

</body>
</html>