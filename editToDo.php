<?php

require_once 'config/conexao.php';

if (!empty($_POST['id'])) {
    $id = addslashes($_POST['id']);
}

if (!empty($_POST['titulo'])) {
    $titulo = addslashes($_POST['titulo']);
}

if (!empty($_POST['descricao'])) {
    $descricao = addslashes($_POST['descricao']);
}

if (isset($_POST['status'])) {
    $status = addslashes($_POST['status']);
}

if (isset($titulo) && isset($descricao) && isset($status) && isset($id)) {
    $sql = "UPDATE tarefas SET titulo = '{$titulo}', descricao = '{$descricao}', status = {$status} WHERE id =  {$id}";

    mysqli_query($connection, $sql);
}

header("Location: list.php");

?>