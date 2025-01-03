<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!--Abaixo começa o código PHP que faz busca no Banco de Dados.-->
<?PHP
if(isset($_POST["cnpj"])){/*Aqui recebemos os dados digitados no formulario na páguna "cadastro.php"*/
	$cnpj = $_POST["cnpj"];
	$nome_hospital = $_POST["nome_hospital"];
	$endereco = $_POST["endereco"];
	$sala = $_POST["sala"];
	date_default_timezone_set('America/Belem');
	$data_cadastro = date('d-m-Y H:i:s');
	include "conexao.php";/*Abre a conexão*/
	
	$link->query("INSERT INTO hospital ( cnpj, nome_hospital, endereco, sala, data_cadastro ) VALUES ('".$cnpj."','".$nome_hospital."','".$endereco."','".$sala."','".$data_cadastro."');");

	header('Location: consulta_hospital.php');
	exit;
}
?>
</body>
</html>