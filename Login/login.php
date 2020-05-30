<?php
include "functions_login.php";
    $data = dataHoje();
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tryhard</title>
    </head>
    <body>
        <div class="col-md-6">
        <div class="container">
            <div class="row">

                <div class="card">
                    <h2>Bem-vindo à estalagem!</h2>
                    <hr>
                    <p><?php echo $data; ?></p>
                    <form action="entrar.php" method="post">
                        <div class="form-group">
                            <div class="input-group">
                            </div>
                            <input class="form-control" placeholder="Email" type="text" id="fEmail" name="fEmail">
                            <input class="form-control" placeholder="******" type="password" id="fPassword" name="fPassword">
                        </div>
                    </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <button type="submit" class="enter">Entrar</button>
                </div>
            </div>

            <div class="form-group">
                <div class="form-group">
                <button type="reset" class="clear">Limpar</button>
                </div>
            </div>
        </div>
        <br>
        <br>
        <p class="forget"><a href="#">Esqueceu a senha?</a></p>
        <p class="register">Não possui uma conta?<a href="#">Registre-se</a></p>
    </form>
    </article>
    </aside>
    </div>
    </div>

    </body>
</html>