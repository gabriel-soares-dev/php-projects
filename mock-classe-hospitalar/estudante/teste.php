<?php
if(isset($_GET["idCadastro"])){
	$idCadastro = $_GET["idCadastro"];
	include "conexao.php";
	$result = $link->query("SELECT status_internamento FROM estudante WHERE `idCadastro`='".$idCadastro."';");
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "status_internamento: " . $row["status_internamento"]. "<br>";

	        $status = $row["status_internamento"];
	        if ($status == 1) {
	        	echo "Estudante já internado!";
	        }
	    }
	} else {
	    echo "0 results";
	}
}

exit();
?>