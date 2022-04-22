<?php

require_once 'config/validaLogin.php';
require_once 'config/conexao.php';

$sql = 'SELECT * FROM categorias';

$result = mysqli_query($connection, $sql);

$categorias = $result->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
    <link rel='stylesheet' href='assets/bootstrap/css/bootstrap.css'>
</head>
<body>

    <?php
        require_once "nav.php";
    ?>
    <div style="padding: 20px;">
        <h1>Categorias</h1>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titulo</th>
                <th scope="col">Descrição</th>
                <th scope="col">Nível</th>
                <th scope="col" style="text-align: center;">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($categorias as $categoria): ?>
            <tr>
                <th scope="row"><?php echo $categoria["id"]; ?></th>
                <td><?php echo $categoria["titulo"]; ?></td>
                <td><?php echo $categoria["descricao"]; ?></td>
                <td><?php echo $categoria["nivel"]; ?></td>
                <td><a href="editCategoria.php?id=<?php echo $categoria['id']; ?>">Editar</a></td>
                <td><a href="deleteCategoriaToDo.php?id=<?php echo $categoria['id']; ?>">Excluir</a></td>
            </tr>
            <?php endforeach; ?>   

  
        </tbody>
    </table>
        


    
</body>
</html>

