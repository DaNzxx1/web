<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>THE MAX | Vendas</title>
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
		<div class="conteudo_especifico centralizar">
			<h1> VENDAS </h1>
			<div>
				<a class="botao" href="registra_venda.php" title="Cadastrar Venda">
					Cadastrar Venda <i class="fas fa-user-plus"></i>
				</a>
			</div>
			<div id="funcionalidade">
				<?php
				$conectar = mysqli_connect("localhost", "root", "", "themax");

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
									ON CELULAR.ID_CEL = VENDAS.ID_CEL";
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
						<td style="border-bottom: 1px solid black!important;">
							<p> Ação </p>
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
							<td>
								<p>
									<a class="editar" href="altera_venda.php?id_ven=<?php echo $registro[0] ?>" title="Editar Venda">
										<i class="fas fa-user-edit" style="color: white;"></i>
									</a>
									<?php if ($_SESSION["funcao_fun"] == 'administrador') {
									?>
										<a class="excluir" href="#abrirModal<?php echo $registro[0] ?>" data-confirm="Certeza?" title="Excluir Venda">
											<i class="fas fa-user-times" style="color: white;"></i>
										</a>
									<?php } 
									?>
								</p>
							</td>
						</tr>
						<div id="abrirModal<?php echo $registro[0] ?>" class="modal">
							<div>
								<a href="#fechar" title="Fechar" class="fechar">x</a>
								<h2>Excluir Venda</h2>
								<p>Você realmente deseja excluir este Venda?</p>
								<a class="botaosim" href="processa_excluir_ven.php?id_ven=<?php echo $registro[0] ?>">Sim</a>
								<a class="botaonao" href="#fechar">Não</a>
							</div>
						</div>
					<?php
					}
					?>
				</table>
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