<?php 

$conectar = mysqli_connect("localhost", "root", "", "themax");

$cod = $_POST['codigo'];

$numero_serie = $_POST["numero_serie"];
$marca = $_POST["marca"];
$nome = $_POST["nome"];
$processador = $_POST["processador"];
$memoria = $_POST["memoria"];
$armazenamento = $_POST["armazenamento"];
$camera_frontal = $_POST["camera_frontal"];
$camera_traseira = $_POST["camera_traseira"];
$sistema = $_POST["sistema"];
$bateria = $_POST["bateria"];
$preco = $_POST ["preco"];
$foto = $_POST["foto"];

$foto_nome = "img/".$foto;

if($foto == null){
    $sql_update = "UPDATE celular SET nome_cel = '$nome', marca_cel = '$marca', numero_serie_cel = '$numero_serie', processador_cel = '$processador', memoria_cel = '$memoria', armazenamento_cel = '$armazenamento',
        camera_frontal_cel = '$camera_frontal', camera_traseira_cel = '$camera_traseira', so_cel = '$sistema', bateria_cel = '$bateria', preco_cel = '$preco'
            WHERE id_cel = '$cod'";

    $resultado_update = mysqli_query($conectar, $sql_update);
} else {
    $sql_update = "UPDATE celular SET nome_cel = '$nome', marca_cel = '$marca', numero_serie_cel = '$numero_serie', processador_cel = '$processador', memoria_cel = '$memoria', armazenamento_cel = '$armazenamento',
    camera_frontal_cel = '$camera_frontal', camera_traseira_cel = '$camera_traseira', so_cel = '$sistema', bateria_cel = '$bateria', preco_cel = '$preco', foto_cel = '$foto_nome'
        WHERE id_cel = '$cod'";

    $resultado_update = mysqli_query($conectar, $sql_update);  
}

if ($sql_update == true) {

    echo "<script> alert ('$marca $nome alterado com sucesso') </script>";
    echo "<script> location.href = ('lista_cel.php') </script>";
    exit();

} else {
            
    echo "<script> alert ('Ocorreu um erro no servidor. Dados do celular não foram alterados. Tente de novo') </script>";
    echo "<script> location.href = ('altera_cel.php?codigo=$cod') </script>";

    }
?>