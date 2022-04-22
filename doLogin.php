<?php

require_once 'config/conexao.php';

$error = False;

if (isset($_POST['btnLogin'])) {

    if (isset($_POST['email']) && isset($_POST['senha'])) {
       
        $email = addslashes($_POST['email']);
        $pass = addslashes($_POST['senha']);
    } else {
        $error = True;
    }

    if (!$error) {

        $sql = "SELECT * FROM usuarios WHERE email = '{$email}' AND senha = '{$pass}' LIMIT 1";

        $result = mysqli_query($connection, $sql);

        if (mysqli_num_rows($result) == 1) {
            $dados = mysqli_fetch_assoc($result);

            session_start();
            $_SESSION['nome'] = $dados['nome'];
            $_SESSION['email'] = $dados['email'];
            $_SESSION['id'] = $dados['id'];
            $_SESSION['login'] = True;
            
            var_dump($_SESSION);

            header("Location: list.php");
            
            exit();
        }
    }
    header("Location: index.php");
}

?>
