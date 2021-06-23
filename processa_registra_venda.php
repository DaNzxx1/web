<?php 
date_default_timezone_set("America/Sao_Paulo");

$conectar = mysqli_connect ("localhost", "root", "", "themax");

$id_fun = $_POST['id_fun'];
$id_cel = $_POST['id_cel'];
$data_venda = $_POST['data_venda'];
$hora_venda = date("H:i:s");
$data_hora_venda = $data_venda." ".$hora_venda;

$sql_cadastrar = "INSERT INTO vendas (ID_FUN, ID_CEL, DATAHORA_VEN) 
                    VALUES ($id_fun, $id_cel, '$data_hora_venda') ";
$resultado_cadastrar = mysqli_query($conectar, $sql_cadastrar);

$sql_venda = "UPDATE celular SET FILA_COMPRA_CEL = 'V' WHERE ID_CEL = $id_cel ";
$resultado_venda = mysqli_query($conectar, $sql_venda);

if ($resultado_cadastrar == true && $resultado_venda == true) {

    echo "<script> alert ('Venda registrada com sucesso'); </script>";
    echo "<script> location.href = ('registra_venda.php'); </script>";
    
} else {

    echo "<script> alert ('Ocorreu um erro no servidor. Tente de novo'); </script>";
    echo "<script> location.href = ('registra_venda.php'); </script>";

}