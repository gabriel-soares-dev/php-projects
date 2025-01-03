<?php
if(isset($_GET["idCadastro"])){
	$idCadastro = $_GET["idCadastro"];
	$status_internamento = "0";
	include "conexao.php";
	$link->query("UPDATE estudante SET status_internamento='$status_internamento' WHERE idCadastro='".$idCadastro."';");
}
header('Location: consulta_estudante.php');
exit();
?>