<?php
include_once("../Controller/unClasseProtect.php");
include_once("../Controller/unClassePerfil.php");
include_once("variaveis.php");
include_once("../css/Estilos.php");

$oProtect = new Protect(); // Certifica que o usuário está logado
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/config.css">
    <title>Apoio à Amamentação</title>
    <?php echo $Estilizacao_pagina; // Estilo do Cabeçalho e do rodapé da página ?>
</head>
<body>
    <div class="Container">
        <?php echo $Topo ?>
        <div class="Middle">
            <div class="IdiomaContainer">
                <button>
                    Idioma <br>
                    Português
                </button>
            </div>
            <a href="notificacoes.php"><button>Notificações</button></a>
            <a href="privacidade.php"><button>Privacidade</button></a>
            <a class="ConfigSistema" href="configsistema.php"><button>Configuração do sistema</button></a>
            <form action="../Controller/unClasseDelete.php" method="post">
                <button type="submit">Deletar Conta</button>
            </form>
            <a href="../Controller/unLogout.php"><button>Sair</button></a>
        </div>
        <?php echo $Bottom ?>
    </div>
</body>
</html>
