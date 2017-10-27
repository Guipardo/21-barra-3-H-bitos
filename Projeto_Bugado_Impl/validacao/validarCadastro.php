<?php

include "validacaoDeDados.php";

$nome = $_POST("nome");
$sobrenome = $_POST("sobrenome");
$login = $_POST("login");
$email = $_POST("email");
$senha = $_POST("senha");
$senha2 = $_POST("senha2");

$codMensagem = validarCadastro($nome, $sobrenome, $login, $email, $senha, $senha2);

/* Validação de CADASTRO - Sessão 

CODIGO ERRO
0 - Nome, Email e Senha incorretos
1 - Email e Senha Incorretos
2-  Senha Incorreta
3 - Dados corretos

*/
switch ($codMensagem) {
	case 0:
		/* Nome,Email e Senha Incorretos 
		Redirecionar para Formulário de Cadastro */
		header('Location: /home.php');
		break;
	case 1:
		/* Email e Senha incorretos
		Redirecionar para Formulário de Cadastro*/
		break;
	case 2:
		/* Senha incorreta
		Redirecionar para Formulário de Cadastro*/
		break;
	case 3:
		/* Dados corretos 
		Redirecionar para Formulário de Login*/
		break;
}