<?php

require_once 'config/validaLogin.php';
require_once 'config/conexao.php';

$sql = 'SELECT * FROM tarefas';

$result = mysqli_query($connection, $sql);

$tarefas = $result->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto</title>
    <link rel='stylesheet' href='assets/bootstrap/css/bootstrap.css'>
</head>
<body>

    <?php
        require_once "nav.php";
    ?>
    <div style="padding: 20px;">
        <h1>Tarefas</h1>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titulo</th>
                <th scope="col">Descrição</th>
                <th scope="col">Status</th>
                <th scope="col" style="text-align: center;">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($tarefas as $tarefa): ?>
            <tr>
                <th scope="row"><?php echo $tarefa["id"]; ?></th>
                <td><?php echo $tarefa["titulo"]; ?></td>
                <td><?php echo $tarefa["descricao"]; ?></td>
                <td><?php echo $tarefa["status"]; ?></td>
                <td><a href="edit.php?id=<?php echo $tarefa['id']; ?>">Editar</a></td>
                <td><a href="deleteToDo.php?id=<?php echo $tarefa['id']; ?>">Excluir</a></td>
            </tr>
            <?php endforeach; ?>   

  
        </tbody>
    </table>
        


    
</body>
</html>

