<?php
include_once("../Model/unClasseConfig.php");
include_once("../View/variaveis.php");

$email      = $mysqli->real_escape_string($_POST["email"]);
$email      = strtolower($email);       // Converte tudo para minúscula

try {
    if (strlen($email) == 0) {
        $Mensagem = "Digite seu e-mail para recuperar a conta";
        header("Location: ../View/Recuperacao.php?msg=" . urldecode($Mensagem));
        exit();
    } else{

    // busca usuario criado
    $BuscaUser = $mysqli->query("SELECT * FROM USUARIOS WHERE email = '$email'");
    $user = $BuscaUser->fetch_assoc();
    
    if ($email = $user){
        $Mensagem = "Foi enviado e-mail para a restauração de senha.<br>Olhe sua caixa de emails ou spam";
        header("Location: ../View/Recuperacao.php?msg=" . urldecode($Mensagem));
        exit();
    }else {
        $Mensagem = "Usuário não encontrado, digite o email novamente.";
        header("Location: ../View/Recuperacao.php?msg=" . urldecode($Mensagem));
        exit();
    }
    
        
    }
    } catch (PDOException $e) {
    echo $e->getMessage();
}