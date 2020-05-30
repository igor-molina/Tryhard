<?php
    session_start();

    include "../Database/conection.php";

    $sqlConection = "select * from users where uEmail ='".$_POST['fEmail']."'and uPassword='".$_POST['fPassword']."'"; //String que confirma integridade dos dados na tabela
    $result = mysqli_query($conectString, $sqlConection); //cria conexão

    $qtdRows = mysqli_num_rows($result); //conta quantidade de linhas resultantes da busca

    if($qtdRows > 0) //se trouxer mais de 0 linhas
    {
        $tbUsers = mysqli_fetch_array($result);
        $_SESSION['user']=$tbUsers['uEmail'];

        header("Location: ../Home/homePage.php");
    }

    else
    {
        $message = "Email ou senha incorretas!"
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tryhard</title>
    </head>
    <body>
        <p><?php echo $message; ?></p>
        <p>Clique <a href="index.php">aqui</a> para voltar</p>
    </body>
</html>