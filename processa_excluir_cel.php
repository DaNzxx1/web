<?php

$conectar = mysqli_connect("localhost", "root", "", "themax");

$cod = $_GET['codigo'];

$sql_remover = "DELETE FROM celular WHERE id_cel = '$cod'";

$resultado = mysqli_query($conectar, $sql_remover);

if ($resultado == true) {

    echo "<script> alert('Celular excluído com sucesso!'); </script>";
    echo "<script> location.href = ('lista_cel.php'); </script>";

} else {

    echo "<script> alert('Ocorreu um erro no servidor. Tente de novo!'); </script>";
    echo "<script> location.href = ('lista_cel.php'); </script>";

}