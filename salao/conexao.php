<?php
$servidor = "localhost"; // Ou o endereço do seu servidor MySQL
$usuario = "root";       // Seu nome de usuário do MySQL
$senha = "";             // Sua senha do MySQL
$banco = "salao_beauty"; // O nome do banco de dados

// Conexão com o banco de dados
$conn = new mysqli($servidor, $usuario, $senha, $banco);

// Verificando a conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}
?>
