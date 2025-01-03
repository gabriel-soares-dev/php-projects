<!--Código PHP para excluir usuários.-->
<?php
if(isset($_GET["cnpj"])){
	$cnpj = $_GET["cnpj"];
	include "conexao.php";
	$link->query("DELETE FROM hospital WHERE cnpj='".$cnpj."';");
}
header('Location: consulta_hospital.php');
exit();
?>