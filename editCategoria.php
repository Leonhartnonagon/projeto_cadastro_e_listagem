<?php

require_once 'config/validaLogin.php';
require_once 'config/conexao.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: createCategoria.php");
}

$id = addslashes($_GET['id']);

$sql = "SELECT * FROM categorias WHERE id = {$id}";

$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) == 0) {
    header("Location: listCategorias.php");
}

$categoria = $result->fetch_array();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Categoria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <?php
        require_once 'nav.php';
    ?>

    <div class="row">
        <div class="col-md-6 position-absolute top-50 start-50 translate-middle">
            <form action="editCategoriaToDo.php" method="POST">
                <div class="form-group">
                    <label for="id">ID</label>
                    <input id="id" name="id" class="form-control" value="<?php echo $categoria['id']; ?>" type="text" readonly></input>
                </div>
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input id="titulo" name="titulo" class="form-control" value="<?php echo $categoria['titulo'];?>" type="text"></input>
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input id="descricao" name="descricao" class="form-control" value="<?php echo $categoria['descricao'];?>" type="text"></input>
                </div>
                <div class="form-group">
                    <label for="status">Nível</label>
                    <select name="nivel" id="nivel" class="form-control">
                        <option value="1" <?php echo $categoria['nivel'] == 1 ? 'selected' : ''; ?>>Imediato</option>
                        <option value="2" <?php echo $categoria['nivel'] == 2 ? 'selected' : ''; ?>>Importante</option>
                        <option value="3" <?php echo $categoria['nivel'] == 3 ? 'selected' : ''; ?>>Normal</option>
                        <option value="4" <?php echo $categoria['nivel'] == 4 ? 'selected' : ''; ?>>Lembrete</option>
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

