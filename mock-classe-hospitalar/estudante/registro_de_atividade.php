<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registro de Atividade</title>
</head>
<body>

	<?PHP
		if (isset($_GET["idCadastro"])){
			$idCadastro = $_GET["idCadastro"];
			include "conexao.php";
			$result = $link->query("SELECT * FROM estudante WHERE `idCadastro`='".$idCadastro."';");/*Procura na tabela*/
			if($result->num_rows == 1){
				$estud = $result->fetch_object();
			}else {
				header('Location: consulta_estudante.php');
				exit();
			}
		}else{
			header('Location: consulta_estudante.php');
			exit();
		}
	?>

	<h2>Resgistro de Atividades</h2>

	<form action="adicionar_atividade.php" method="post">
		Id Cadastro: <input type="text" name="idCadastro" value="<?= $estud->idCadastro ?>" readonly/><br><br>
		
		Data: <input type="date" name="frequencia"><br><br>
		
		<input type="radio" name="localAtendimento" value="sala" checked> Sala
  		
  		<input type="radio" name="localAtendimento" value="leito"> Leito<br><br>
  		
  		Objetivo:<br><textarea maxlength="255" rows="3" cols="80" name="objetivo"  placeholder="Objetivo..." required>	
  		</textarea><br><br>
  		
  		Profissional(is) Presente(s): <input type="text" name="profissionalPresente" size="59" required><br><br>
  		
  		Situação Vivenciada: <br><textarea maxlength="255" rows="3" cols="80" name="situacaoVivenciada"  placeholder="Sitiação(ões) Vivenciada(s)..." required></textarea><br><br>

  		Emcaminhamento: <br><textarea maxlength="255" rows="3" cols="80" name="encaminhamento"  placeholder="Encaminhamento(s)..." required></textarea><br><br>

  		Professor Avaliador: <input type="text" name="professor" size="66"><br><br>

  		<tr>
  			<td colspan="2">
 				<input type="submit" name="Enviar">
  				<input type="reset" value="Limpar">
  			</td>
  		</tr>
  		
	</form>

</body>
</html>