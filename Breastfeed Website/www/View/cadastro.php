<?php

include_once("variaveis.php");

if (isset($_GET['msg'])) {
    $Mensagem = urldecode($_GET['msg']);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="../css/cadastro.css">
    <title>Criar uma Conta</title>
</head>
<body>
    <div class="Principal">
        <h1>
            Crie sua Conta
        </h1>
        <form method="post" action="../Controller/unClasseCadastro.php">
            <h4>Nome</h4>
            <input type="text" name="nome" autocomplete="Nome" autofocus>
            <h4>Sobrenome</h4>
            <input type="text" name="sobrenome" autocomplete="sobrenome">
            <h4>E-mail</h4>
            <input type="email" name="email"autocomplete="email">
            <h4>Senha</h4>
            <div class="Senhas">
                <input type="password" name="senha1" id="senha1">
                <i class="fa-solid fa-eye-slash" id="eye1" onclick="mostrarPrimeira()"></i>
                <h4>Confirme a senha</h4>
                <input type="password" name="senha2" id="senha2">
                <i class="fa-solid fa-eye-slash" id="eye2" onclick="mostrarSegunda()"></i>
            </div>
            <div class="Button">
            <h4></h4>
            <a href="index.php"><button type="button">Voltar</button></a>
            <button type="submit">Criar conta</button>
            </div>
        </form>
        <p><?php echo $Mensagem ?></p>
    </div>
    <script>
        function mostrarPrimeira(){
            var tipo = document.getElementById("senha1");
            if(tipo.type == "password"){
                tipo.type = "text"
                var eye = document.getElementById("eye1");
                eye.className = "fa-solid fa-eye";
            }else{
                tipo.type = "password"
                var eye = document.getElementById("eye1");
                eye.className = "fa-solid fa-eye-slash";
            }
        }
        function mostrarSegunda(){
            var tipo = document.getElementById("senha2");
            if(tipo.type == "password"){
                tipo.type = "text"
                var eye = document.getElementById("eye2");
                eye.className = "fa-solid fa-eye";
            }else{
                tipo.type = "password"
                var eye = document.getElementById("eye2");
                eye.className = "fa-solid fa-eye-slash";
            }
        }
    </script>
</body>
</html>