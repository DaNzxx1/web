<?php
session_start();
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
			<div class="div_central centralizar">
				<h1> RELATÓRIO TOTAL DE VENDAS </h1>
				<?php
				$conectar = mysqli_connect("localhost", "root", "", "celular");

				$data = date('d/m/Y');

				$sql_consulta_total_vendas = "SELECT preco_cel
													  FROM celular
													  WHERE fila_compra_cel = 'V'";

				$resultado_consulta = mysqli_query($conectar, $sql_consulta_total_vendas);


				$valor_total = 0;
				while ($registro_total_vendas = mysqli_fetch_row($resultado_consulta)) {
					$valor_total = $valor_total + $registro_total_vendas[0];
				}
				?>
				<p> Total de vendas até a data de hoje: <?php echo $valor_total; ?> </p>
				<p> <a href="relatorios.php"> Voltar </a> </p>
			</div>


		</div>
		<div class="rodape">
			<div id="texto_institucional">
				<div id="texto_institucional">
					<h6> MAX - CONTROL </h6>
					<h6> Rua do Technologia, 777--E-mail: contato@max_control.com.br -- Fone: (61) 99876 - 5432 </h6>
				</div>
			</div>
		</div>
</body>

</html>