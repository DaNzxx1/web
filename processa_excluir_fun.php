<?php

$conectar = mysqli_connect("localhost", "root", "", "celular");

$cod = $_GET['codigo'];

$sql_remover = "DELETE FROM funcionarios WHERE id_fun = '$cod'";

$resultado = mysqli_query($conectar, $sql_remover);

if ($resultado == true) {

    echo "<script> alert('Funcionário excluído com sucesso!'); </script>";
    echo "<script> location.href = ('lista_fun.php'); </script>";

} else {

    echo "<script> alert('Ocorreu um erro no servidor. Tente de novo!'); </script>";
    echo "<script> location.href = ('lista_fun.php'); </script>";

}

