<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>THE MAX | Relatório de Vendas dos Últimos 30 dias </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/layout.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/grid.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
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
				<h1> RELATÓRIO DE VENDAS NOS ÚLTIMOS 30 DIAS</h1>

				<?php
						$conectar = mysqli_connect ("localhost", "root", "", "themax");

						$data = intval(date("m"));
						$data = $data - 1;
						$dataP = date("Y-".$data."-d");

						$sql_consulta = "SELECT
									ID_VEN,
									FUNCIONARIOS.NOME_FUN,
									CONCAT(CELULAR.MARCA_CEL, ' ', CELULAR.NOME_CEL),
									DATAHORA_VEN
								FROM
									VENDAS
								JOIN FUNCIONARIOS
									ON FUNCIONARIOS.ID_FUN = VENDAS.ID_FUN
								JOIN CELULAR
									ON CELULAR.ID_CEL = VENDAS.ID_CEL
								WHERE DATAHORA_VEN > '$dataP'";
						$resultado_consulta = mysqli_query($conectar, $sql_consulta);

					?>
					
					<table class="centralizar listaPadrao">
						<tr>
							<td style="border-bottom: 1px solid black!important;">
								<p> Funcionario </p>
							</td>
							<td style="border-bottom: 1px solid black!important;">
								<p> Celular </p>
							</td>
							<td style="border-bottom: 1px solid black!important;">
								<p> Data e Hora </p>
							</td>
						</tr>
						<?php		
							while ($registro = mysqli_fetch_row($resultado_consulta)) {
						?>						
						<tr>
							<td class="esquerda">
								<p>
									<a class="exibe" href="exibe_venda.php?id_ven=<?php echo $registro[0] ?>" title="Exibir Venda">
										<i class="fas fa-stream" style="color: white;"></i>
									</a>&nbsp;
									<?php echo "$registro[1]"; ?>
								</p>
							</td>
							<td>
								<p>
									<?php echo "$registro[2]"; ?>
								</p>
							</td>
							<td>
								<p>
									<?php
									$d = strtotime($registro[3]);
									echo date("d/m/Y H:i:s", $d);
									?>
								</p>
							</td>
						</tr>
						<?php
							}
						?>
					</table>
				<p> <a href="relatorios.php" class="botao botaoEsquerda"> Voltar </a> </p>


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