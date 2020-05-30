<?php
    session_start();
    $_SESSION['user']="";

    Header("Location: login.php");
?>