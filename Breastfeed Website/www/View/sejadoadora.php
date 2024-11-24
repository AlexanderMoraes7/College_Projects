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
    <link rel="stylesheet" href="../css/sejadoadora.css">
    <title>Formulário</title>
    <?php echo $Estilizacao_pagina; // Estilo do Cabeçalho e do rodapé da página ?>
</head>
<body>
    <div class="Container">
        <?php echo $Topo ?>
        <div class="Middle">
            <label for="Nome">Nome:</label>
            <input type="text" name="Nome">
            <label for="Endereco">Endereço:</label>
            <input type="text" name="Endereco">
            <label for="Amamenta">Amamenta a quanto tempo? (Meses)</label>
            <input type="number" name="Amamenta">
            <div class="Medicamento">
                <label for="Medicamento">Faz uso de algum medicamento?</label>
                <input type="radio" id="Sim" name="Medicamento" value="sim" checked />
                <label for="Sim">Sim</label>
                <input type="radio" id="Nao" name="Medicamento" value="nao" />
                <label for="Nao">Não</label>
                <label for="Medicamento">(Se sim, qual?)</label>
                <input type="text" name="Medicamento">
            </div>
            <div class="Cronica">
                <label for="Cronica">Possui alguma doença crônica?</label>
                <input type="radio" id="Sim" name="Cronica" value="sim" checked />
                <label for="Sim">Sim</label>
                <input type="radio" id="Nao" name="Cronica" value="nao" />
                <label for="Nao">Não</label>
            </div>
            <label for="Producao">Avalie a sua produção de leite:</label>
            <input type="text" name="Producao">
            <button type="submit">Enviar</button>
            
        </div>
        <?php echo $Bottom ?>
    </div>
</body>
</html>