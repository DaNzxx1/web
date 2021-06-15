<?php 

$conectar = mysqli_connect ("localhost", "root", "", "celular");

$nome = $_POST['nome'];
$celular = $_POST['celular'];
$data_nascimento = $_POST['data_nascimento'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$cep = $_POST['cep'];
$quadra = $_POST['quadra'];
$conjunto_blocos = $_POST['conjunto_bloco'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$uf = $_POST['uf'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$funcao = $_POST['funcao'];
$data_admissao = $_POST['data_admissao'];
$data_demissao = $_POST['data_demissao'];
$carteira_trabalho = $_POST['carteira_trabalho'];

$sql_consulta = "SELECT login_fun FROM funcionarios
                    WHERE login_fun = '$login'";

$resultado_consulta = mysqli_query($conectar, $sql_consulta);

$linhas = mysqli_num_rows($resultado_consulta);

if ($linhas == 1) {

    echo "<script> alert ('Login já cadastrado. Tente outro!'); </script>";
    echo "<script> location.href = ('cadastra_fun.php'); </script>";

} else { //Caso o usuario não exista
    $sql_cadastrar = "INSERT INTO funcionarios (nome_fun, celular_fun, data_nascimento_fun, email_fun, cpf_fun, rg_fun,
                        cep_fun, quadra_fun, conjunto_blocos_fun, numero_fun, bairro_fun, uf_fun,
                        login_fun, senha_fun, funcao_fun, data_admissao_fun, data_demissao_fun, carteira_de_trabalho_fun)
                        VALUES ('$nome', '$celular', '$data_nascimento', '$email', '$cpf', '$rg', 
                        '$cep', '$quadra', '$conjunto_blocos', '$numero', '$bairro', '$uf',
                        '$login', '$senha', '$funcao', '$data_admissao', '$data_demissao', '$carteira_trabalho')";
    $resultado_cadastrar = mysqli_query($conectar, $sql_cadastrar);

    if ($resultado_cadastrar == true) {

        echo "<script> alert ('$nome cadastrado com sucesso'); </script>";
        echo "<script> location.href = ('cadastra_fun.php'); </script>";

    } else {

        echo "<script> alert ('Ocorreu um erro no servidor. Tente de novo'); </script>";
        echo "<script> location.href = ('cadastra_fun.php'); </script>";

    }
}
?>