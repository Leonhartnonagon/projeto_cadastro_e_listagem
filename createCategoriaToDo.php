<?php

require_once 'config/conexao.php';

if (!empty($_POST['titulo'])) {
    $titulo = addslashes($_POST['titulo']);
}

if (!empty($_POST['descricao'])) {
    $descricao = addslashes($_POST['descricao']);
}

if (!is_null($_POST['nivel'])) {
    $nivel = addslashes($_POST['nivel']); 
}

if (isset($titulo) && isset($descricao) && isset($nivel)) {
    $sql = "INSERT INTO categorias(titulo, descricao, nivel) VALUES('{$titulo}', '{$descricao}', {$nivel})";

    mysqli_query($connection, $sql);
}

header("Location: listCategorias.php");

?>