<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>THE MAX | Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/layout.css">
		<link rel="stylesheet" href="css/menu.css">
		<link rel="stylesheet" href="css/style.css">
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
				</div>
			</div>
			<div class="conteudo_especifico">
				<div class="centralizar" style="margin-right: 270px;">
					<h1 style="text-shadow: 1px 1px 3px steelblue;"> ACESSO À ÁREA RESTRITA </h1>
					<form method="post" action="processa_login.php">
						<div class="box">
							<h2>Login</h2>
							<p>
								<input type="text" name="login" placeholder="Login" required>
							</p>
							<p>
								<input type="password" name="senha" placeholder="Senha" required>
							</p>
							<p>
								<input type="submit" value="Entrar">
							</p>
						</div>
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
				<div id="redes_sociais">
					<!-- <img src="imagens/icon_facebook.png">
						<img src="imagens/icon_linkeldin.png">
						<img src="imagens/icon_twiter.png"> -->
				</div>
			</div>
	</body>
</html>