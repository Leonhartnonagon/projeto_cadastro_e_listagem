<?php

require_once 'config/validaLogin.php';
require_once 'config/conexao.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: create.php");
}

$id = addslashes($_GET['id']);

$sql = "SELECT * FROM tarefas WHERE id = {$id}";

$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) == 0) {
    header("Location: list.php");
}

$tarefa = $result->fetch_array();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <?php
        require_once 'nav.php';
    ?>

    <div class="row">
        <div class="col-md-6 position-absolute top-50 start-50 translate-middle">
            <form action="editToDo.php" method="POST">
                <div class="form-group">
                    <label for="id">#</label>
                    <input id="id" name="id" class="form-control" value="<?php echo $tarefa['id']; ?>" type="text" readonly></input>
                </div>
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input id="titulo" name="titulo" class="form-control" value="<?php echo $tarefa['titulo'];?>" type="text"></input>
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input id="descricao" name="descricao" class="form-control" value="<?php echo $tarefa['descricao'];?>" type="text"></input>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="1" <?php echo $tarefa['status'] == 1 ? 'selected' : ''; ?>>Aberto</option>
                        <option value="0" <?php echo $tarefa['status'] == 0 ? 'selected' : ''; ?>>Fechado</option>
                    </select>
                </div>
                <div class="form-group">
                    <input id="btnAtualizar" class="btn btn-success" name="btnAtualizar" type="submit" value="Atualizar"></input>
                </div>
            </form>
        </div>
    </div>

</body>
</html>

