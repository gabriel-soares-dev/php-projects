<!--Código que faz a conexão com o Banco de Dados.-->
<?PHP
$link = new mysqli("localhost", "root", "", "classehospitalar");
/*check conection*/
if ($link->connect_errno){
	printf("Conect failed: %s\n", $link->connect_erro);
	exit();
}
mysqli_set_charset ( $link, "utf8" );
?>