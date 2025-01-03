<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<title>Atualizar Cadastro de Estudante</title>

	<!--A tag <link> solicita os estilos "CSS" da folha de estilo externa.-->
	<link rel=stylesheet href="http://localhost/sete/layout/style.css">
	<script language="javascript" type="text/javascript" src="js/arquivo.js"></script>
	<!--A tag <link> acaba aqui.-->
	
</head>
<body>
	<!--Aqui inicia o Menu de navegação.-->
	<header>
		<input type="checkbox" id="btn-menu">
		<label for="btn-menu">&#9776;</label>
		<nav class="menu">
		    <ul>
		        <li><a href="http://localhost/sete/index.php">Inicio</a></li>
		        <li><a href="http://localhost/sete/estudante/cadastro_de_estudante.php">Cadastrar Estudante</a></li>
				<li><a href="">Cadastrar Hospital</a></li>
		     	<li><a href="">Contato</a></li>
		    </ul>
		</nav>
	</header><br>
	<!--Aqui finaliza o Menu de navegação.-->
	<br>

	<!--Aqui começa o código "PHP" que abre a conexão com banco de dados para pesquisar determinado usuário.-->
	<?PHP
	if (isset($_GET["id_internamento"])){
			$id_internamento = $_GET["id_internamento"];
			include "conexao.php";
			$result = $link->query("SELECT * FROM internamento WHERE `id_internamento`='".$id_internamento."';");/*Procura na tabela*/
			if($result->num_rows == 1){
				$inter = $result->fetch_object();
			}else {
				header('Location: http://localhost/sete/estudante/consulta_estudante.php');
				exit();
			}
		}else{
			header('Location: http://localhost/sete/estudante/consulta_estudante.php');
			exit();
		}
	?> <!--Aqui termina o código "PHP" que abre a conexão com banco de dados.-->
	
	<!--Aqui começa o formulario que recebe os dados via "PHP"-->
	<fieldset class="cadastro">
		<h3>Atulizar dados</h3>
		<form name="atual" action="atualizar2_cadastro_internamento.php" method="post">

		<input type="hidden" name="id_internamento" value="<?= $inter->id_internamento ?>"/>

		<div>
			<label for="matricula">Matricula do Estudante:</label>
			<input type="text" name="matricula" value="<?= $inter->matricula ?>">
		</div>

		<div>
			<label for="data_internamento">Data de Internamento:</label>
			<input type="text" name="data_internamento" value="<?= $inter->data_internamento ?>">
		</div>
		
		<div>
			<select name="status_internamento">
			<option value="0">Alta</option>
			<option value="1">Internado</option>
			</select>
		</div>

		<br>
		<button type="submit" title="Cadastrar">Atualizar</button>
	</form>
	</fieldset>
	<!--Aqui termina o formulario que recebe os dados via "PHP"-->
</body>
</html>