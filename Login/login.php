<?php
include "functions_login.php";
    $data = dataHoje();
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="login_style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tryhard</title>
    </head>
    <body>
    <div class="col-md-6">
    <div class="container">
        <div class="row">
            <div class="card">
                    <div class="torch-left">
                        <img src="../images/torch2.gif">
                    </div>
                    <div class="torch-right">
                        <img src="../images/torch2.gif">
                    </div>
                <article class="card-body">
                    <h1>Bem-vindo à taverna</h1>
                    <hr>
                    <p><?php echo $data; ?></p>
                    <form action="access_control.php" method="post">
                        <div class="form-group">
                            <div class="input-group">
                            <input class="form-control" placeholder="Email" type="text" id="fEmail" name="fEmail">
                            <input class="form-control" placeholder="******" type="password" id="fPassword" name="fPassword">
                            </div> <!-- input-group.// -->
                        </div> <!-- form-group// -->

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <button type="submit" class="enter">Entrar</button>
                                </div> <!-- form-group// -->
                            </div>
                        </div>
                        <br>
                        <br>
                        <p class="forget"><a href="#">Esqueceu a senha?</a></p>
                        <p class="register">Não possui uma conta?<a href="../Register/new_account.php" onclick="flipPage(1)"> Registre-se</a></p>
                    </form>
                </article>
            </div> <!-- card.// -->

            </aside> <!-- col.// -->
        </div> <!-- row.// -->

    </div>
    </div>

    </body>
</html>