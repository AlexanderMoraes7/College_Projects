<?php

// PDO - Biblioteca de acesso a dados do php

$servename = "localhost";
$database = "nutrirede";
$username = "root";
$password = "root";

try {
$mysqli = new mysqli($servename, $username, $password, $database);
} catch (PDOException $e) {
    echo("Falha ao conectar ao banco de dados: ");
}