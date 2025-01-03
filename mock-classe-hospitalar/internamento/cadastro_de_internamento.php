<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Internamento de Estudante</title>
	<link rel=stylesheet href="http://localhost/sete/layout/style.css">
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
	</header>
	<!--Aqui finaliza o Menu de navegação.-->



		<a href="http://localhost/sete/hospital/consulta_hospital.php">Listar Hospitais</a>
		<a href="http://localhost/sete/hospital/pesquisar_hospital.php">Pesquisar Hospitais</a><br><br><br>





<h4>CADASTRO DE HOSPITAIS - CLASSE HOSPITALAR SEMEAR</h4>

<p>1. Dados do internamento:</p>
	<form name="cadastro_internamento" action="adicionar_internamento.php" method="post">

		<table class="cadastro" width="500px" align="center">
			<tr>
				<td width="150px">
					<b>Matricula do estudante.:</b>
				</td>
				<td>
					<input type="number" name="matricula">
				</td>
			</tr>
			<tr>
				<td>
					<b>Status do Internamento:</b>
				</td>
				<td>
					<select name="status_internamento">
			<option value="0">Alta</option>
			<option value="1">Internado</option>
			</select>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<button type="submit" onclick="return validar()">Enviar Cadastro</button>
					<input type="reset" value="Limpar">
				</td>
			</tr>
		</table>
		
<!--
		<div class="button">
        	<button type="submit" onclick="return validar()">Enviar Cadastro</button>
    	</div>
-->


	</form><br>

	
</body>
</html>