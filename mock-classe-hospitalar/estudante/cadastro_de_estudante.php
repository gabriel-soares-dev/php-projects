<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro do Estudante</title>
	<link rel=stylesheet href="http://localhost/sete/layout/style.css">
	<script language="javascript" >
			
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
		        <li><a href="cadastro_de_estudante.php">Cadastrar Estudante</a></li>
				<li><a href="http://localhost/sete/hospital/cadastro_de_hospital.php">Cadastrar Hospital</a></li>
				<li><a href="http://localhost/sete/estudante/internados.php">Internados</a></li>
		     	<li><a href="">Contato</a></li>
		    </ul>
		</nav>
	</header>
	<!--Aqui finaliza o Menu de navegação.-->



		<a href="http://localhost/sete/estudante/consulta_estudante.php">Listar Estudantes</a>
		<a href="http://localhost/sete/estudante/pesquisar_estudante.php">Pesquisarar Estudante</a><br><br><br>




<h4 align="center">FICHA INDIVIDUAL DO ESTUDANTE/PACIENTE - CLASSE HOSPITALAR SEMEAR</h4>

<p align="center"></p>
	<form name="cadastro_estudante" action="adicionar_estudante.php" method="post">
		<table width="500px" align="center">
			<tr>
				<td width="200px">
					<p>1. Dados Pessoais do(a) aluno(a):</p>
				</td>
			</tr>
			<tr>
				<td>
					<b>Nome:</b>
				</td>
				<td>
					<input type="text" name="nome_estudante" size="50" autofocus required>
				</td>
			</tr>
			<tr>
				<td>
					<b>Data de Nascimento:</b>
				</td>
				<td>
					<input type="date" name="data_nascimento" autofocus required>
				</td>
			</tr>
			<tr>
				<td>
					<b>Nome do Pai:</b>
				</td>
				<td>
					<input type="text" name="nome_pai" size="50" autofocus>
				</td>
			</tr>
			<tr>
				<td>
					<b>Nome da Mãe:</b>
				</td>
				<td>
					<input type="text" name="nome_mae" size="50" autofocus>
				</td>
			</tr>
			<tr>
				<td>
					<b>Cep:</b>
				</td>
				<td>
					<input type="text" name="cep" onkeypress="mascara(this, '##.###-###')" maxlength="10" size="7" autofocus>
				</td>
			</tr>
			<tr>
				<td>
					<b>Endereço:</b>
				</td>
				<td>
					<input type="text" name="endereco" autofocus required>
				</td>
			</tr>
			<tr>
				<td>
					<b>Bairro:</b>
				</td>
				<td>
					<input type="text" name="bairro" autofocus>
				</td>
			</tr>
			<tr>
				<td>
					<b>Cidade:</b>
				</td>
				<td>
					<input type="text" name="cidade" autofocus>
				</td>
			</tr>
			<tr>
				<td>
					<b>UF:</b>
				</td>
				<td>
					<input type="text" name="uf" maxlength="2" placeholder="PE" style='text-transform:uppercase' size="1" autofocus required>
				</td>
			</tr>
			<tr>
				<td>
					<b>Telefone Celular:</b>
				</td>
				<td>
					<input type="text" name="telefone" onkeypress="mascara(this, '## #####-####')" maxlength="13" size="10" autofocus>
				</td>
			</tr>
			<tr>
				<td>
					<b>Modalidade de Ensino:</b>
				</td>
				<td>
					<input list="turma" name="turma" size="23" autofocus required>
					<datalist id="turma">
					<option value="Educação Infantil">
					<option value="Ensino Fundamental">
					<option value="Educação Especial">
					<option value="Educação de Jovens e Adultos">
					<option value="Correção de Fluxo">
					</datalist>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<button type="submit" onclick="return validar()">Enviar Cadastro</button>
					<input type="reset" value="Limpar">
				</td>
			</tr>
		</table>
	</form><br>
</body>
</html>