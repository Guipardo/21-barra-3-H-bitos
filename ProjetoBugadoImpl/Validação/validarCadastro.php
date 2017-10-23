<?php

include "validacaoDeDados.php";

$nome = $_POST("nome");
$sobrenome = $_POST("sobrenome");
$login = $_POST("login");
$email = $_POST("email");
$senha = $_POST("senha");
$senha2 = $_POST("senha2");

cadastrarUsuario($nome, $sobrenome, $login, $email, $senha, $senha2);
