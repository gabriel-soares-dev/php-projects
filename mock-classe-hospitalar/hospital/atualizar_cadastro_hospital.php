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
	<!--Aqui inicia o Menu de navegação.-->
	<header>
		<input type="checkbox" id="btn-menu">
		<label for="btn-menu">&#9776;</label>
		<nav class="menu">
		    <ul>
		        <li><a href="http://localhost/sete/index.php">Inicio</a></li>
		        <li><a href="estudante/cadastro_de_estudante.php">Cadastrar Estudante</a></li>
				<li><a href="http://localhost/sete/hospital/cadastro_de_hospital.php">Cadastrar Hospital</a></li>
				<li><a href="http://localhost/sete/estudante/internados.php">Internados</a></li>
		     	<li><a href="">Contato</a></li>
		    </ul>
		</nav>
	</header>
	<!--Aqui finaliza o Menu de navegação.-->

	<!--Aqui começa o código "PHP" que abre a conexão com banco de dados para pesquisar determinado usuário.-->
	<?PHP
	if (isset($_GET["cnpj"])){
			$cnpj = $_GET["cnpj"];
			include "conexao.php";
			$result = $link->query("SELECT * FROM hospital WHERE `cnpj`='".$cnpj."';");/*Procura na tabela*/
			if($result->num_rows == 1){
				$hospit = $result->fetch_object();
			}else {
				header('Location: consulta_hospital.php');
				exit();
			}
		}else{
			header('Location: consulta_hospital.php');
			exit();
		}
	?> <!--Aqui termina o código "PHP" que abre a conexão com banco de dados.-->
	
	<!--Aqui começa o formulario que recebe os dados via "PHP"-->
	<fieldset class="cadastro">
		<h3>Atulizar dados</h3>
		<form name="atual" action="atualizar2_cadastro_hospital.php" method="post">

		<input type="hidden" name="cnpj" value="<?= $hospit->cnpj ?>"/>

		<div>
			<label for="name_hospital">Nome do Hospital:</label>
			<input type="text" name="nome_hospital" value="<?= $hospit->nome_hospital ?>">
		</div>

		<div>
			<label for="endereco">Endereço:</label>
			<input type="text" name="endereco" value="<?= $hospit->endereco ?>">
		</div><br>
		
		<div>
			<label for="sala">Sala:</label>
			<input type="text" name="sala" value="<?= $hospit->sala ?>">
		</div>

		<div>
			<label for="data_cadastro"></label>
			<input type="hidden" name="data_cadastro" value="<?= $hospit->data_cadastro ?>">
		</div>


		<br>
		<button type="submit" title="Cadastrar">Atualizar</button>
	</form>
	</fieldset>
	<!--Aqui termina o formulario que recebe os dados via "PHP"-->
</body>
</html>