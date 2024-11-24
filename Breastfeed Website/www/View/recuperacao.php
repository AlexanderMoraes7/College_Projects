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
    <link rel="stylesheet" href="../css/recuperacao.css">
    <title>Recuperação de Conta</title>
</head>
<body>
    <div class="Principal">
        <h1>
            Recupere sua Conta
        </h1>
        <form method="post" action="../Controller/unClasseRecuperacao.php">
            <h4>Digite seu E-mail</h4>
            <input type="email" name="email"autocomplete="email">
            <div class="Button">
            <h4></h4>
            <a href="index.php"><button type="button">Voltar</button></a>
            <button type="submit">Enviar</button>
            </div>
        </form>
        <p> <?php echo $Mensagem ?> </p>
    </div>
</body>
</html>