<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro do Estudante</title>
	<link rel=stylesheet href="http://localhost/sete/layout/style.css">
	<script language="javascript" type="text/javascript" src="js/arquivo.js"></script>
	<title>Resultado da pesquisa</title>
</head>
<body>
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



	<a href="http://localhost/sete/estudante/consulta_estudante.php">Listar Estudante</a>
<a href="http://localhost/sete/estudante/pesquisar_estudante.php">Pesquisarar Estudante</a>


	<!--Código para buscar os todos os cadastros e exibilos mais a frente..-->
	<?PHP
	if(isset($_POST["nome_estudante"])){
		$nome_estudante = $_POST["nome_estudante"];
	include "conexao.php";
	$result = $link->query("SELECT * FROM estudante WHERE nome_estudante LIKE '%".$nome_estudante."%' ORDER BY nome_estudante");
	}
	?>



	<fieldset><!--Local onde está o campo para digitar o nome do usuário para pesquisar.-->
		<form action="http://localhost/sete/estudante/resultado_pesquisa.php" method="post">
			<center>
				<input type="text" name="nome_estudante" placeholder="Nome do estudante">
				<button type="submit">Pesquisar</button>
			</center>
		</form>
	</fieldset>


	<fieldset class="lista">
		
		<H3>Lista de Usuários</H3>
		
		<!--Loop para exibir todos os usuários pesquisados no banco de dados.-->
		<?php
		if($result->num_rows > 0){
		  while ($row = $result->fetch_object()){
		?>

		<fieldset class="estudante">
			<H4>Cadastro do Estudante: <?= $row->idCadastro ?></H4>
			<div align="left">

			<table class="cad">
				<tr>
					<th class="col1">Nome do estudante: </th>
					<td class="col2"><?= $row->nome_estudante ?></td>
				</tr>
				<tr>
					<th class="col1">Nome da Mãe:</th>
					<td class="col2"><?= $row->nome_mae ?></td>
				</tr>
				<tr>
					<th class="col1">Data de Nascimento:</th>
					<td class="col2"><?= $row->data_nascimento ?></td>
				</tr>

			</table><br>

					<?php
					?>
						<a href="atualizar_cadastro_estudante.php?idCadastro=<?= $row->idCadastro ?>">Atualiza</a>
						<a href="excluir.php?idCadastro=<?= $row->idCadastro ?>">Excluir</a>
						<a href="internar.php?idCadastro=<?= $row->idCadastro ?>">Internar</a>
						<a href="alta.php?idCadastro=<?= $row->idCadastro ?>">Dar Alta</a>
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
		<div> Não existe nenhum Estudante </div>
		<?php }
		?>
	</fieldset>

</body>
</html>