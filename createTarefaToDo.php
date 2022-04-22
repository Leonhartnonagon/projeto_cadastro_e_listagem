<?php

require_once 'config/conexao.php';

if (!empty($_POST['titulo'])) {
    $titulo = addslashes($_POST['titulo']);
}

if (!empty($_POST['descricao'])) {
    $descricao = addslashes($_POST['descricao']);
}

if (!is_null($_POST['status'])) {
    $status = addslashes($_POST['status']); 
}

if (isset($titulo) && isset($descricao) && isset($status)) {
    $sql = "INSERT INTO tarefas(titulo, descricao, status) VALUES('{$titulo}', '{$descricao}', {$status})";

    mysqli_query($connection, $sql);
}

header("Location: list.php");

?>