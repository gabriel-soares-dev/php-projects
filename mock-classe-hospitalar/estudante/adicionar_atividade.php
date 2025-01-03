<?php
if (isset ($_POST["idCadastro"])) {
	$idCadastro = $_POST["idCadastro"];
	$frequencia = $_POST["frequencia"];
	$localAtendimento = $_POST["localAtendimento"];
	$objetivo = $_POST["objetivo"];
	$profissionalPresente = $_POST["profissionalPresente"];
	$situacaoVivenciada = $_POST["situacaoVivenciada"];
	$encaminhamento = $_POST["encaminhamento"];
	$professor = $_POST["professor"];
	date_default_timezone_set('Recife/Belem');
	$finalizadoEm = date('d-m-Y H:i:s');
	include "conexao.php";/*Abre a conexão*/

	$link->query("INSERT INTO atividade ( idCadastro, frequencia, localAtendimento, objetivo, profissionalPresente, situacaoVivenciada, encaminhamento, professor, finalizadoEm ) VALUES ('".$idCadastro."','".$frequencia."','".$localAtendimento."','".$objetivo."','".$profissionalPresente."','".$situacaoVivenciada."','".$encaminhamento."','".$professor."','".$finalizadoEm."');");

	header('Location: registro_de_atividade.php');
	exit;

}
?>