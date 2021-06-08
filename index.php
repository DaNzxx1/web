<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/layout.css">
		<link rel="stylesheet" href="css/menu.css">
        <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
    </head>
    <body>
        <div id="principal">
			<div id="topo">
				<div id="logo">
					<h1> THE MAX Celulares </h1>
					<h4> Controle de estoque e venda </h4>
				</div>
				<div id="menu_global"  class="menu_global">
					                
				</div>
			</div>
			<div id="conteudo_especifico">
				<div class="div_central centralizar">
					<h1> ACESSO À ÁREA RESTRITA </h1>
					<form method="post" action="processa_login.php">
						<p>
							Login: <br>
							<input type="text" name="login" required>
						</p>
						<p>
							Senha: <br>
							<input type="password" name="senha" required>
						</p>
						<p>
							<input type="submit" value="Entrar">
						</p>
					</form>										
				</div>				
			</div>
			<div id="rodape">
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