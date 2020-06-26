<?php
    include("../Database/connection.php");

    if(isset($_POST['criar'])){
        $nome = $_POST['nome'];
        $ultmoNome = $_POST['ultimoNome'];
        $apelido = $_POST['apelido'];
        $telefone= $_POST['telefone'];
        $email = $_POST['email'];
        $pass = $_POST['senha'];

        $email_check = "SELECT uEmail FROM users WHERE uEmail='$email'";
        $check = mysqli_query($connectString, $email_check);
        $do_email_check = mysqli_num_rows($email_check);

        if($do_email_check >= 1){
            echo "<p id='message_mail_check'>Este e-mail já existe.</p>";
        }elseif ($nome == '' OR strlen($nome) < 3){
            echo "<p id='message_nome'>Este campo requer mais de 2 caracteres.</p>";
        }elseif ($email == '' OR strlen($email) < 10){
            echo "<p id='message_mail'>Este campo requer mais de 9 caracteres.</p>";
        }elseif ($pass == '' OR strlen($pass) < 8){
            echo "<p id='message_pass'>Este campo requer mais de 7 caracteres.</p>";
        }else{
            $insert_data = "INSERT INTO users (`uName`, `uLastName`, `uNickname`, `uTel`, `uEmail`, `uPassword`) VALUES ('$nome', '$ultimoNome','$apelido', '$telefone', '$email', '$pass')";
            $data = mysqli_query($connectString, $insert_data);
            if($data){
                setcookie("login",$email);
                header("Location: ./");
            }else{
                echo "<p id='message_error'>Desculpa, houve um erro ao registrar-te.</p>";
            }
        }
    }

    if($_POST) {
        $senha = $_POST['senha'];
        $senhaConfirma  = $_POST['senha_confirma'];
        if ($senha == "") {
            $mensagem = "<span class='aviso'><b>Aviso</b>: Senha não foi alterada!</span>";
        } else if ($senha == $senhaConfirma) {
            $mensagem = "<span class='sucesso'><b>Sucesso</b>: As senhas são iguais.</span>";
        } else {
            $mensagem = "<span class='erro'><b>Erro</b>: As senhas não conferem!</span>";
        }
        echo "<p id='mensagem'>".$mensagem."</p>";
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="new_account_style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Criando conta</h2>
    <div class="col-md-6">
        <div class="container">
                <div class="card">
                    <form method="POST">
                        <input type="text" placeholder="Primeiro nome" name="nome"><br />
                        <input type="text" placeholder="Último nome" name="ultimoNome"><br />
                        <input type="text" placeholder="Apelido" name="apelido"><br />
                        <input type="text" placeholder="Telefone" name="telefone"><br />
                        <input type="email" placeholder="E-mail" name="email"><br />
                        <input type="password" name="senha" id="senha" placeholder="Informe sua senha"><br />
                        <input type="password" name="senha_confirma" id="senha_confirma" placeholder="Confirme sua senha"><br />
                        <input type="submit" value="Criar uma conta" name="criar">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <h3>Já tens uma conta? <a href="../Login/login.php">Clique aqui!</a></h3>
</body>
</html>