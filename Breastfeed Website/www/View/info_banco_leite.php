<?php
include_once("../Controller/unClasseProtect.php");
include_once("variaveis.php");
include_once("../css/Estilos.php");

$oProtect = new Protect();// instância para permitir o acesso somente a quem estiver logado
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/info.css">
    <title>Formulário</title>
    <?php echo $Estilizacao_pagina; // Estilo do Cabeçalho e do rodapé da página ?>
</head>
<body>
    <div class="Container">
        <?php echo $Topo ?>
        <div class="Middle">
            <!-- Conteúdo do meio da página -->
        </div>
        <?php echo $Bottom ?>
    </div>
</body>
</html>        