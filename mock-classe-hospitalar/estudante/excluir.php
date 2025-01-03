<!--Código PHP para excluir usuários.-->
<?php
if(isset($_GET["idCadastro"])){
	$idCadastro = $_GET["idCadastro"];
	include "conexao.php";
	$link->query("DELETE FROM estudante WHERE idCadastro='".$idCadastro."';");
}
header('Location: consulta_estudante.php');
exit();
?>