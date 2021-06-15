<?php 
	session_start ();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Funcionários</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/layout.css">
		<link rel="stylesheet" type="text/css" href="css/menu.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>	
	</head>
    <body>
        <div id="principal">
			<div id="topo">
				<div id="logo">
					<h1> THE MAX Celulares </h1>
					<h4> Controle de estoque e venda </h4>
				</div>
				<div id="menu_global"  class="menu_global">
					<ul>
                        <li> Olá <?php include "valida_login.php"; ?> </li>
						<li><a href="logout.php" class="active">Sair</a></li>
					</ul>                
				</div>
			</div>
			<div id="conteudo_especifico">
				<div class="div_central centralizar">
					<h1> FUNCIONÁRIOS </h1>
				</div>
				<div class="div_esquerda menu_local">					
					<?php include "menu_local.php"; ?>
				</div>		
				<div id="funcionalidade" class="div_direita">					
					<?php
						$conectar = mysqli_connect("localhost", "root", "", "celular"); 

						$sql_consulta = "SELECT id_fun, nome_fun, funcao_fun, status_fun FROM funcionarios";
						$resultado_consulta = mysqli_query($conectar, $sql_consulta);
					?>
					<p align="right"> <a class="botao" href="cadastra_fun.php" style="border: 1px solid black; border-radius: 10px;" title="Cadastrar Funcionário"> Cadastrar Funcionário&nbsp;<i class="fas fa-user-plus"></i> </a> </p>
					<table class="centralizar listaFun">
						<tr >
							<td class="esquerda" style="border-bottom: 1px solid black!important;">
								<p> Nome </p>
							</td>
							<td style="border-bottom: 1px solid black!important;">
								<p> Função </p>
							</td>
							<td style="border-bottom: 1px solid black!important;">
								<p> Status </p>
							</td >
							<td style="border-bottom: 1px solid black!important;">
								<p> Ação </p>
							</td>
						</tr>
						<?php
							while($registro = mysqli_fetch_row($resultado_consulta)) {
						?>	
							<tr>
								<td class="esquerda">
									<p>
										<a href="exibe_fun.php?codigo=<?php echo $registro[0] ?>">
											<?php echo "$registro[1]"; ?>
										</a>
									</p>
								</td>
								<td>
									<p>
										<?php echo "$registro[2]"; ?>
									</p>
								</td>
								<td>
									<p>
										<?php echo "$registro[3]"; ?>
									</p>
								</td>
								<td class="direita">
									<p>
										<a class="editar" href="altera_fun.php?codigo=<?php echo $registro[0] ?>" title="Editar Funcionário">
											<i class="fas fa-user-edit" style="color: white;"></i>
										</a>
										<a class="excluir" href="#abrirModal<?php echo $registro[0] ?>" data-confirm="Certeza?" title="Excluir Funcionário">
											<i class="fas fa-user-times" style="color: white;"></i>
										</a>
									</p>
								</td>
							</tr>
							<div id="abrirModal<?php echo $registro[0] ?>" class="modal">
								<div>
									<a href="#fechar" title="Fechar" class="fechar">x</a>
									<h2>Excluir funcionário</h2>
									<p>Você realmente deseja excluir este funcionário?</p>
									<a class="botaosim" href="processa_excluir_fun.php?codigo=<?php echo $registro[0] ?>">Sim</a>
									<a class="botaonao" href="#fechar">Não</a>
								</div>
							</div>
						<?php
							}
						?>
					</table>
				</div>				
			</div>	
			<div id="rodape">
				<div id="texto_institucional">
					<div id="texto_institucional">
						<h6> MAX - CONTROL </h6> 
						<h6> Rua do Technologia, 777 -- E-mail: contato@max_control.com.br -- Fone: (61) 99876 - 5432 </h6> 
					</div>  
				</div>
			</div>
		</div>
		<!-- <script src="css/model.js"></script> -->
    </body>
</html>