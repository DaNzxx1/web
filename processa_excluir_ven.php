<?php

$conectar = mysqli_connect("localhost", "root", "", "themax");

$id_ven = $_GET['id_ven'];

$sql_remover = "DELETE FROM vendas WHERE id_ven = '$id_ven'";

$resultado = mysqli_query($conectar, $sql_remover);

if ($resultado == true) {
    echo "<script> alert('Venda excluída com sucesso!'); </script>";
    echo "<script> location.href = ('vendas.php'); </script>";
} else {
    echo "<script> alert('Ocorreu um erro no servidor. Tente de novo!'); </script>";
    echo "<script> location.href = ('vendas.php'); </script>";
}
