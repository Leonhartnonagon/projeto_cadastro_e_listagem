

<?php

require_once 'config/validaLogin.php';
require_once 'config/conexao.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Categoria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php
        require_once 'nav.php';
    ?>

    <div style="padding: 20px;">
        <h1>
        Cadastro de 
        <small class="text-muted">Categorias</small>
        </h1>
    </div>
    <div class="row">
        <div class="col-md-6 position-absolute top-50 start-50 translate-middle">
            <form action="createCategoriaToDo.php" method="POST">
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input id="titulo" class="form-control" name="titulo" type="text"></input>
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input id="descricao" class="form-control" name="descricao" type="text"></input>
                </div>
                <div class="form-group">
                    <label for="nivel">Nível</label>
                    <select id="nivel" class="form-control" name="nivel">
                        <option value="1">Imediato</option>
                        <option value="2">Importante</option>
                        <option value="3">Normal</option>
                        <option value="4">Lembrete</option>

                    </select>
                </div>
                <div class="form-group">
                    <input id="btnCadastrar" class="btn btn-success" name="btnCadastrar" type="submit" value="Cadastrar"></input>
                </div>
            </form>
        </div>
    </div>

</body>
</html>

