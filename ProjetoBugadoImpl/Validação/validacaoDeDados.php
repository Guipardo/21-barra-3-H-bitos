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

function cadastrarUsuario($nome, $sobrenome, $login, $email, $senha, $senha2) {
    $nomeValido = validarNome($nome);
    $emailValido = validarEmail($email);
    $senhaValida = validarSenha($senha, $senha2);

    if ($nomeValido && $emailValido && $senhaValida) {
        $dao = new DAOUsuario();
        $dao->setNomeUsuario($nome . " " . $sobrenome);
        $dao->setEmailUsuario($email);
        $dao->setSenhaUsuario($senha);
        $dao->setLoginUsuario($login);
        $dao->criar();
        header("location: formLogin.php");
    } else {
        header("location: formCadastro.php");
    }
}

//Validação de LOGIN - Sessão
function validarLogin($login, $senha) {
    $dao = new DAOUsuario();
    $dao->lerPeloLogin();

    if ($login == $dao->getLoginUsuario() && $senha == $dao->getSenhaUsuario()) {
        header("location: Projeto_Gestão.html");
    } else {
        header("location: formLogin.php");
    }
}
