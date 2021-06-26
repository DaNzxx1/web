<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Alterar Funcionário</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/layout.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/grid.css">
	<link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
</head>

<body>
	<div class="principal">
		<div class="topo topo_grid">
			<div class="logo">
				<h1> THE MAX Celulares </h1>
				<h4> Controle de estoque e venda </h4>
			</div>
			<div class="menu_global">
				<ul>
					<li> Olá <?php include "valida_login.php"; ?> </li>
					<li><a href="logout.php" class="active">Sair</a></li>
				</ul>
			</div>
		</div>
		<div class="menu_local">
			<?php include "menu_local.php"; ?>
		</div>
		<div class="conteudo_especifico">
			<div class="centralizar">
				<h1> ALTERAÇÃO DE USUÁRIOS </h1>
			</div>

			<div id="funcionalidade" class="div_direita">
				<?php
				$conectar = mysqli_connect("localhost", "root", "", "themax");
				$cod = $_GET['codigo'];

				$sql_consulta = "SELECT * FROM funcionarios WHERE id_fun = '$cod'";
				$resultado_consulta = mysqli_query($conectar, $sql_consulta);
				$registro = mysqli_fetch_row($resultado_consulta);
				?>
				<form method="post" action="processa_altera_fun.php">
					<input type="hidden" name="codigo" value="<?php echo "$cod"; ?>">
					<?php
					if ($registro[10] <> "administrador") {
					?>
						<fieldset class="grupo">
							<legend>Dados Pessoais</legend>

							<div class="campo">
								<label>Nome</label>
								<input type="text" name="nome" id="nome" value="<?php echo $registro[1] ?>" required>
							</div>
							<div class="campo">
								<label>Telefone</label>
								<input type="text" name="telefone" id="telefone" value="<?php echo $registro[6] ?>">
							</div>
							<div class="campo">
								<label>Data de Nascimento</label>
								<input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo $registro[5] ?>">
							</div>
							<div class="campo">
								<label>E-mail</label>
								<input type="email" name="email" id="email" value="<?php echo $registro[4] ?>">
							</div>
							<div class="campo">
								<label>CPF</label>
								<input type="text" name="cpf" id="cpf" value="<?php echo $registro[2] ?>">
							</div>
							<div class="campo">
								<label>RG</label>
								<input type="text" name="rg" id="rg" value="<?php echo $registro[3] ?>">
							</div>
						</fieldset>

						<fieldset class="grupo">
							<legend>Dados de Endereço</legend>

							<div class="campo">
								<label>CEP</label>
								<input type="text" name="cep" id="cep" value="<?php echo $registro[15] ?>">
							</div>
							<div class="campo">
								<label>Endereço</label>
								<input type="text" name="endereco" id="endereco" value="<?php echo $registro[17] ?>">
							</div>
							<div class="campo">
								<label>Número</label>
								<input type="text" name="numero" id="numero" value="<?php echo $registro[18] ?>">
							</div>
							<div class="campo">
								<label>Bairro</label>
								<input type="text" name="bairro" id="bairro" value="<?php echo $registro[16] ?>">
							</div>
							<div class="campo">
								<label>UF</label>
								<input type="text" name="uf" id="uf" value="<?php echo $registro[14] ?>">
							</div>
						</fieldset>

						<fieldset class="grupo">
							<legend>Dados Empresariais</legend>

							<div class="campo">
								<label>Login</label>
								<input type="text" name="login" id="login" value="<?php echo $registro[7] ?>">
							</div>
							<div class="campo">
								<label>Senha</label>
								<input type="password" name="senha" id="senha" value="<?php echo $registro[8] ?>">
							</div>
							<div class="campo">
								<label>Função</label>
								<select name="funcao" id="funcao">
									<option value="estoquista" <?php if ($registro[10] == "estoquista") {
																	echo "selected";
																} ?>>Estoquista</option>
									<option value="vendedor" <?php if ($registro[10] == "vendedor") {
																	echo "selected";
																} ?>>Vendedor</option>
								</select>
							</div>
							<div class="campo">
								<label>Status</label>
								<select name="status">
									<option value="ativo" <?php if ($registro[9] == "ativo") {
																echo "selected";
															} ?>>Ativo</option>
									<option value="inativo" <?php if ($registro[9] == "inativo") {
																echo "selected";
															} ?>>Inativo</option>
								</select>
							</div>
							<div class="campo">
								<label>Data de Admissão</label>
								<input type="date" name="data_admissao" id="data_admissao" value="<?php echo $registro[12] ?>">
							</div>
							<div class="campo">
								<label>Data de Demissão</label>
								<input type="date" name="data_demissao" id="data_demissao" value="<?php echo $registro[13] ?>">
							</div>
							<div class="campo">
								<label>Carteira de Trabalho</label>
								<input type="text" name="carteira_trabalho" id="carteira_trabalho" value="<?php echo $registro[11] ?>">
							</div>
						</fieldset>

						<p> <input type="submit" class="botao" value="Alterar Funcionário"> </p>
					<?php
					} else {
					?>
						<input type="hidden" name="funcao" value="administrador">
						<fieldset class="grupo">
							<legend>Dados Pessoais</legend>

							<div class="campo">
								<label>Nome</label>
								<input type="text" name="nome" id="nome" value="<?php echo $registro[1] ?>" readonly>
							</div>
							<div class="campo">
								<label>Telefone</label>
								<input type="text" name="telefone" id="telefone" value="<?php echo $registro[6] ?>" readonly>
							</div>
							<div class="campo">
								<label>Data de Nascimento</label>
								<input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo $registro[5] ?>" readonly>
							</div>
							<div class="campo">
								<label>E-mail</label>
								<input type="email" name="email" id="email" value="<?php echo $registro[4] ?>" readonly>
							</div>
							<div class="campo">
								<label>CPF</label>
								<input type="text" name="cpf" id="cpf" value="<?php echo $registro[2] ?>" readonly>
							</div>
							<div class="campo">
								<label>RG</label>
								<input type="text" name="rg" id="rg" value="<?php echo $registro[3] ?>" readonly>
							</div>
						</fieldset>

						<fieldset class="grupo">
							<legend>Dados de Endereço</legend>

							<div class="campo">
								<label>CEP</label>
								<input type="text" name="cep" id="cep" value="<?php echo $registro[15] ?>" readonly>
							</div>
							<div class="campo">
								<label>Endereço</label>
								<input type="text" name="endereco" id="endereco" value="<?php echo $registro[17] ?>" readonly>
							</div>
							<div class="campo">
								<label>Número</label>
								<input type="text" name="numero" id="numero" value="<?php echo $registro[18] ?>" readonly>
							</div>
							<div class="campo">
								<label>Bairro</label>
								<input type="text" name="bairro" id="bairro" value="<?php echo $registro[16] ?>" readonly>
							</div>
							<div class="campo">
								<label>UF</label>
								<input type="text" name="uf" id="uf" value="<?php echo $registro[14] ?>" readonly>
							</div>
						</fieldset>

						<fieldset class="grupo">
							<legend>Dados Empresariais</legend>

							<div class="campo">
								<label>Login</label>
								<input type="text" name="login" id="login" value="<?php echo $registro[7] ?>" readonly>
							</div>
							<div class="campo">
								<label>Senha</label>
								<input type="password" name="senha" id="senha" value="<?php echo $registro[8] ?>">
							</div>
							<div class="campo">
								<label>Função</label>
								<select name="funcao" id="funcao" readonly>
									<option value="administrador" <?php echo "administrador"; ?>>Administrador</option>
								</select>
							</div>
							<div class="campo">
								<label>Status</label>
								<input type="text" name="status" id="status" value="<?php echo "Ativo"; ?>" readonly>
							</div>
							<div class="campo">
								<label>Data de Admissão</label>
								<input type="date" name="data_admissao" id="data_admissao" value="<?php echo $registro[12] ?>" readonly>
							</div>
							<div class="campo">
								<label>Data de Demissão</label>
								<input type="date" name="data_demissao" id="data_demissao" value="<?php echo $registro[13] ?>" readonly>
							</div>
							<div class="campo">
								<label>Carteira de Trabalho</label>
								<input type="text" name="carteira_trabalho" id="carteira_trabalho" value="<?php echo $registro[11] ?>" readonly>
							</div>
						</fieldset>

						<p> <input type="submit" class="botao" value="Alterar Funcionário"> </p>
					<?php
					}
					?>
				</form>
				<p> <button type="submit" onclick="history.back();" class="botao botaoEsquerda">Voltar</button> </p>
			</div>
		</div>
		<div class="rodape">
			<div id="texto_institucional">
				<div id="texto_institucional">
					<h6> MAX - CONTROL </h6>
					<h6> Rua do Technologia, 777 -- E-mail: contato@max_control.com.br -- Fone: (61) 99876 - 5432 </h6>
				</div>
			</div>
		</div>
	</div>
</body>

</html>