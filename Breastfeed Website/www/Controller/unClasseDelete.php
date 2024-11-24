<?php
include_once("../Model/unClasseConfig.php");
include_once("../Controller/unClassePerfil.php");

// Busca o caminho da foto do perfil do usuário
$BuscaFoto = $mysqli->query("SELECT path FROM fotos_perfil WHERE idusuario = '$id_usuario'") or die($mysqli->error);
$localFoto = $BuscaFoto->fetch_assoc();
$FotoUser = $localFoto["path"];

// Deleta as foto de perfil do local
unlink($FotoUser);

// Deleta as fotos de perfil do usuário no banco
$DelCont = $mysqli->query("DELETE FROM fotos_perfil WHERE idusuario = '$id_usuario'") or die($mysqli->error);

// Deleta o usuário do banco de dados
$DelConta = $mysqli->query("DELETE FROM usuarios WHERE idusuario = '$id_usuario'") or die($mysqli->error);

$Mensagem = "Conta deletada com sucesso";
header("Location: ../View/index.php?msg=" . urldecode($Mensagem));
session_unset();
session_destroy();
exit();