<!DOCTYPE html>
<html>
<head>
	<title>Internados</title>
	<link rel=stylesheet href="http://localhost/sete/layout/style.css">
	<script language="javascript" type="text/javascript" src="javascript/arquivo.js"></script>
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


	<h1 align="center">Alunos Internados</h1>







	<?PHP
include "conexao.php";
$result = $link->query("SELECT * FROM `estudante` WHERE status_internamento = 1;");
?>

	<fieldset class="lista"><!--Campo para o formulario.-->

		<H2>Lista de Internados</H2>

		<!--Loop para exibir todos os usuários pesquisados no banco de dados.-->
		<?php
		if($result->num_rows > 0){
		  while ($row = $result->fetch_object()){
		?>
			<fieldset class="internamento">
				<div align="left">

					<table class="cad">
						<tr>
							<th class="col1">Id Cadastro: </th>
							<td class="col2"><?= $row->idCadastro ?></td>
						</tr>
						<tr>
							<th class="col1">Nome do Estudante:</th>
							<td class="col2"><?= $row->nome_estudante ?></td>
						</tr>
						<tr>
							<th class="col1">Data de Nascimento:</th>
							<td class="col2"><?= $row->data_nascimento ?></td>
						</tr><br>
						<tr>
							<th class="col1">Nome do Pai:</th>
							<td class="col2"><?= $row->nome_pai ?></td>
						</tr>

						<tr>
							<th class="col1">Nome da Mãe:</th>
							<td class="col2"><?= $row->nome_mae ?></td>
						</tr>
					</table><br>

					<?php
					?>
					<a href="alta.php?idCadastro=<?= $row->idCadastro ?>">Dar Alta</a>
					<a href="registro_de_atividade.php?idCadastro=<?= $row->idCadastro ?>">Registrar Atividade</a>
					<a href="consulta_frequencia.php?idCadastro=<?= $row->idCadastro ?>">Consulta Frequencia</a>
					<?php
					
					?>
				</div>
			</fieldset>
			<br>

		<!--Se não ouver nehum usuário cadastrado exibirá a mensagem "Não existe nenhum usuário".-->
		<?php
		}
		}else {
		?>
		<div> Não tem Estudante internado. </div>
		<?php }
		?>
	</fieldset><br><!--Fim do campo-->



















</body>
</html>