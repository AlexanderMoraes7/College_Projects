<?php

require("../Model/unClasseConfig.php");
require_once("../View/variaveis.php");

$acesso = "";
$email=$mysqli->real_escape_string($_POST["email"]);
$senha=$mysqli->real_escape_string($_POST["senha"]);
$email = strtolower($email);

$resultado = "SELECT * FROM USUARIOS WHERE email = '$email'";
$sql_query = $mysqli->query($resultado);
$quantidade = $sql_query->num_rows;

if ($quantidade == 1) {
    $usuario = $sql_query->fetch_assoc();

if (password_verify($senha, $usuario["senha"])) {
    $acesso = "liberado";
}else {
    $Mensagem = "E-mail ou senha não encontrados";
    header("Location: ../View/index.php?msg=" . urldecode($Mensagem));
    exit();
}

if ($acesso == "liberado") {
    if(!isset($_SESSION)) {
        session_start();
    }

    $_SESSION["idusuario"] = $usuario["idusuario"];
    $_SESSION["nome"] = $usuario["nome"];
    $_SESSION["email"] = $usuario["email"];
    $_SESSION["endereco"] = $usuario["endereco"];

    header("Location: ../View/paginaprincipal.php");
}

}else {
    $Mensagem = "E-mail ou senha não encontrados";
    header("Location: ../View/index.php?msg=" . urldecode($Mensagem));
    exit();
}