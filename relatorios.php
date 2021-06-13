	session_start ();
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
        <div id="principal">
			<div id="topo">
				<div id="logo">
					<h1> THE MAX Celulares </h1>
					<h4> Controle de estoque e venda </h4>
				</div>
				<div id="menu_global"  class="menu_global">
					<ul>
                        <li> Olá <?php include "valida_login.php";?></li>
						<li><a href="logout.php" class="active">Sair</a></li>
					</ul>                
				</div>
			</div>
			<div id="conteudo_especifico">
				<div class="div_central centralizar menu_local">
					<h1> ADMINISTRAÇÃO </h1>
					<ul>
						<li><a href="administracao.php" class="active">Administração</a></li>
						<li><a href="rel_funci.php" class="active">Relatório de Funcionários</a></li>
						<li><a href="rel_cel.php">Relatório de celulares em estoque</a></li>
						<li><a href="rel_vendas.php" class="active">Relatório de vendas</a></li>		
						<link rel="stylesheet" type="text/css" href="saudacoes.php">		
					</ul> 
				</div>
			</div>
			<div id="rodape">
				<div id="texto_institucional">
					<div id="texto_institucional">
						<h6>  MAX - CONTROL </h6> 
						<h6> Rua do Technologia, 777-- E-mail: contato@max_control.com.br -- Fone: (61) 99876 - 5432 </h6> 
					</div> 
				</div>
				
		</div>
    </body>
</html>
