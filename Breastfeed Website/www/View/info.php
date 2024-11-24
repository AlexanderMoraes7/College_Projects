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
            <div class="First">
                <div class="First1">
                    <img src="../images/mommy-1.png" alt="Mãe amamentando">
                    <a href="mitos_verdades.php">
                        <button>
                            Mitos e verdades <br>
                            sobre a amamentação
                        </button>
                    </a>
                </div>
                <div class="First2">
                    <img src="../images/Technology-1.png" alt="">
                    <a href="info_cientifica.php">
                        <Button>
                            Informaçõess <br>
                            científicas
                        </Button>
                    </a>
                </div>
            </div>
            <div class="Second">
                <div class="Second1">
                    <img src="../images/baby-1.png" alt="Bebê mamando">
                    <a href="higiene_cuidados.php">
                        <button>
                            Higiene e <br>
                            cuidados
                        </button>
                    </a>
                </div>
                <div class="Second2">
                    <img src="../images/giving-baby-bottle-1.png" alt="">
                    <a href="info_banco_leite.php">
                        <button>
                            Informações <br>
                            sobre banco de leite
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <?php echo $Bottom ?>
    </div>
</body>
</html>