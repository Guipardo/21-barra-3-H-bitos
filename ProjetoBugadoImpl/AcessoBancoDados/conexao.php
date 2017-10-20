<?php

/*
 * Este arquivo realiza a conexão com o banco de dados
 */

//Coloque o nome do servidor disponível
$nomeservidor = "localhost";
$usuarioservidor = "username";
$senhaservidor = "password";
$bancodedados = "nomebanco";

// Criando conexão
$conexao = new mysqli($nomeservidor, $usuarioservidor, $senhaservidor,$bancodedados);

// Checando conexão
if ($conexao->connect_error) {
    die("Conexão falhou " . $conexao->connect_error);
}
echo "Conectado com sucesso";





