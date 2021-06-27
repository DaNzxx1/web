<?php 
	session_start ();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>THE MAX | Cadastrar Celular</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/layout.css">
		<link rel="stylesheet" type="text/css" href="css/menu.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/grid.css">
        <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
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
						<li><a href="logout.php" class="active">Sair&nbsp;<i class="fas fa-sign-out-alt"></i></a></li>                        
                    </ul>                
				</div>
			</div>
			<div class="menu_local">
				<?php include "menu_local.php"; ?>
			</div>
			<div class="conteudo_especifico">
				<div class="centralizar">
					<h1> CADASTRO DE CELULARES </h1>
				</div>		
				<div id="funcionalidade" class="div_direita">
					<form method="post" class="form" action="processa_cadastra_cel.php">
						<fieldset class="grupo">
							<legend>Dados do Celular</legend>

							<div class="campo">
								<label>Numero de Série</label>
								<input type="text" name="numero_serie" id="numero_serie" required>
							</div>
							<div class="campo">
								<label>Marca</label>
								<input type="text" name="marca" id="marca" required>
							</div>
							<div class="campo">
								<label>Nome(modelo)</label>
								<input type="text" name="nome" id="nome" required>
							</div>
							<div class="campo">
								<label>Processador</label>
								<input type="text" name="processador" id="processador" required>
							</div>
							<div class="campo">
								<label>Memória(RAM)</label>
								<input type="text" name="memoria" id="memoria" required>
							</div>
							<div class="campo">
								<label>Armazenamento</label>
								<input type="text" name="armazenamento" id="armazenamento" required>
							</div>
							<div class="campo">
								<label>Câmera Frontal</label>
								<input type="text" name="camera_frontal" id="camera_frontal" required>
							</div>
							<div class="campo">
								<label>Câmera Traseira</label>
								<input type="text" name="camera_traseira" id="camera_traseira" required>
							</div>
							<div class="campo">
								<label>Sistema Operacional</label>
								<input type="text" name="sistema" id="sistema" required>
							</div>
							<div class="campo">
								<label>Bateria</label>
								<input type="text" name="bateria" id="bateria" required>
							</div>
							<div class="campo">
								<label>Preço</label>
								<input type="text" name="preco" id="preco" required>
							</div>
							<div class="campo">
								<label>Foto:<br/></label>
							</div>
							<div class="campo">
								<p> <input type="file" name="foto" id="foto" required> </p>	
							</div>
						</fieldset>
							

						<p> <input type="submit" class="botao" value="Cadastrar Celular">  </p>
					</form>
					<p> <a href="lista_cel.php" class="botao botaoEsquerda"> Voltar </a> </p>
				</div>				
			</div>	
			<div class="rodape">
				<div id="texto_institucional">
					<div id="texto_institucional">
						<h6> AMPLI - CONTROL </h6> 
						<h6> Rua do Rock, 666 -- E-mail: contato@ampli_control.com.br -- Fone: (61) 9966 - 6677 </h6> 
					</div> 
				</div>
		</div>
    </body>
</html>