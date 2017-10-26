<?php

include "DAOUsuario.php";

function validarNome($nome) {
    if (empty($nome)) {
        return false;
    } else if (!preg_match("/^[a-zA-Z ]*$/", $nome)) {
        return false;
    } else {
        return true;
    }
}

function validarEmail($email) {
    if (empty($email)) {
        return false;
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    } else {
        return true;
    }
}

function validarSenha($senha1, $senha2) {
    if (empty($senha1)) {
        return false;
    } else if ($senha1 != $senha2) {
        return false;
    } else {
        return true;
    }
}

function validarCadastro($nome, $sobrenome, $login, $email, $senha, $senha2) {
    $nomeValido = validarNome($nome);
    $emailValido = validarEmail($email);
    $senhaValida = validarSenha($senha, $senha2);

    /* Validação de CADASTRO - Sessão 

    CODIGO ERRO
    0 - Nome, Email e Senha incorretos
    1 - Email e Senha Incorretos
    2-  Senha Incorreta
    3 - Dados corretos

*/

    $mensagem = 0;
    if(!$nomeValido){
        $mensagem = 1;
    }

    if(!$emailValido){
        $mensagem = 2;
    }

    if(!senhaValida){
        $mensagem = 3;
    }

    if ($nomeValido && $emailValido && $senhaValida) {
        $dao = new DAOUsuario();
        $dao->setNomeUsuario($nome . " " . $sobrenome);
        $dao->setEmailUsuario($email);
        $dao->setSenhaUsuario($senha);
        $dao->setLoginUsuario($login);
        $dao->criar();
    }
    return $mensagem;
}

/* Validação de LOGIN - Sessão 

CODIGO ERRO
0 - Login e Senha incorretos
1 - Senha Incorreta
2 - Login e Senha Correto

*/
function validarLogin($login, $senha) {
    $dao = new DAOUsuario();
    $dao->lerPeloLogin();

    $mensagem = 0;
    if ($login == $dao->getLoginUsuario()){
        $mensagem = 1;
    }if($senha == $dao->getSenhaUsuario()){
        $mensagem = 2;
    }
        return $mensagem;
}
