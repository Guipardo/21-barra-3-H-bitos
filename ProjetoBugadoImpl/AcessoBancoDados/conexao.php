<?php

$nomeservidor = "localhost";
$usuarioservidor = "username";
$senhaservidor = "password";

// Criando conexão
$conexao = new mysqli($nomeservidor, $usuarioservidor, $senhaservidor);

// Checando conexão
if ($conexao->connect_error) {
    die("Conexão falhou " . $conn->connect_error);
}
echo "Conectado com sucesso";
?>





