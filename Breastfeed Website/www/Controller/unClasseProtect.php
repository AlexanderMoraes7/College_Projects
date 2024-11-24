<?php
include_once("../View/variaveis.php");

class Protect{
    public function __construct(){
        if(!isset($_SESSION)){
            session_start();
        }

        if(!isset($_SESSION["nome"])) {
            global $Mensagem; // Torna a variável global
            $Mensagem = "Você não está autorizado a acessar essa página.<br>Faça Login primeiro";
            header("Location: ../View/index.php?msg=" . urldecode($Mensagem));
            exit();
        }
    }
}