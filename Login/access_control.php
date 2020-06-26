<?php
    session_start();

    include "../Database/connection.php";

    $sqlConnection = "select * from users where uEmail ='".$_POST['fEmail']."'and uPassword='".$_POST['fPassword']."'"; //String que confirma integridade dos dados na tabela
    $result = mysqli_query($connectString, $sqlConnection); //cria conexão

    $qtdRows = mysqli_num_rows($result); //conta quantidade de linhas resultantes da busca

    if($qtdRows > 0) //se trouxer mais de 0 linhas
    {
        $tbUsers = mysqli_fetch_array($result);
        $_SESSION['user']=$tbUsers['uEmail'];

        header("Location:../Home/home_page.php");
    }

    else
    {
        $message = "Email ou senha incorretas!";
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
        <p>Clique <a href="session_control.php">aqui</a> para voltar</p>
    </body>
</html>