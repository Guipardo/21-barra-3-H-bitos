<?php
/*
 * Este arquivo contém todos os Scripts em PHP que se comunicam com o Canvas
 * 
 */

include_once '../acesso/DAOHabito.php';
include_once '../acesso/DAOUsuario.php';

    function carregarDAO($login){
        $dao = new DAOHabito();
        $dao = carregarHabitosPeloLogin($login);
        return $dao;
    }

    function getAtributoHabito($dao,$atributo){
        switch($atributo){
            case "nome":
                return $dao->getNomeHabito();
                break;
            case "categoria":
                return $dao->getCategoriaHabito();
                break;
            case "dificuldade":
                return $dao->getDificuldadeHabito();
                break;
            case "ciclo":
                return $dao->getContCicloHabito();
                break;
            case "lembrete":
                return $dao->getLembrete();
                break;
        }
    }

    function getNomeUsuario($login){
        $dao = new DAOUsuario();
        $dao->setLoginUsuario($login);
        $dao->lerUsuario();
        return $dao->getNomeUsuario();
    }

    
    /* ------------------------------------------------------------------------------- */

    function carregarhabitosPeloLogin($login){
        $dao = new DAOHabito();
        $dao->setCodUsuario($login);
        $dao->lerTodos();
        return $dao;
    }

    function lerHabitoPeloIndice($dao,$indice){
        $array = $dao->getListaHabitos();
        for($i = 0; $i < count($array);$i++){
            if($indice == $i){
                $cod = $array[$i]->getCodHabito();
                $dao->setCodHabito($cod);
                $dao->lerHabito();
                return $dao;
            }    
        }
    }  
?>