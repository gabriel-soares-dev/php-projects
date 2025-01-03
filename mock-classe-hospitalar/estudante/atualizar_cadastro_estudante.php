<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<title>Atualizar Cadastro de Estudante</title>

	<!--A tag <link> solicita os estilos "CSS" da folha de estilo externa.-->
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
		        <li><a href="estudante/cadastro_de_estudante.php">Cadastrar Estudante</a></li>
				<li><a href="http://localhost/sete/hospital/cadastro_de_hospital.php">Cadastrar Hospital</a></li>
				<li><a href="http://localhost/sete/estudante/internados.php">Internados</a></li>
		     	<li><a href="">Contato</a></li>
		    </ul>
		</nav>
	</header>
	<!--Aqui finaliza o Menu de navegação.-->

	<!--Aqui começa o código "PHP" que abre a conexão com banco de dados para pesquisar determinado usuário.-->
	<?PHP
	if (isset($_GET["idCadastro"])){
			$idCadastro = $_GET["idCadastro"];
			include "conexao.php";
			$result = $link->query("SELECT * FROM estudante WHERE `idCadastro`='".$idCadastro."';");/*Procura na tabela*/
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
	?> <!--Aqui termina o código "PHP" que abre a conexão com banco de dados.-->
	
	<!--Aqui começa o formulario que recebe os dados via "PHP"-->
	<fieldset class="cadastro">
		<h3>Atulizar dados</h3>
		<form name="atual" action="atualizar2_cadastro_estudante.php" method="post">
		
		<div>
			<label for="idCadastro">Id Cadastro:</label>
			<input type="text" name="idCadastro" value="<?= $estud->idCadastro ?>" readonly/>
		</div>

		<div>
			<label for="name_estudante">Nome:</label>
			<input type="text" name="nome_estudante" value="<?= $estud->nome_estudante ?>">
		</div>

		<div>
			<label for="data_nascimento">Data de Nascimento:</label>
			<input type="date" name="data_nascimento" value="<?= $estud->data_nascimento ?>">
		</div><br>
		
		<label for="filiacao">Filiação:</label>
		<div>
			<label for="nome_pai">Nome do Pai:</label>
			<input type="text" name="nome_pai" value="<?= $estud->nome_pai ?>">
		</div>

		<div>
			<label for="nome_mae">Nome da Mãe</label>
			<input type="text" name="nome_mae" value="<?= $estud->nome_mae ?>">
		</div>
		
		<div>
			<label for="cep">Cep:</label>
			<input type="text" name="cep" value="<?= $estud->cep ?>">
		</div>


		<div>
			<label for="endereco">Endereço:</label>
			<input type="text" name="endereco" value="<?= $estud->endereco ?>">
		</div>

		<div>
			<label for="bairro">Bairro:</label>
			<input type="text" name="bairro" value="<?= $estud->bairro ?>">
		</div>

		<div>
			<label for="cidade">Cidade</label>
			<input type="text" name="cidade" value="<?= $estud->cidade ?>">
		</div>

		<div>
			<label for="uf">UF</label>
			<input type="text" name="uf" maxlength="2" value="<?= $estud->uf ?>">
		</div>


		<div>
			<label for="telefone">Telefone:</label>
			<input type="text" name="telefone" onkeypress="mascara(this, '## #####-####')" maxlength="13" size="10" autofocus value="<?= $estud->telefone ?>">
		</div>
		
		<div>
			<label for="turma">Turma:</label>
			<input list="turma" name="turma">

				<datalist id="turma">
				  <option value="Educação Infantil">
				  <option value="Ensino Fundamental">
				  <option value="Educação Especial">
				  <option value="Educação de Jovens e Adultos">
				  <option value="Correção de Fluxo">
			</datalist>

		</div>

		<div>
			<label for="data_cadastro"></label>
			<input type="hidden" name="data_cadastro" value="<?= $estud->data_cadastro ?>">
		</div>
			
		<div>
			<input type="hidden" name="status_internamento" value="<?= $estud->status_internamento ?>">
		</div>

		<br>
		<button type="submit" title="Cadastrar">Atualizar</button>
	</form>
	</fieldset>
	<!--Aqui termina o formulario que recebe os dados via "PHP"-->
</body>
</html>