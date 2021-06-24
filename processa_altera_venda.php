<?php

$conectar = mysqli_connect("localhost", "root", "", "themax");

$id_fun = $_POST['id_fun'];
$id_cel = $_POST['id_cel'];
$data = $_POST['data'];
$hora = $_POST['hora'];

$sql_update = "UPDATE vendas SET id_fun = '$id_fun',  WHERE id_ven = '$cod'";

$sql_resultado_alteracao = mysqli_query($conectar, $sql_update);

if ($sql_resultado_alteracao == true) {

    echo "<script> alert ('Senha do administrador alterada com sucesso'); </script>";
    echo "<script> location.href = ('lista_fun.php'); </script>";
    exit();
} else {

    echo "<script> alert ('Ocorreu um erro no servidor. A senha do administrador não foi altarada. Volte e tente denovo'); </script>";
    echo "<script> location.href = ('altera_fun.php?codigo=$cod'); </script>";
    exit();
}
