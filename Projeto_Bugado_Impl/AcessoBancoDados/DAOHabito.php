<?php

/*
 *  Este arquivo faz o crud dos hábitos no banco de dados
 */

include "conexao.php";

class DAOHabito {

    public $codHabito; //Código do hábito
    public $nome; //String - Nome do hábito
    public $categoria; // String - Categoria do hábito
    public $dificuldade; //String - Dificuldade do hábito
    public $contCiclo; // Contador de ciclos da barra

    function __construct() {
        
    }

    function preparaHabito($codHabito, $nome, $categoria, $dificuldade, $contCiclo) {
        $this->codHabito = $codHabito;
        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->dificuldade = $dificuldade;
        $this->contCiclo = $contCiclo;
    }

    //CRUD Hábito - Terminar
    
    
    function getCodHabito() {
        return $this->codHabito;
    }

    function getNome() {
        return $this->nome;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getDificuldade() {
        return $this->dificuldade;
    }

    function getContCiclo() {
        return $this->contCiclo;
    }

    function setCodHabito($codHabito) {
        $this->codHabito = $codHabito;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    function setDificuldade($dificuldade) {
        $this->dificuldade = $dificuldade;
    }

    function setContCiclo($contCiclo) {
        $this->contCiclo = $contCiclo;
    }

    function mostrarHabito() {
        return $this->codUsuario . "-" . $this->nomeUsuario . "-" . $this->emailUsuario . "-" . $this->senhaUsuario;
    }

}
