<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>THE MAX | Exibe Venda</title>
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
				<h1> EXIBIÇÃO DE DADOS DE VENDA </h1>
			</div>

			<div id="funcionalidade" class="div_direita">
				<?php
				$conectar = mysqli_connect("localhost", "root", "", "themax");
				$id_ven = $_GET['id_ven'];

				$sql_consulta = "SELECT 
									FUNCIONARIOS.NOME_FUN,
									CONCAT(CELULAR.MARCA_CEL, ' ', CELULAR.NOME_CEL),
									DATAHORA_VEN
								FROM VENDAS
								JOIN FUNCIONARIOS
									ON FUNCIONARIOS.ID_FUN = VENDAS.ID_FUN
								JOIN CELULAR
									ON CELULAR.ID_CEL = VENDAS.ID_CEL
								WHERE ID_VEN = '$id_ven'";
				$resultado_consulta = mysqli_query($conectar, $sql_consulta);

				$registro = mysqli_fetch_row($resultado_consulta);
				?>
				<table class="name">
					<tr>
						<td class="borda-direita"> <strong>Funcionário:</strong> </td>
						<td> <?php echo $registro[0] ?> </td>
					</tr>
					<tr>
						<td class="borda-direita"> <strong>Celular:</strong> </td>
						<td> <?php echo $registro[1] ?> </td>
					</tr>
					<tr>
						<td class="borda-direita"> <strong>Data e Hora:</strong> </td>
						<td>
							<?php
							$d = strtotime($registro[2]);
							echo date("d/m/Y H:i:s", $d);
							?>
						</td>
					</tr>
				</table>
				<p> <button type="submit" onclick="history.back();" class="botao botaoEsquerda">Voltar</button> </p>
			</div>
		</div>
		<div class="rodape">
			<div id="texto_institucional">
				<div id="texto_institucional">
					<h6> MAX - CONTROL </h6>
					<h6> Rua do Technologia, 777 -- E-mail: contato@max_control.com.br -- Fone: (61) 99876 - 5432 </h6>
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