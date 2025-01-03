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
$result = $link->query("select * from estudante");
?>

	<fieldset class="lista"><!--Campo para o formulario.-->



		<H3>Lista de Estudantes</H3>

		<!--Loop para exibir todos os usuários pesquisados no banco de dados.-->
		<?php
		if($result->num_rows > 0){
		  while ($row = $result->fetch_object()){
		?>
			<fieldset class="estudante">
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
						<tr>
							<th class="col1">CEP:</th>
							<td class="col2"><?= $row->cep ?></td>
						</tr>
						<tr>
							<th class="col1">Endereço:</th>
							<td class="col2"><?= $row->endereco ?></td>
						</tr>
						<tr>
							<th class="col1">Bairo:</th>
							<td class="col2"><?= $row->bairro ?></td>
						</tr>
						<tr>
							<th class="col1">Cidade:</th>
							<td class="col2"><?= $row->cidade ?></td>
						</tr>
						<tr>
							<th class="col1">UF:</th>
							<td class="col2"><?= $row->uf ?></td>
						</tr>
						<tr>
							<th class="col1">Telefone:</th>
							<td class="col2"><?= $row->telefone ?></td>
						</tr>
						<tr>
							<th class="col1">Modalidade de Ensino:</th>
							<td class="col2"><?= $row->turma ?></td>
						</tr>

						<tr>
							<th class="col1">Data de Cadastro:</th>
							<td class="col2"><?= $row->data_cadastro ?></td>
						</tr>
						<tr>
							<th class="col1">Ultima Atualização:</th>
							<td class="col2"><?= $row->ultima_atualizacao ?></td>
						</tr>
						<tr>
							<th class="col1">Status:</th>
							<td class="col2"><?= $row->status_internamento ?></td>
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
	</fieldset><br><!--Fim do campo-->
</body>
</html>