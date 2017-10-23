<?php

//Dados do Servidor e Do Banco de Dados
$nomeservidor = "localhost";
$usuarioservidor = "root";
$senhaservidor = "";
$bancodedados = "";

$conexao = new mysqli($nomeservidor, $usuarioservidor, $senhaservidor, $bancodedados);

if ($conexao->mysqli_connect_errno()) {
    echo "Não foi possível conectar: " . mysqli_connect_error();
}