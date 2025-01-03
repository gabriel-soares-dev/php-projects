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
		        <li><a href="http://localhost/sete/estudante/cadastro_de_estudante.php">Cadastrar Estudante</a></li>
				<li><a href="">Cadastrar Hospital</a></li>
		     	<li><a href="">Contato</a></li>
		    </ul>
		</nav>
	</header><br>
	<!--Aqui finaliza o Menu de navegação.-->
	<br>
	<br>



	<a href="http://localhost/sete/hospital/consulta_hospital.php">Listar Hospital</a>
<a href="http://localhost/sete/hospital/pesquisar_hospital.php">Pesquisarar Hospital</a>


	<!--Código para buscar os todos os cadastros e exibilos mais a frente..-->
	<?PHP
	if(isset($_POST["nome_hospital"])){
		$nome_estudante = $_POST["nome_hospital"];
	include "conexao.php";
	$result = $link->query("SELECT * FROM hospital WHERE nome_hospital LIKE '%".$nome_hospital."%' ORDER BY nome_hospital");
	}
	?>



	<fieldset><!--Local onde está o campo para digitar o nome do usuário para pesquisar.-->
		<form action="http://localhost/sete/hospital/resultado_pesquisa.php" method="post">
			<center>
				<input type="text" name="nome_hospital" placeholder="Nome do Hospital">
				<button type="submit">Pesquisar</button>
			</center>
		</form>
	</fieldset>


	<fieldset class="lista">
		
		<H3>Lista de Hospitais</H3>
		
		<!--Loop para exibir todos os usuários pesquisados no banco de dados.-->
		<?php
		if($result->num_rows > 0){
		  while ($row = $result->fetch_object()){
		?>

		<fieldset class="estudante">
			<H4>CNPJ: <?= $row->cnpj ?></H4>
			<div align="left">

			<table class="cad">
				<tr>
					<th class="col1">Nome do Hospital: </th>
					<td class="col2"><?= $row->nome_hospital ?></td>
				</tr>
				<tr>
					<th class="col1">Data de Cadastro:</th>
					<td class="col2"><?= $row->data_cadastro?></td>
				</tr>

			</table><br>

					<?php
					?>
						<a href="atualizar_cadastro_hospital.php?cnpj=<?= $row->cnpj ?>">Atualiza</a>
						<a href="excluir.php?cnpj=<?= $row->cnpj ?>">Excluir</a>
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