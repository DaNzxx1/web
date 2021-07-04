<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>THE MAX | Relatório Valor Total de Vendas</title>
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
				<h1> RELATÓRIO TOTAL DE VENDAS </h1>
				<?php
				$conectar = mysqli_connect("localhost", "root", "", "themax");

				$data = date('d/m/Y');

				$sql_consulta_total_vendas = "SELECT preco_cel
													  FROM celular
													  WHERE fila_compra_cel = 'V'";

				$resultado_consulta = mysqli_query($conectar, $sql_consulta_total_vendas);


				$valor_total = 0;
				while ($registro_total_vendas = mysqli_fetch_row($resultado_consulta))
				 {

					$valor_total = $valor_total + $registro_total_vendas[0];
				}
				?>
				<p> Total de vendas até a data de hoje: <?php echo 'R$ ' . number_format($valor_total, 2, ',', '.'); ?> </p>
				<p> <a href="relatorios.php" class="botao" style="float: none;"> Voltar </a> </p>
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