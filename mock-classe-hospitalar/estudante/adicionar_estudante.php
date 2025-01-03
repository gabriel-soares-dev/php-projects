<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!--Abaixo começa o código PHP que faz busca no Banco de Dados.-->
<?PHP
if(isset($_POST["nome_estudante"])){/*Aqui recebemos os dados digitados no formulario na páguna "cadastro.php"*/
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
	date_default_timezone_set('America/Belem');
	$data_cadastro = date('d-m-Y H:i:s');
	$status_internamento = "0";
	include "conexao.php";/*Abre a conexão*/
	
	$link->query("INSERT INTO estudante ( nome_estudante,data_nascimento,nome_pai,nome_mae,cep,cidade,endereco,bairro,uf,telefone,turma,data_cadastro,status_internamento ) VALUES ('".$nome_estudante."','".$data_nascimento."','".$nome_pai."','".$nome_mae."','".$cep."','".$endereco."','".$bairro."','".$cidade."','".$uf."','".$telefone."','".$turma."','".$data_cadastro."','".$status_internamento."');");

	header('Location: consulta_estudante.php');
	exit;
}
?>
</body>
</html>