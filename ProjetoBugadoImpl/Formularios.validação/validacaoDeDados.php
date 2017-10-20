<?php

/*
 * Este arquivo faz as validações de nome, email e senha de um usuário,
 *  também faz a validação de sessão
 */

function validarNome($nome) {
    if (empty($nome)) {
        return "Vazio";
    } else if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        return "Inválido";
    } else {
        return "Válido";
    }
}

function validarEmail($email) {
    if (empty($email)) {
        return "Vazio";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "Inválido";
    } else {
        return "Válido";
    }
}

function validarSenha($senha1,$senha2){
    if(empty($senha1)){
        return "Vazio";
    }
    else if($senha1 != $senha2){
        return "Inválido";
    } else {
        return "Válido";
    }
    

    //Validação de LOGIN - Sessão
    
}