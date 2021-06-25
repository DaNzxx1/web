<?php

$conectar = mysqli_connect("localhost", "root", "", "themax");

$id_ven = $_POST['id_ven'];
$id_fun = $_POST['id_fun'];
$id_cel = $_POST['id_cel'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$data_hora = $data . ' ' . $hora;

// Atualiza o celular anterior para não vendido
$sql_update_cel_nao_ven = " UPDATE
                                CELULAR
                            SET
                                FILA_COMPRA_CEL = 'N'
                            WHERE
                                ID_CEL =(
                                    SELECT
                                        ID_CEL
                                    FROM
                                        VENDAS
                                    WHERE
                                        ID_VEN = '$id_ven'
                                )";

$sql_resultado_nao_vendido = mysqli_query($conectar, $sql_update_cel_nao_ven);

// Atualiza o celular atual para vendido
$sql_update_cel_ven = " UPDATE
                            CELULAR
                        SET
                            FILA_COMPRA_CEL = 'V'
                        WHERE
                            ID_CEL = '$id_cel'";

$sql_resultado_vendido = mysqli_query($conectar, $sql_update_cel_ven);

$sql_update = " UPDATE
                    VENDAS
                SET
                    ID_FUN = '$id_fun',
                    ID_CEL = '$id_cel',
                    DATAHORA_VEN = '$data_hora'
                WHERE
                    ID_VEN = '$id_ven'";

$sql_resultado_alteracao = mysqli_query($conectar, $sql_update);

$condicao = $sql_resultado_nao_vendido == true 
            && $sql_resultado_vendido == true 
            && $sql_resultado_alteracao == true;

if ($condicao) {

    echo "<script> alert ('Venda alterada com sucesso'); </script>";
    echo "<script> location.href = ('altera_venda.php'); </script>";
    exit();
} else {

    echo "<script> alert ('Ocorreu um erro no servidor.'); </script>";
    echo "<script> location.href = ('altera_venda.php?id_ven=$id_ven'); </script>";
    exit();
}
