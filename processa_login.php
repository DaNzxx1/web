<?php

    session_start();

    $conectar = mysqli_connect("localhost", "root", "", "themax");

    $login = $_POST["login"];
    $senha = $_POST["senha"];

    $sql_consulta = "SELECT
                        ID_FUN,
                        NOME_FUN,
                        LOGIN_FUN,
                        SENHA_FUN,
                        FUNCAO_FUN
                    FROM
                        FUNCIONARIOS
                    WHERE
                        (
                            LOGIN_FUN = '$login' AND SENHA_FUN = '$senha' AND STATUS_FUN = 'ativo'
                        ) OR(
                            LOGIN_FUN = 'admin' AND SENHA_FUN = '$senha'
                        )";
    
    $resultado_consulta = mysqli_query ($conectar, $sql_consulta);

    $linhas = mysqli_num_rows ($resultado_consulta);

    if($linhas == 1) {
        $registro = mysqli_fetch_row ($resultado_consulta);
        $_SESSION["id_fun"] = $registro[0];
        $_SESSION["nome_fun"] = $registro[1];
        $_SESSION["login_fun"] = $registro[2];
        $_SESSION["senha_fun"] = $registro[3];
        $_SESSION["funcao_fun"] = $registro[4];
        echo "<script> location.href = ('administracao.php') </script>";
    } else {
        echo "<script> alert ('Login ou Senha Incorretos! Digite Novamente') </script>";
        echo "<script> location.href = ('index.php') </script>";
    }
?>