<?php
date_default_timezone_set("America/Sao_Paulo");
session_start();
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
		<div class="conteudo_especifico">
			<div class="centralizar">
				<h1> REGISTRO DE VENDAS </h1>
			</div>
			<div id="funcionalidade">
				<?php
				$conectar = mysqli_connect("localhost", "root", "", "themax");

				$sql_consulta_fun = "SELECT ID_FUN, NOME_FUN FROM funcionarios WHERE STATUS_FUN = 'ativo'";
				$resultado_consulta_fun = mysqli_query($conectar, $sql_consulta_fun);
				$registro_fun = mysqli_fetch_all($resultado_consulta_fun);

				$sql_consulta_cel = "SELECT ID_CEL, MARCA_CEL, NOME_CEL FROM celular WHERE FILA_COMPRA_CEL = 'N'";
				$resultado_consulta_cel = mysqli_query($conectar, $sql_consulta_cel);
				$registro_cel = mysqli_fetch_all($resultado_consulta_cel);

				?>
				<form method="post" class="form" action="processa_registra_venda.php">
					<fieldset class="grupo">
						<legend>Venda</legend>

						<div class="campo">
							<label>Funcionário</label>
							<select name="id_fun" id="funcionario">
								<?php
								foreach ($registro_fun as $funcionario) {
									echo "<option value='" . $funcionario[0] . "'>" . $funcionario[1] . "</option>";
								}
								?>
							</select>
						</div>
						<div class="campo">
							<label>Celular</label>
							<select name="id_cel" id="celular">
								<?php
								foreach ($registro_cel as $celular) {
									echo "<option value='" . $celular[0] . "'>" . $celular[1] . " " . $celular[2] . "</option>";
								}
								?>
							</select>
						</div>
						<div class="campo">
							<label>Data e Hora</label>
							<?php
							echo "<input type='date' name='data_venda' id='data_venda' value='" . date("Y-m-d") . "' readonly>"
							?>
						</div>
					</fieldset>

					<p> <input type="submit" class="botao" value="Cadastrar Venda"> </p>
					<p> <input type="submit" onclick="history.back();" class="botao" value="Voltar"> </p>
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