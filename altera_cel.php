<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>THE MAX | Alterar Celular</title>
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
				<h1> ALTERAÇÃO DE CELULARES </h1>
			</div>

			<div id="funcionalidade" class="div_direita">
				<?php
				$conectar = mysqli_connect("localhost", "root", "", "themax");
				$cod = $_GET['codigo'];

				$sql_consulta = "SELECT marca_cel, nome_cel, numero_serie_cel, processador_cel, memoria_cel, armazenamento_cel,
                camera_frontal_cel, camera_traseira_cel, so_cel, bateria_cel, preco_cel FROM celular 
                                     WHERE id_cel = '$cod'";

				$resultado_consulta = mysqli_query($conectar, $sql_consulta);
				$registro = mysqli_fetch_row($resultado_consulta);
				?>
				<form method="post" action="processa_altera_cel.php">
					<input type="hidden" name="codigo" value="<?php echo "$cod"; ?>">
                    <fieldset class="grupo">
						<legend>Dados do Celular</legend>

                        <div class="campo">
                            <label>Numero de Série</label>
                            <input type="text" name="numero_serie" id="numero_serie" value="<?php echo $registro[2] ?>" required>
                        </div>
                        <div class="campo">
                            <label>Marca</label>
                            <input type="text" name="marca" id="marca" value="<?php echo $registro[0] ?>">
                        </div>
                        <div class="campo">
                            <label>Nome(modelo)</label>
                            <input type="text" name="nome" id="nome" value="<?php echo $registro[1] ?>">
                        </div>
                        <div class="campo">
                            <label>Processador</label>
                            <input type="text" name="processador" id="processador" value="<?php echo $registro[3] ?>">
                        </div>
                        <div class="campo">
                            <label>Memória(RAM)</label>
                            <input type="text" name="memoria" id="memoria" value="<?php echo $registro[4] ?>"">
                        </div>
                        <div class="campo">
                            <label>Armazenamento</label>
                            <input type="text" name="armazenamento" id="armazenamento" value="<?php echo $registro[5] ?>">
                        </div>
                        <div class="campo">
                            <label>Câmera Frontal</label>
                            <input type="text" name="camera_frontal" id="camera_frontal" value="<?php echo $registro[6] ?>">
                        </div>
                        <div class="campo">
                            <label>Câmera Traseira</label>
                            <input type="text" name="camera_traseira" id="camera_traseira" value="<?php echo $registro[7] ?>">
                        </div>
                        <div class="campo">
                            <label>Sistema Operacional</label>
                            <input type="text" name="sistema" id="sistema" value="<?php echo $registro[8] ?>">
                        </div>
                        <div class="campo">
                            <label>Bateria</label>
                            <input type="text" name="bateria" id="bateria" value="<?php echo $registro[9] ?>">
                        </div>
                        <div class="campo">
                            <label>Preço</label>
                            <input type="text" name="preco" id="preco" value="<?php echo $registro[10] ?>">
                        </div>
                    </fieldset>

                        <p> <input type="submit" class="botao" value="Alterar Funcionário">  </p>

				</form>
                <p> <a href="lista_cel.php" class="botao botaoEsquerda"> Voltar </a> </p>
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