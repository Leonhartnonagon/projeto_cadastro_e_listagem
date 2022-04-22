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

if (isset($_POST['nivel'])) {
    $nivel = addslashes($_POST['nivel']);
}

if (isset($titulo) && isset($descricao) && isset($nivel) && isset($id)) {
    $sql = "UPDATE categorias SET titulo = '{$titulo}', descricao = '{$descricao}', nivel = {$nivel} WHERE id =  {$id}";

    mysqli_query($connection, $sql);
}

header("Location: listCategorias.php");

?>