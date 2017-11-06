<?php

//Dados do Servidor e Do Banco de Dados
$nomeservidor = "127.0.0.1";
$usuarioservidor = "root";
$senhaservidor = "";
$bancodedados = "habitosbd";

$conexao = new mysqli($nomeservidor, $usuarioservidor, $senhaservidor, $bancodedados);

if ($conexao->mysqli_connect_errno()) {
    echo "Não foi possível conectar: " . mysqli_connect_error();
}