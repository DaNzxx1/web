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
				<h1> ALTERAÇÃO DE VENDA </h1>
			</div>

			<div id="funcionalidade" class="div_direita">
				<?php
				$conectar = mysqli_connect("localhost", "root", "", "themax");
				$id_fun = $_GET['id_fun'];
				$id_cel = $_GET['id_cel'];

				$sql_consulta = "SELECT
									VENDAS.ID_FUN,
									VENDAS.ID_CEL,
									FUNCIONARIOS.NOME_FUN,
									CONCAT(CELULAR.MARCA_CEL, ' ', CELULAR.NOME_CEL),
									CONVERT(DATAHORA_VEN, DATE),
									CONVERT(DATAHORA_VEN, TIME)
								FROM
									VENDAS
								JOIN FUNCIONARIOS
									ON FUNCIONARIOS.ID_FUN = VENDAS.ID_FUN
								JOIN CELULAR
									ON CELULAR.ID_CEL = VENDAS.ID_CEL
								WHERE VENDAS.ID_FUN = '$id_fun'
								AND VENDAS.ID_CEL = '$id_cel'";
				$resultado_consulta = mysqli_query($conectar, $sql_consulta);
				$registro = mysqli_fetch_row($resultado_consulta);

				$sql_fun = "SELECT
								ID_FUN,
								NOME_FUN
							FROM
								FUNCIONARIOS
							WHERE
								STATUS_FUN = 'ativo'";
				$resultado_fun = mysqli_query($conectar, $sql_fun);
				$registro_fun = mysqli_fetch_all($resultado_fun);

				$sql_cel = "SELECT
								ID_CEL,
								CONCAT(MARCA_CEL, ' ', NOME_CEL)
							FROM
								CELULAR
							WHERE
								FILA_COMPRA_CEL = 'N'";
				$resultado_cel = mysqli_query($conectar, $sql_cel);
				$registro_cel = mysqli_fetch_all($resultado_cel);
				?>
				<form method="post" action="processa_altera_venda.php">
					<input type="hidden" name="codigo" value="<?php echo "$cod"; ?>">
					<fieldset class="grupo">
						<legend>Dados da Venda</legend>

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
									echo "<option value='" . $celular[0] . "'>" . $celular[1] . "</option>";
								}
								?>
							</select>
						</div>
						<div class="campo">
							<label>Data</label>
							<input type="date" name="data" id="data" value="<?php echo $registro[4] ?>">
						</div>
						<div class="campo">
							<label>Hora</label>
							<input type="time" name="hora" id="hora" value="<?php echo $registro[5] ?>">
						</div>
					</fieldset>

					<p> <input type="submit" class="botao" value="Alterar Venda"> </p>
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