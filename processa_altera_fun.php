<?php 

$conectar = mysqli_connect("localhost", "root", "", "themax");

$cod = $_POST['codigo'];
$funcao = $_POST['funcao'];

if ($funcao == "administrador") {
    $senha = $_POST['senha'];

    $sql_update = "UPDATE funcionarios SET senha_fun = '$senha' WHERE id_fun = '$cod'";

    $sql_resultado_alteracao = mysqli_query($conectar, $sql_update);

    if ($sql_resultado_alteracao == true) {

        echo "<script> alert ('Senha do administrador alterada com sucesso'); </script>";
        echo "<script> location.href = ('lista_fun.php'); </script>";
        exit();

    } else {

        echo "<script> alert ('Ocorreu um erro no servidor. A senha do administrador não foi alterada. Volte e tente denovo'); </script>";
        echo "<script> location.href = ('altera_fun.php?codigo=$cod'); </script>";
        exit();

    }

} else {

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $data_nascimento = $_POST['data_nascimento'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $cep = $_POST['cep'];
    $endereco = $_POST['endereco'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $uf = $_POST['uf'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $funcao = $_POST['funcao'];
    $status = $_POST['status'];
    $date_admissao = $_POST['data_admissao'];
    $data_demissao = $_POST['data_demissao'];
    $carteira_trabalho = $_POST['carteira_trabalho'];

    $sql_consulta = "SELECT login_fun FROM funcionarios
                        WHERE login_fun = '$login'
                        AND id_fun <> '$cod'";

    $resultado_consulta = mysqli_query($conectar, $sql_consulta);
    $linhas = mysqli_num_rows($resultado_consulta);

    if ($linhas == 1) {
        
        echo "<script> alert('Login já cadastrado. Tente outro!'); </script>";
        echo "<script> location.href = ('altera_fun.php?codigo=$cod'); </script>";
        exit();

    } else {

        if (condition) {
            # code...
        } else {
            $sql_update = "UPDATE funcionarios SET nome_fun = '$nome', telefone_fun = '$telefone', data_nascimento_fun = '$data_nascimento', email_fun = '$email', cpf_fun = '$cpf' , rg_fun = '$rg',
            cep_fun = '$cep', endereco_fun = '$endereco', END_NUMERO_FUN = '$numero', bairro_fun = '$bairro', uf_fun = '$uf',
            login_fun = '$login', senha_fun = '$senha', funcao_fun = '$funcao', status_fun = '$status', date_admissao_fun = '$date_admissao', data_demissao_fun = '$data_demissao', carteira_de_trabalho_fun = '$carteira_trabalho'
                WHERE id_fun = '$cod'";
    
            $resultado_update = mysqli_query($conectar, $sql_update);
            
            if ($sql_update == true) {
    
                echo "<script> alert ('$nome alterado com sucesso') </script>";
                echo "<script> location.href = ('lista_fun.php') </script>";
                exit();
    
            } else {
                
                echo "<script> alert ('Ocorreu um erro no servidor. Dados do funcionário não foram alterados. Tente de novo') </script>";
                echo "<script> location.href = ('altera_fun.php?codigo=$cod') </script>";
    
            }
        }
        


    }
}
?>