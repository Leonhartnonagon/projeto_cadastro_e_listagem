<?php

require_once 'config/conexao.php';

if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM tarefas WHERE id = {$id}";
    mysqli_query($connection, $sql);
}

header("Location: list.php");

?>