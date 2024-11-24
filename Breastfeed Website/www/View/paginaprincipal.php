<?php
include_once("../Controller/unClasseProtect.php");
include_once("../Controller/unClassePerfil.php");
include_once("../Controller/unClasseFeed.php");
include_once("variaveis.php");
include_once("../css/Estilos.php");

$oProtect = new Protect();// instância para permitir o acesso somente a quem estiver logado
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/paginaprincipal.css">
    <title>Página Principal</title>
    <?php echo $Estilizacao_pagina; // Estilo do Cabeçalho e do rodapé da página ?>
</head>
<body>
    <div class="Container">
        <?php echo $Topo ?>
        <div class="Middle">
            <div class="First">
                <img class="Perfil" src=<?php echo $FotoUser; ?> onclick="" id="publicacao" alt="ícone de foto para publicações">
                <form method="post" enctype="multipart/form-data" action="../Controller/unClasseFeed.php">
                    <input type="file" name="publication" id="publication" style="display: none;" onchange="this.form.submit()">
                    <label type="submit" for="publication" name="publication" id="publication">
                        <img class="Camera" src="../images/icons8-camera-64.png" alt="Foto de perfil">
                    </label>
                </form>
            </div>
            <div class="Second">
                <form method="post" enctype="multipart/form-data" action="../Controller/unClasseFeed.php">
                    
                    <input type="text" name="publitext" id="Publicartext">
                </form>
                <button id="Publicarbutton" type="submit">Publicar</button>
            </div>
        </div>
        <?php echo $Bottom ?>
    </div>
</body>
</html>