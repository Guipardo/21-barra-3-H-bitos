<?php
/*
 * Este arquivo contém todos os Scripts em PHP que se comunicam com o Canvas
 * 
 */

include '../acesso/DAOHabito.php';
include '../acesso/DAOUsuario.php';

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

    function atualizarLembrete($data,$habito){
        $habito->setLembrete($data);
        $habito->definirLembrete();
    }

    function getNomeUsuario($login){
        $dao = new DAOUsuario();
        $dao->setLoginUsuario($login);
        $dao->lerUsuario();
        return $dao->getNomeUsuario();
    }

    function getTodosDias($habito){
        return $habito->getDias();
    }
    
    /* ------------------------------------------------------------------------------- */

    function carregarhabitosPeloLogin($login){
        $dao = new DAOHabito();
        $dao->setCodUsuario($login);
        $dao->lerTodos();
        return $dao;
    }

    function lerHabitoPeloIndice($dao,$indice){
        foreach ($dao->getListaHabitos() as $chave => $habito) {
            if($indice == $chave){
                $dao->setCodHabito($habito['codHabito']);
            }
        }
        $dao->lerHabito();
        return $dao;
    }
?>