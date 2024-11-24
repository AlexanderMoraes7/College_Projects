<?php

include_once("../Controller/unClasseProtect.php");
include_once("../Controller/unClassePerfil.php");
include_once("../Model/unClasseConfig.php");
include_once("../css/Estilos.php");
include_once("variaveis.php");

$oProtect = new Protect(); // instância para permitir o acesso somente a quem estiver logado

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
    <link rel="stylesheet" href="../css/perfil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Configurações de perfil</title>
    <?php echo $Estilizacao_pagina; // Estilo do Cabeçalho e do rodapé da página ?>
</head>
<body>
    <div class="Container">
        <?php echo $Topo ?>
        <p> <?php echo $Mensagem; ?></p>
        <div class="Middle">
            <div class="Label1">
            <img class="User" src=<?php echo $FotoUser; ?> alt="Foto de perfil do usuário">
            <form method="post" enctype="multipart/form-data" action="../Controller/unClassePerfil.php">
                <input type="file" name="arquivo" id="arquivo" style="display: none;" onchange="this.form.submit()">
                <label type="submit" for="arquivo" name="arquivo" id="arquivo">Alterar foto</label>
                <br>
                <label>Sou doadora</label>
            </form>
            </div>
            <div class="Label2">
                <label>Nome</label>
                <p><?php echo $_SESSION["nome"] ?></p>
                <label>E-mail</label>
                <p><?php echo $_SESSION["email"]; ?></p>
                <label>Endereço</label>
                <p><?php echo $endereco; ?></p>
            </div>
            <div class="Label3">
                <a href="mensagens.php"><img src="../images/icons8-letter-50.png" alt="Mensagens"></a>
                <a href="publicacoes.php"><img src="../images/icons8-photo-gallery-50.png" alt="Publicações"></a>
                <a href="conexoes.php"><img src="../images/icons8-group-48.png" alt="conexões"></a>
            </div>
        </div>
        <?php echo $Bottom ?>
    </div>
</body>
</html>
