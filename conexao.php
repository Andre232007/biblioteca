<?php
$host = "localhost";
$usuario = "root"; // Substitua pelo usuário do banco de dados
$senha = "";       // Substitua pela senha do banco de dados
$banco = "loja_roupas";

$conn = new mysqli($host, $usuario, $senha, $banco);

// Verifica se houve erro na conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
