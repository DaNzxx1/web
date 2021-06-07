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
        <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
    </head>
    <body>
        <div id="principal">
			<div id="topo">
				<div id="logo">
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
			<div id="conteudo_especifico">
				<div class="div_central centralizar">
					<h1> CADASTRO DE FUNCIONÁRIOS </h1>
				</div>
				<div class="div_esquerda menu_local">					
					<?php include "menu_local.php"; ?>
				</div>		
				<div id="funcionalidade" class="div_direita">
					<form method="post" action="processa_cadastra_fun.php">
						<table class="centralizar">	
							<tr>
								<td>
									<p> Nome: </p>
								</td>
								<td>
									<p> <input type="text" name="nome" required> </p>
								</td>
								<td>
									<p> E-mail: </p>
								</td>
								<td>
									<p> <input type="email" name="email" required> </p>
								</td>
							</tr>
							<tr>
								<td>
									<p> Data de Nascimento: </p>
								</td>
								<td>
									<p> <input type="date" name="data_nascimento" required> </p>
								</td>
								<td>
									<p> Celular: </p>
								</td>
								<td>
									<p> <input type="text" name="celular" required> </p>
								</td>
							</tr>
							<tr>
								<td>
									<p> CPF: </p>
								</td>
								<td>
									<p> <input type="text" name="cpf" required> </p>
								</td>
								<td>
									<p> RG: </p>
								</td>
								<td>
									<p> <input type="text" name="rg" required> </p>
								</td>
							</tr>
							<tr>
								<td>
									<p> Login:  </p>
								</td>
								<td>
									<p> <input type="text" name="login" required>  </p>
								</td>
								<td>
									<p> Senha:  </p>
								</td>
								<td>
									<p> <input type="password" name="senha" required>  </p>
								</td>
							</tr>
							<tr>
								<td>
									<p> Função:  </p>
								</td>
								<td>
									<p> <input type="radio" name="funcao" value="estoquista" checked> Estoquista </p>
									<p> <input type="radio" name="funcao" value="vendedor"> Vendedor </p>
								</td>
								<td>
									<p> Carteira de Trabalho:  </p>
								</td>
								<td>
									<p> <input type="text" name="carteira_de_trabalho" required>  </p>
								</td>
							</tr>
							<tr>
								<td>
									<p> CEP: </p>
								</td>
								<td>
									<p> <input type="text" name="cep" required> </p>
								</td>
								<td>
									<p> UF: </p>
								</td>
								<td>
									<p> <input type="text" name="uf" required> </p>
								</td>
							</tr>
							<tr>
								<td>
									<p> Quadra: </p>
								</td>
								<td>
									<p> <input type="text" name="quadra" required> </p>
								</td>
								<td>
									<p> Conjunto/Blocos: </p>
								</td>
								<td>
									<p> <input type="text" name="conjunto_blocos" required> </p>
								</td>
							</tr>
							<tr>
								<td>
									<p> Número: </p>
								</td>
								<td>
									<p> <input type="text" name="numero" required> </p>
								</td>
								<td>
									<p> Bairro: </p>
								</td>
								<td>
									<p> <input type="text" name="bairro" required> </p>
								</td>
							</tr>
							<tr>
								<td>
									<p> Data de Admissão: </p>
								</td>
								<td>
									<p> <input type="date" name="data_admissao" required> </p>
								</td>
								<td>
									<p> Data de Demissão: </p>
								</td>
								<td>
									<p> <input type="date" name="data_demissao" readonly> </p>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<p> <input type="submit" value="Cadastrar Funcionário">  </p>
								</td>
							</tr>
						</table>
					</form>
				</div>				
			</div>	
			<div id="rodape">
				<div id="texto_institucional">
					<div id="texto_institucional">
						<h6> AMPLI - CONTROL </h6> 
						<h6> Rua do Rock, 666 -- E-mail: contato@ampli_control.com.br -- Fone: (61) 9966 - 6677 </h6> 
					</div> 
				</div>
		</div>
    </body>
</html>