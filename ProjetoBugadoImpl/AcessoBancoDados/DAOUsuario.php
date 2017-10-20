<?php

/*
 * Este arquivo faz o crud de usuário no banco de dados
 */

include "conexao.php";

class DAOUsuario {

    private $listaUsuarios;
    private $loginUsuario;
    private $nomeUsuario;
    private $emailUsuario;
    private $senhaUsuario;
    
    function __construct() {
        
    }

    function preparaUsuario($nome, $login, $email, $senha) {
        $this->listaUsuarios = [];
        $this->nomeUsuario = $nome;
        $this->loginUsuario = $login;
        $this->emailUsuario = $email;
        $this->senhaUsuario = $senha;
    }

    function criar() {
        $this->preparaUsuario(); //Limpa os dados do DAOUsuario
        //Preparando o Statement
        $statement = $this->conexao->prepare("INSERT INTO Usuario (nome,login,email, senha) VALUES (?,?, ?, ?)");
        $statement->bind_param("ssss", $this->nomeUsuario, $this->loginUsuario, $this->emailUsuario, $this->senhaUsuario);

        //Executando o Statement
        $resultado = mysql_query($statement, $this->conexao) or die(mysql_error());

        //Tratando os resultados
        if (mysql_num_rows($resultado) > 0) {
            print "Usuário inserido com sucesso!";
        } else {
            print "Não foi possível inserir um usuário!";
        }
        mysqli_close($this->conexao);
    }

    //Atributo - Qual informação do usuário deseja retornar
    public function lerPeloLogin() {
        //Preparando o Statement
        $statement = $this->conexao->prepare("SELECT * from Usuario where loginUsuario=?");
        $statement->bind_param("s", $this->loginUsuario);
        //Executando o Statement
        $resultado = mysql_query($statement, $this->conexao) or die(mysql_error());
        //Tratando os resultados
        if (mysql_num_rows($resultado) > 0) {
            while ($linha = $resultado->fetch_assoc()) {
                $this->setNomeUsuario($linha["nomeUsuario"]);
                $this->setEmailUsuario($linha["emailUsuario"]);
                $this->setSenhaUsuario($linha["senhaUsuario"]);
            }
        } else {
            print " Usuário não encontrado ";
        }
        mysqli_close($this->conexao);
    }

    function lerTodos() {
        //Preparando o Statement
        $statement = $this->conexao->prepare("SELECT * from Usuario");

        //Executando o Statement
        $resultado = mysql_query($statement, $this->conexao) or die(mysql_error());
        //Tratando os resultados
        if (mysql_num_rows($resultado) > 0) {
            while ($linha = $resultado->fetch_assoc()) {
                $this->setLoginUsuario($linha["loginUsuario"]);
                $this->setNomeUsuario($linha["nomeUsuario"]);
                $this->setEmailUsuario($linha["emailUsuario"]);
                $this->setSenhaUsuario($linha["senhaUsuario"]);
                array_push($this->listaUsuarios, $linha);
            }
        } else {
            print " Usuário não encontrado ";
        }
        mysqli_close($this->conexao);
    }

    function atualizar() {
        $this->preparaUsuario();

        $usuario = $this->lerPeloLogin();

        //Preparando o Statement
        $statement = $this->conexao->prepare("UPDATE Usuario set nomeUsuario=?,emailUsuario=?,senhaUsuario=? where loginUsuario=?");
        $statement->bind_param("sssi", $this->nomeUsuario, $this->emailUsuario, $this->senhaUsuario, $usuario->loginUsuario);

        //Executando o Statement
        $resultado = mysql_query($statement, $this->conexao) or die(mysql_error());

        //Tratando os resultados
        if (mysql_num_rows($resultado) > 0) {
            print "Usuário atualizado com sucesso!";
        } else {
            print "Não foi possível atualizar um usuário!";
        }
        mysqli_close($this->conexao);
    }

    function deletar() {

        //Preparando o Statement
        $statement = $this->conexao->prepare("DELETE from Usuario where loginUsuario=?");
        $statement->bind_param("s", $this->loginUsuario);
        //Executando o Statement
        $resultado = mysql_query($statement, $this->conexao) or die(mysql_error());
        //Tratando os resultados
        if (mysql_num_rows($resultado) > 0) {
            print ("Usuário deletado com sucesso");
        } else {
            print " Falha ao deletar ";
        }
        mysqli_close($this->conexao);
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

    function setNomeUsuario($nomeUsuario) {
        $this->nomeUsuario = $nomeUsuario;
    }

    function setEmailUsuario($emailUsuario) {
        $this->emailUsuario = $emailUsuario;
    }

    function setSenhaUsuario($senhaUsuario) {
        $this->senhaUsuario = $senhaUsuario;
    }

    function getLoginUsuario() {
        return $this->loginUsuario;
    }

    function setLoginUsuario($loginUsuario) {
        $this->loginUsuario = $loginUsuario;
    }

    function mostrarUsuario() {
        return $this->codUsuario . "-" . $this->nomeUsuario . "-" . $this->emailUsuario . "-" . $this->senhaUsuario;
    }

}
