<?php

include_once("../Controller/unClasseProtect.php");
include_once("../Model/unClasseConfig.php");

$oProtect = new Protect(); // instanciado para obter o id do usuário na sessão
$id_usuario = $_SESSION["idusuario"];

if(isset($_FILES["arquivo"])){
    $arquivo = $_FILES["arquivo"];
    
    if($arquivo["size"] > 2097152){
        die("Arquivo muito grande! Max: 2MB");
    }

    if($arquivo["error"]){
        die("Erro ao enviar o arquivo");
    }

    $pasta = "../Fotos_perfil/";
    $nomeArquivo = uniqid();
    $extensao = strtolower(pathinfo($arquivo["name"], PATHINFO_EXTENSION));
    date_default_timezone_set('America/Sao_Paulo');
    $time = date('Y-m-d H:i:s');
    $endereco = $_SESSION["endereco"];

    if ($extensao == "png" || $extensao == "jpeg" || $extensao == "jpg" || $extensao == "gif" || $extensao == "svg" || $extensao == "bmp"|| $extensao == ""){

        // Deleta a foto anterior na pasta local
        $BuscaFoto = $mysqli->query("SELECT path FROM fotos_perfil where idusuario = '$id_usuario'") or die($mysqli->error);
        $localFoto = $BuscaFoto->fetch_assoc();
        unlink($localFoto["path"]);
        $enviado = move_uploaded_file($arquivo["tmp_name"], $pasta . $nomeArquivo . "." . $extensao);
        
        $path = $pasta . $nomeArquivo . "." . $extensao;

        if($enviado){
            $mysqli->query("UPDATE fotos_perfil SET nome = '$nomeArquivo', data_upload ='$time', path = '$path' WHERE idusuario = $id_usuario") or die($mysqli->error);
            $Mensagem = "Foto alterada";
            header("Location: ../View/perfil.php?msg=" . urldecode($Mensagem));
            exit();
        } else {
            $Mensagem = "Falha ao enviar a foto!";
            header("Location: ../View/perfil.php?msg=" . urldecode($Mensagem));
            exit();
        }

    } else {
        $Mensagem = "Erro ao enviar o arquivo";
        header("Location: ../View/perfil.php?msg=" . urldecode($Mensagem));
        exit();
    }
}

// var_dump($_FILES["arquivo"]); // detalhes do arquivo
// print_r(nl2br($extensao.PHP_EOL)); // printa e pula uma linha

// Buscar local da foto no banco
$BuscaFoto = $mysqli->query("SELECT path FROM fotos_perfil where idusuario = '$id_usuario'") or die($mysqli->error);
$localFoto = $BuscaFoto->fetch_assoc();
$FotoUser = $localFoto["path"];

// Verifica se o usuario já enviou foto
if($FotoUser == ""){
    $FotoUser = "../Fotos_perfil/avatars.gif";
}

// Verifica endereço do usuario
if ($endereco = " "){
    $endereco = "Nenhum endereço cadastrado";
}