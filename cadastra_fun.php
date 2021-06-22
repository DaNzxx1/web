<?php 
	session_start ();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cadastrar Funcionário</title>
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
					<h1> CADASTRO DE FUNCIONÁRIOS </h1>
				</div>	
				<div id="funcionalidade" class="div_direita">
					<form method="post" class="form" action="processa_cadastra_fun.php">
						<fieldset class="grupo">
							<legend>Dados Pessoais</legend>

							<div class="campo">
								<label>Nome</label>
								<input type="text" name="nome" id="nome" required>
							</div>
							<div class="campo">
								<label>Telefone</label>
								<input type="text" name="telefone" id="telefone" required>
							</div>
							<div class="campo">
								<label>Data de Nascimento</label>
								<input type="date" name="data_nascimento" id="data_nascimento" required>
							</div>
							<div class="campo">
								<label>E-mail</label>
								<input type="email" name="email" id="email" required>
							</div>
							<div class="campo">
								<label>CPF</label>
								<input type="text" name="cpf" id="cpf" required>
							</div>
							<div class="campo">
								<label>RG</label>
								<input type="text" name="rg" id="rg" required>
							</div>
						</fieldset>

						<fieldset class="grupo">
							<legend>Dados de Endereço</legend>

							<div class="campo">
								<label>CEP</label>
								<input type="text" name="cep" id="cep" required>
							</div>
							<div class="campo">
								<label>Endereço</label>
								<input type="text" name="endereco" id="endereco">
							</div>
							<div class="campo">
								<label>Número</label>
								<input type="text" name="numero" id="numero">
							</div>
							<div class="campo">
								<label>Bairro</label>
								<input type="text" name="bairro" id="bairro" required>
							</div>	
							<div class="campo">
								<label>UF</label>
								<input type="text" name="uf" id="uf" required>
							</div>
						</fieldset>

						<fieldset class="grupo">
							<legend>Dados Empresariais</legend>
							
							<div class="campo">
								<label>Login</label>
								<input type="text" name="login" id="login" required>
							</div>
							<div class="campo">
								<label>Senha</label>
								<input type="password" name="senha" id="senha" required>
							</div>
							<div class="campo">
								<label>Função</label>
								<select name="funcao" id="funcao" required>
									<option selected disabled value="">Escolha</option>
									<option value="estoquista">Estoquista</option>
									<option value="vendedor">Vendedor</option>
								</select>
							</div>
							<div class="campo">
								<label>Data de Admissão</label>
								<input type="date" name="data_admissao" id="data_admissao" required>
							</div>
							<div class="campo">
								<label>Data de Demissão</label>
								<input type="date" name="data_demissao" id="data_demissao" readonly>
							</div>
							<div class="campo">
								<label>Carteira de Trabalho</label>
								<input type="text" name="carteira_trabalho" id="carteira_trabalho" required>
							</div>
						</fieldset>
						
						<p> <input type="submit" class="botao" value="Cadastrar Funcionário">  </p>
					</form>
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