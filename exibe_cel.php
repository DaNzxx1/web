<?php 
	session_start ();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Exibição do Celular</title>
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
					<h1> EXIBIÇÃO DE DADOS DE CELULARES </h1>
				</div>
				<div class="div_esquerda menu_local">					
					<?php include "menu_local.php"; ?>
				</div>		
				<div id="funcionalidade" class="div_direita">					
					<?php
						$conectar = mysqli_connect("localhost", "root", "", "celular"); 
						$cod = $_GET['codigo'];

						$sql_consulta = "SELECT marca_cel, nome_cel, processador_cel, memoria_cel, 
                                                armazenamento_cel, camera_frontal_cel, camera_traseira_cel,
                                                so_cel, bateria_cel, preco_cel
												FROM celular
												WHERE id_cel = '$cod'";
						$resultado_consulta = mysqli_query($conectar, $sql_consulta);

						$registro = mysqli_fetch_row($resultado_consulta);         
                    ?>

					<table class="name">
							<tr>
								<td class="borda-direita"> <strong>Marca:</strong> </td> 
								<td> <?php echo $registro[0] ?> </td>
							</tr>
							<tr>
								<td class="borda-direita"> <strong>Nome:</strong> </td> 
								<td> <?php echo $registro[1] ?> </td>
							</tr>
							<tr>
								<td class="borda-direita"> <strong>Processador:</strong> </td> 
								<td> <?php echo $registro[2] ?> </td>
							</tr>
							<tr>
								<td class="borda-direita"> <strong>Memória:</strong> </td> 
								<td> <?php echo $registro[3] ?> </td>
							</tr>
							<tr>
								<td class="borda-direita"> <strong>Armazenamento:</strong> </td> 
								<td> <?php echo $registro[4] ?> </td>
							</tr>
							<tr>
								<td class="borda-direita"> <strong> Câmera Frontal:</strong> </td> 
								<td> <?php echo $registro[5] ?> </td>
							</tr>
							<tr>
								<td class="borda-direita"> <strong> Câmera Traseira:</strong> </td> 
								<td> <?php echo $registro[6] ?> </td>
							</tr>
							<tr>
								<td class="borda-direita"> <strong> Sistema Operacional:</strong> </td> 
								<td> <?php echo $registro[7] ?> </td>
							</tr>
							<tr>
								<td class="borda-direita"> <strong> Bateria:</strong> </td> 
								<td> <?php echo $registro[8] ?> </td>
							</tr>
							<tr>
								<td class="borda-direita"> <strong> Preço:</strong> </td> 
								<td> <?php echo $registro[9] ?> </td>
							</tr>
						</table>			
					
				</div>				
			</div>	
			<div id="rodape">
				<div id="texto_institucional">
					<div id="texto_institucional">
						<h6> ETB - Escola Técnica de Brasília </h6> 
						<h6> Curso - Técnico em Informática </h6> 
						<h6> Disciplina - Desenvolvimento Web II </h6> 
					</div> 
				</div>
				<div id="redes_sociais">
					<!-- <img src="imagens/icon_facebook.png">
					<img src="imagens/icon_linkeldin.png">
					<img src="imagens/icon_twiter.png"> -->
				</div>
		</div>
    </body>
</html>