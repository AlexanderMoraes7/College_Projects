<?php
include_once("../Model/unClasseConfig.php");
include_once("../View/variaveis.php");

$nome       = $mysqli->real_escape_string($_POST["nome"]);
$sobrenome  = $mysqli->real_escape_string($_POST["sobrenome"]);
$email      = $mysqli->real_escape_string($_POST["email"]);
$senha1     = $mysqli->real_escape_string($_POST["senha1"]);
$senha2     = $mysqli->real_escape_string($_POST["senha2"]);
$nome       = strtolower($nome);        // Converte tudo para minúscula
$nome       = ucfirst($nome);           // Converte primeira letra para maiúscula
$sobrenome  = strtolower($sobrenome);
$sobrenome  = ucfirst($sobrenome);
$email      = strtolower($email);

try {
    if (strlen($nome) == 0) {
        $Mensagem = "Nome não pode ser vazio";
        header("Location: ../View/cadastro.php?msg=" . urldecode($Mensagem));
        exit();
    } elseif (strlen($sobrenome) == 0) {
        $Mensagem = "Sobrenome não pode ser vazio";
        header("Location: ../View/cadastro.php?msg=" . urldecode($Mensagem));
        exit();
    } elseif (strlen($email) == 0) {
        $Mensagem = "E-mail não pode ser vazio";
        header("Location: ../View/cadastro.php?msg=" . urldecode($Mensagem));
        exit();
    } elseif ((strlen($senha1) == 0) or (strlen($senha2) == 0)) {
        $Mensagem = "Senha não pode ser vazia";
        header("Location: ../View/cadastro.php?msg=" . urldecode($Mensagem));
        exit();
    } elseif ($senha1 <> $senha2){
        $Mensagem = "As senhas não são iguais. Digite novamente.";
        header("Location: ../View/cadastro.php?msg=" . urldecode($Mensagem));
        exit();
    } else{
        $senha1 = password_hash($senha1, PASSWORD_DEFAULT);
        
        //insere usuario na tabela
        $mysqli->query("INSERT INTO USUARIOS(nome, sobrenome, email, senha) VALUES 
                ('$nome', '$sobrenome','$email', '$senha1')");
        
        // busca usuario criado
        $BuscaUser = $mysqli->query("SELECT * FROM USUARIOS
                WHERE email = '$email'") or die($mysqli->error);
        $user = $BuscaUser->fetch_assoc();
        $id = $user["idusuario"];
        
        // insere usuario na tabela fotos, para inserção de fotos posteriormente
        if ($mysqli->query("INSERT INTO FOTOS_PERFIL(idusuario) VALUES
                ('$id')")) {
                $Mensagem = "Conta criada com sucesso";
                header("Location: ../View/index.php?msg=" . urldecode($Mensagem));
                exit();
            }
    }
    } catch (PDOException $e) {
    echo $e->getMessage();
}