<?php

/*
 * Este arquivo faz o crud de usuário no banco de dados
 */
include_once '../acesso/conexao.php';

class DAOUsuario{

    private $listaHabitos;
    private $nomeUsuario;
    private $loginUsuario;
    private $emailUsuario;
    private $senhaUsuario;

    function __construct(){
        $this->limpar();
    }

    public function limpar(){
        $this->setNomeUsuario("");
        $this->setLoginUsuario("");
        $this->setEmailUsuario("");
        $this->setSenhaUsuario("");
        $this->setListaHabitos(array());
    }

    public function novo(){
        $mensagem = 0;
        $banco = new Banco();

        $consulta = "INSERT INTO usuario (nome,login,email,senha) VALUES ('$this->nomeUsuario', '$this->loginUsuario', '$this->emailUsuario','$this->senhaUsuario');";

        $resultado = mysqli_query($banco->getConexao(), $consulta);
        if ($resultado > 0) {
            $mensagem = 1;
        }
        $banco->fecharConexao();
        return $mensagem;
    }

    public function logar(){
        $mensagem = 0;
        $banco = new Banco();
        $consulta = "SELECT * FROM usuario WHERE login = '$this->loginUsuario' AND senha = '$this->senhaUsuario'";
        $resultado = mysqli_query($banco->getConexao(),$consulta) or die (mysqli_error($banco->getConexao()));
        $linhas = mysqli_num_rows($resultado);
            
        if($linhas > 0){
            $mensagem = 1;
        }
        $banco->fecharConexao();
        return $mensagem;
    }

    public function lerUsuario(){
    	$mensagem = 0;
        $banco = new Banco();
        $consulta = "SELECT * FROM usuario WHERE login = '$this->loginUsuario'";
        $resultado = mysqli_query($banco->getConexao(),$consulta) or die (mysqli_error($banco->getConexao()));
        $linhas = mysqli_num_rows($resultado);
            
        if($linhas > 0){
        	while ($linha = $resultado->fetch_assoc()) {
                $this->setLoginUsuario($linha["login"]);
                $this->setNomeUsuario($linha["nome"]);
                $this->setEmailUsuario($linha["email"]);
                $this->setSenhaUsuario($linha["senha"]);
                $mensagem = 1;
            }
        }
        $banco->fecharConexao();
        return $mensagem;
    }

    function lerTodos() {
    	$mensagem = 0;
        $banco = new Banco();
        $consulta = "SELECT * FROM usuario";
        $resultado = mysqli_query($banco->getConexao(),$consulta) or die (mysqli_error($banco->getConexao()));
        $linhas = mysqli_num_rows($resultado);
            
        if($linhas > 0){
        	while ($linha = $resultado->fetch_assoc()) {
                $this->setLoginUsuario($linha["login"]);
                $this->setNomeUsuario($linha["nome"]);
                $this->setEmailUsuario($linha["email"]);
                $this->setSenhaUsuario($linha["senha"]);
                array_push($this->listaUsuarios, $linha);
                $mensagem = 1;
            }
        }
        $banco->fecharConexao();
        return $mensagem;
    }

    function atualizar() {
    	$mensagem = 0;
        $banco = new Banco();
        $consulta = "UPDATE Usuario SET nome='$this->nomeUsuario',email='$this->emailUsuario',senha='$this->senhaUsuario' where login='$this->loginUsuario'";
		$resultado = mysqli_query($banco->getConexao(), $consulta);
        if ($resultado > 0) {
            $mensagem = 1;
        }
        $banco->fecharConexao();
        return $mensagem;
    }

    function deletar() {
    	$mensagem = 0;
        $banco = new Banco();
        $consulta = "DELETE from Usuario where login='$this->loginUsuario'";
		$resultado = mysqli_query($banco->getConexao(), $consulta);
        if ($resultado > 0) {
            $mensagem = 1;
        }
        $banco->fecharConexao();
        return $mensagem;
    }

    function getNomeUsuario() {
        return $this->nomeUsuario;
    }

    function getEmailUsuario() {
        return $this->emailUsuario;
    }

    function getSenhaUsuario() {
        return $this->senhaUsuario;
    }

    function getLoginUsuario() {
        return $this->loginUsuario;
    }
    
    function getListaHabitos() {
        return $this->listaHabitos;
    }

    function setNomeUsuario($nomeUsuario) {
        $this->nomeUsuario = $nomeUsuario;
    }

    function setEmailUsuario($emailUsuario) {
        $this->emailUsuario = $emailUsuario;
    }

    function setSenhaUsuario($senhaUsuario) {
        $this->senhaUsuario = $senhaUsuario;
    }

    function setLoginUsuario($loginUsuario) {
        $this->loginUsuario = $loginUsuario;
    }

    function setListaHabitos($array) {
        $this->listaHabitos = $array;
    }

    function mostrarUsuario() {
        return " Login:".$this->loginUsuario . "- Nome:" . $this->nomeUsuario . "- Email:" . $this->emailUsuario . "- Senha:" . $this->senhaUsuario;
    }

}