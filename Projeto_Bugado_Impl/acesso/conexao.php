<?php

class Banco {

    private $servidor = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $banco= "habitosbd";

    private $conexao;

    public function __construct() {
       $this->conectar();
    }

    public function conectar(){
        $this->conexao = mysqli_connect($this->servidor,$this->usuario,$this->senha);
        mysqli_select_db($this->conexao,$this->banco);
        if(!$this->conexao){
            echo "Erro ao conectar";
        }
    }

    public function getConexao(){
        return $this->conexao;
    }

    public function fecharConexao(){
        mysqli_close($this->conexao);
    }

}

?>