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


	<?PHP
		if (isset($_GET["idCadastro"])){
			$idCadastro = $_GET["idCadastro"];
			include "conexao.php";
			$result = $link->query("SELECT * FROM atividade WHERE `idCadastro`='".$idCadastro."';");/*Procura na tabela*/
			if($result->num_rows == 1){
				$estud = $result->fetch_object();
			}else {
				header('Location: consulta_estudante.php');
				exit();
			}
		}else{
			header('Location: consulta_estudante.php');
			exit();
		}
	?>



<!--Código PHP para fazer a leitura de totos os dados do banco de dados para depois mostrar todos os usuários cadastrados.-->
<?PHP
include "conexao.php";
$result = $link->query("SELECT * from atividade WHERE idCadastro='".$idCadastro."'; ");
?>

	<fieldset class="lista"><!--Campo para o formulario.-->



		<H3>Lista de frequencia</H3>

		<!--Loop para exibir todos os usuários pesquisados no banco de dados.-->
		<?php
		if($result->num_rows > 0){
		  while ($row = $result->fetch_object()){
		?>
			<fieldset class="#">
				<div align="left">

					<table class="cad">
						<tr>
							<th class="col1">Id Cadastro: </th>
							<td class="col2"><?= $row->idCadastro ?></td>
						</tr>
						<tr>
							<th class="col1">Frequência:</th>
							<td class="col2"><?= $row->frequencia ?></td>
						</tr>
						<tr>
							<th class="col1">Loacal Atendimento:</th>
							<td class="col2"><?= $row->localAtendimento ?></td>
						</tr><br>
						<tr>
							<th class="col1">Objetivo:</th>
							<td class="col2"><?= $row->objetivo ?></td>
						</tr>
						<tr>
							<th class="col1">Profissional(is) Presente(s):</th>
							<td class="col2"><?= $row->profissionalPresente ?></td>
						</tr>
						<tr>
							<th class="col1">Situação Vivenciada:</th>
							<td class="col2"><?= $row->situacaoVivenciada ?></td>
						</tr>
						<tr>
							<th class="col1">Encaminhamento:</th>
							<td class="col2"><?= $row->encaminhamento ?></td>
						</tr>
						<tr>
							<th class="col1">Professor:</th>
							<td class="col2"><?= $row->professor ?></td>
						</tr>
						<tr>
							<th class="col1">Finalizado em:</th>
							<td class="col2"><?= $row->finalizadoEm ?></td>
						</tr>
						
					</table><br>

					<?php
					?>
						<a href="atualizar_cadastro_estudante.php?idCadastro=<?= $row->idCadastro ?>">Atualiza</a>
						<a href="excluir.php?idCadastro=<?= $row->idCadastro ?>">Excluir</a>
						<a href="internar.php?idCadastro=<?= $row->idCadastro ?>">Internar</a>
						<a href="alta.php?idCadastro=<?= $row->idCadastro ?>">Dar Alta</a>
						<a href="registro_de_atividade.php?idCadastro=<?= $row->idCadastro ?>">Registrar Atividade</a>
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