<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>THE MAX | Relatório Funcionários</title>
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
				<h1> RELATÓRIO DE FUNCIONÁRIOS ATIVOS</h1>

				<?php
				$conectar = mysqli_connect("localhost", "root", "", "themax");

				$sql_consulta = "SELECT id_fun, nome_fun,email_fun,telefone_fun, funcao_fun, status_fun FROM funcionarios
										 WHERE status_fun = 'ativo'";
				$resultado_consulta = mysqli_query($conectar, $sql_consulta);

				?>

				<table class="centralizar listaFun">
					<tr>
						<td class="esquerda" style="border-bottom: 1px solid black!important;">
								<p> Nome </p>
							</td>
							<td style="border-bottom: 1px solid black!important;">
								<p> Email </p>
							</td>
							<td style="border-bottom: 1px solid black!important;">
								<p> Telefone </p>
							</td>
							<td style="border-bottom: 1px solid black!important;">
								<p> Função </p>
							</td>
							<td style="border-bottom: 1px solid black!important;">
								<p> Status </p>
							</td>

					</tr>
					<?php
					while ($registro = mysqli_fetch_row($resultado_consulta)) {
					?>
						<tr>
							<td class="esquerda">
									<p>
										<a class="exibe" href="exibe_fun.php?codigo=<?php echo $registro[0] ?>" title="Exibir Funcionário">
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
										<?php echo "$registro[3]"; ?>
									</p>
								</td>
								<td>
									<p>
										<?php echo "$registro[4]"; ?>
									</p>
								</td>
								<td>
									<p>
										<?php echo "$registro[5]"; ?>
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