<?php

include "validacaoDeDados.php";

$login = $_POST("login");
$senha = $_POST("senha");

$codMensagem = validarLogin($login, $senha);

/* Validação de LOGIN - Sessão 

CODIGO ERRO
0 - Login e Senha incorretos
1 - Senha Incorreta
2 - Login e Senha Correto

*/
switch ($codMensagem) {
	case 0:
		/* Login e Senha Incorretos 
		Redirecionar para Formulário de Login */
		break;
	case 1:
		/* Senha incorreta 
		Redirecionar para Formulário de Login*/
		break;
	case 2:
		/* Login e Senhas corretos 
		Redirecionar para Painel Principal*/
		break;
}