<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro do Estudante</title>
	<link rel=stylesheet href="http://localhost/sete/layout/style.css">
	<script language="javascript" type="text/javascript" src="js/arquivo.js"></script>
</head>
<body>
	<!--Aqui inicia o Menu de navegação.-->
	<header>
		<input type="checkbox" id="btn-menu">
		<label for="btn-menu">&#9776;</label>
		<nav class="menu">
		    <ul>
		        <li><a href="http://localhost/sete/index.php">Inicio</a></li>
		        <li><a href="cadastro_de_estudante.php">Cadastrar Estudante</a></li>
				<li><a href="http://localhost/sete/hospital/cadastro_de_hospital.php">Cadastrar Hospital</a></li>
				<li><a href="http://localhost/sete/estudante/internados.php">Internados</a></li>
		     	<li><a href="">Contato</a></li>
		    </ul>
		</nav>
	</header>
	<!--Aqui finaliza o Menu de navegação.-->


	<a href="http://localhost/sete/estudante/consulta_estudante.php">Listar Estudante</a>
	<a href="http://localhost/sete/estudante/pesquisar_estudante.php">Pesquisarar Estudante</a>



	<fieldset><!--Local onde está o campo para digitar o nome do usuário para pesquisar.-->
		<form action="resultado_pesquisa.php" method="post">
			<center>
				<input type="text" name="nome_estudante" placeholder="Nome do Estudante">
				<button type="submit">Pesquisar</button>
			</center>
		</form>
	</fieldset>

</body>
</html>