<html>
<head>
	<meta charset=utf-8>
	<title>Cadastro</title>

	<link rel=stylesheet href="http://localhost/sete/layout/style.css">
	<script language="javascript" type="text/javascript" src="js/arquivo.js"></script>
	<title>Consultas</title><!--Titulo da Página.-->

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



		<a href="http://localhost/sete/hospital/consulta_hospital.php">Listar Hospital</a>

		<a href="http://localhost/sete/hospital/pesquisar_hospital.php">Pesquisarar Hospital</a><br><br><br>



	

<!--Verifica se o usuário que efetuou o login, senão será encaminhado para a pagina de login.-->
<?php/*
session_start();
if (!isset($_SESSION["email"]) || !isset($_SESSION["senha"])) {
	header("Location: login.php");
	exit;
}*/
?><!--Fim do código que verifica o login.-->


<!--Código PHP para fazer a leitura de totos os dados do banco de dados para depois mostrar todos os usuários cadastrados.-->
<?PHP
include "conexao.php";
$result = $link->query("select * from hospital");
?>

	<fieldset class="lista"><!--Campo para o formulario.-->



		<H3>Lista de Hospitais</H3>

		<!--Loop para exibir todos os usuários pesquisados no banco de dados.-->
		<?php
		if($result->num_rows > 0){
		  while ($row = $result->fetch_object()){
		?>
			<fieldset class="estudante">
				<div align="left">

					<table class="cad">
						<tr>
							<th class="col1">CNPJ: </th>
							<td class="col2"><?= $row->cnpj ?></td>
						</tr>
						<tr>
							<th class="col1">Nome do Hospital:</th>
							<td class="col2"><?= $row->nome_hospital ?></td>
						</tr>
						<tr>
							<th class="col1">Endereço:</th>
							<td class="col2"><?= $row->endereco ?></td>
						</tr><br>
						<tr>
							<th class="col1">Sala:</th>
							<td class="col2"><?= $row->sala ?></td>
						</tr>

						<tr>
							<th class="col1">Data de Cadastro:</th>
							<td class="col2"><?= $row->data_cadastro ?></td>
						</tr>
						<tr>
							<th class="col1">Ultima Atualização:</th>
							<td class="col2"><?= $row->ultima_atualizacao ?></td>
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
		<div> Não existe nenhum Hospital </div>
		<?php }
		?>
	</fieldset><br><!--Fim do campo-->
</body>
</html>