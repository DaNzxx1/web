<?php 
    if ($_SESSION["funcao_fun"] == "administrador") {
?>
    <ul>
        <li><a href="administracao.php" class="active">Administração</a></li>
        <li><a href="lista_fun.php" class="active">Funcionários</a></li>
        <li><a href="lista_cel.php">Celulares</a></li>
        <li><a href="vendas.php">Vendas</a></li>
        <li><a href="relatorios.php">Relatórios</a></li>
    </ul>
<?php
    } elseif ($_SESSION["funcao_fun"] == "estoquista") {
?>
    <ul>
        <li><a href="administracao.php" class="active">Administração</a></li>
        <li><a href="lista_cel.php">Celulares</a></li>
    </ul>
<?php
    } elseif ($_SESSION["funcao_fun"] == "vendedor") {
?>
    <ul>
        <li><a href="administracao.php" class="active">Administração</a></li>
        <li><a href="vendas.php">Vendas</a></li>
    </ul>
<?php
    }
?>