<?php
    $dbServidor = "127.0.0.1";
    $dbUsuario = "root";
    $dbSenha = "";
    $dbBanco = "Tryhard";

    $conectString = mysqli_connect ($dbServidor, $dbUsuario, $dbSenha, $dbBanco);
    mysqli_set_charset($conectString, "utf8");

    if (mysqli_connect_error($conectString))
    {
        echo "<h1>Problema ao conectar com o banco.</h1>".mysqli_connect_error();
        die();
    }
?>