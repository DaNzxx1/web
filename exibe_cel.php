<?php 
	session_start ();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home</title>
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
						$conectar = mysqli_connect("localhost", "root", "", "themax"); 
						$cod = $_GET['codigo'];

						$sql_consulta = "SELECT marca_cel, nome_cel, processador_cel, memoria_cel, 
                                                armazenamento_cel, camera_frontal_cel, camera_traseira_cel,
                                                so_cel, bateria_cel, preco_cel
												FROM celular
												WHERE id_cel = '$cod'";
						$resultado_consulta = mysqli_query($conectar, $sql_consulta);

						$registro = mysqli_fetch_row($resultado_consulta);
                
                        echo "<p> Marca: $registro[0] <p>";
                        echo "<p> Nome: $registro[1] <p>";
                        echo "<p> Processador: $registro[2] <p>";
                        echo "<p> Memória: $registro[3] <p>";
                        echo "<p> Armazenamento: $registro[4] <p>";
                        echo "<p> Câmera Frontal: $registro[5] <p>";
                        echo "<p> Câmera Traseira: $registro[6] <p>";
                        echo "<p> Sistema Operacional: $registro[7] <p>";
                        echo "<p> Bateria: $registro[8] <p>";
                        echo "<p> Preço: R$ $registro[9] <p>";
                                    
                    ?>
					
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