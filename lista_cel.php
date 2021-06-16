<?php 
	session_start ();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Celulares</title>
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
				<div id="menu_global"  class="menu_global">
					<ul>
                        <li> Olá <?php include "valida_login.php"; ?> </li>
						<li><a href="logout.php" class="active">Sair</a></li>
					</ul>                
				</div>
			</div>
			<div id="conteudo_especifico">
				<div class="div_central centralizar">
					<h1> CELULARES </h1>
				</div>
				<div class="div_esquerda menu_local">					
					<?php include "menu_local.php"; ?>
				</div>		
				<div id="funcionalidade" class="div_direita">					
					<?php
						$conectar = mysqli_connect("localhost", "root", "", "themax"); 

						$sql_consulta = "SELECT id_cel, marca_cel, nome_cel, memoria_cel, preco_cel FROM celular";
						$resultado_consulta = mysqli_query($conectar, $sql_consulta);
					?>
					<p align="right"> <a href="cadastra_cel.php"> Cadastrar celular </a> </p>
					<table class="centralizar">
						<tr>
							<td class="esquerda">
								<p> Marca </p>
							</td>
							<td>
								<p> Nome </p>
							</td>
                            <td>
								<p> Memoria </p>
							</td>
							<td>
								<p> Preço </p>
							</td>
							<td class="direita">
								<p> Ação </p>
							</td>
						</tr>
						<?php
							while($registro = mysqli_fetch_row($resultado_consulta)) {
						?>
							<tr>
								<td class="esquerda">
									<p>
										<?php echo "$registro[1]"; ?>
									</p>
								</td>
								<td>
									<p>
                                        <a href="exibe_cel.php?codigo=<?php echo $registro[0] ?>">
										<?php echo "$registro[2]"; ?>
                                        </a>
									</p>
								</td>
								<td>
									<p>
										<?php echo "$registro[3]"; ?>
									</p>
								</td>
                                <td>
									<p>
										<?php echo "$registro[4]"; ?>
									</p>
								</td>
								<td class="direira">
									<p>
										<a href="altera_cel.php?codigo=<?php echo $registro[0] ?>">
											Alterar
										</a>
									</p>
								</td>
							</tr>
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
    </body>
</html>