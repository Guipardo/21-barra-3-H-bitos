<?php

include "validacaoDeDados.php";

$login = $_POST("login");
$senha = $_POST("senha");

validarLogin($login, $senha);