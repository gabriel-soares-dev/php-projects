<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de Hospitais</title>
	<link rel=stylesheet href="http://localhost/sete/layout/style.css">
	<script language="javascript">
			
		function mascara(t, mask){
			var i = t.value.length;
			var saida = mask.substring(1,0);
			var texto = mask.substring(i)
			if (texto.substring(0,1) != saida){
			t.value += texto.substring(0,1);
			}
		}
	</script>
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
				<li><a href="http://localhost/sete/hospital/cadastro_de_hospital.php">Cadastrar Hospital</a></li>
				<li><a href="http://localhost/sete/estudante/internados.php">Internados</a></li>
		     	<li><a href="">Contato</a></li>
		    </ul>
		</nav>
	</header>
	<!--Aqui finaliza o Menu de navegação.-->



		<a href="http://localhost/sete/hospital/consulta_hospital.php">Listar Hospitais</a>
		<a href="http://localhost/sete/hospital/pesquisar_hospital.php">Pesquisar Hospitais</a><br><br><br>





<h4 align="center">CADASTRO DE HOSPITAIS - CLASSE HOSPITALAR SEMEAR</h4>

<p align="center">1. Dados do Hospital:</p>
	<form name="cadastro_hospital" action="adicionar_hospital.php" method="post">

		<table class="cadastro" width="500px" align="center">
			<tr>
				<td width="150px">
					<b>CNPJ.:</b>
				</td>
				<td>
					<input type="text" name="cnpj" onkeypress="mascara(this, '##.###.###/####-##')" maxlength="18">
				</td>
			</tr>
			<tr>
				<td>
					<b>Nome do Hospital:</b>
				</td>
				<td>
					<input type="text" name="nome_hospital">
				</td>
			</tr>
			<tr>
				<td>
					<b>Endereço:</b>
				</td>
				<td>
					<input type="text" name="endereco">
				</td>
			</tr>
			<tr>
				<td>
					<b>Sala:</b>
				</td>
				<td>
					<input type="text" name="sala">
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