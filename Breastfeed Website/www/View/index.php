<?php
include_once("variaveis.php");
include_once("../Controller/unClasseProtect.php");

// Verifica se a mensagem está definida na query string
if (isset($_GET['msg'])) {
    $Mensagem = urldecode($_GET['msg']);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Apoio á amamentação</title>
</head>

<body>
        <img src="../images/mãe_a_amamentar_seu_filho.jpg" alt="Imagem de uma mulher amamentando seu filho, recém nascido.">
        <div class="Caixa">
            <form name="usuario" method="post" action="../Controller/unClasseLogin.php">
                <div class="Input1">
                    <i class="fa-solid fa-circle-user fa-xl"></i>
                    <input type="email" name="email" placeholder="E-mail" autofocus alt="Digite seu E-mail" autocomplete="email">
                </div>
                <div class="Input2">
                    <i class="fa-solid fa-lock fa-xl"></i>
                    <input type="password" name="senha" id="senha" placeholder="Senha" alt="Digite sua senha" autocomplete="senha">
                    <i class="fa-solid fa-eye-slash" class="olho" id="olho" onclick="mostrarOlho()"></i>
                </div>
                <div class="Text1">
                    <div>
                        <input type="checkbox" name="lembrar" id="lembrar"><label for="lembrar">Lembre-se dessa conta</label>
                    </div>
                <div>
                    <a href="recuperacao.php">Esqueceu a senha?</a>
                </div>
                </div>
                <div class="Login">
                    <button type="submit" name="Login" value="Login">Login</button>
                    <p>
                        <?php echo !empty($Mensagem) ? $Mensagem : ''; ?>
                    </p>
                </div>
            </form>
            <div class="Text2">
                <div>
                    <label>Não possui conta?</label>
                </div>
                <div>
                    <a href="cadastro.php">Crie aqui</a>
                </div>
            </div>
            <script>
                function mostrarOlho(){
                    var tipo = document.getElementById("senha");
                    if(tipo.type == "password"){
                        tipo.type = "text"
                        var eye = document.getElementById("olho");
                        eye.className = "fa-solid fa-eye";
                    }else{
                        tipo.type = "password"
                        var eye = document.getElementById("olho");
                        eye.className = "fa-solid fa-eye-slash";
                    }
                }
            </script>
        </div>
</body>
</html>