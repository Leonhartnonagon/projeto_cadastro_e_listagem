<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel='stylesheet' href='assets/bootstrap/css/bootstrap.css'>
</head>
<body>
    
    <div class="row">
        <div class="col-md-6 position-absolute top-50 start-50 translate-middle">
            <form action="doLogin.php" method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" class="form-control" required></input>
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input id="senha" name="senha" type="password" class="form-control" required></input>
                </div>
                <input id="btnLogin" name="btnLogin" type="submit" class="btn btn-primary" value="Entrar"></input>
            </form>
        </div>
    </div>

</body>
</html>