<?php

/*
 *  Este arquivo faz o crud dos hábitos no banco de dados
 */

include "conexao.php";

class DAOHabito {

	public $listaHabitos; // Lista de Habitos 
    public $codHabito; //Código do hábito
    public $nomeHabito; //String - Nome do hábito
    public $categoriaHabito; // String - Categoria do hábito
    public $dificuldadeHabito; //String - Dificuldade do hábito
    public $contCicloHabito; // Contador de ciclos da barra

    function __construct() {
        
    }

    function preparaHabito($codHabito, $nome, $categoria, $dificuldade, $contCiclo) {
        $this->listaHabitos = [];
        $this->codHabito = $codHabito;
        $this->nomeHabito = $nome;
        $this->categoriaHabito = $categoria;
        $this->dificuldadeHabito = $dificuldade;
        $this->contCicloHabito = $contCiclo;
    }

    //CRUD Hábito - Terminar
    function criar() {
        $this->preparaHabito(); //Limpa os dados do DAOHabito
        //Preparando o Statement
        $statement = $this->conexao->prepare("INSERT INTO Habito (nome,categoria,dificuldade,contCiclo) VALUES (?,?,?,0)");
        $statement->bind_param("sssi", $this->getNome(), $this->getCategoria(), $this->getDificuldade());

        //Executando o Statement
        $resultado = mysql_query($statement, $this->conexao) or die(mysql_error());

        //Tratando os resultados
        if (mysql_num_rows($resultado) > 0) {
            print "Hábito inserido com sucesso!";
        } else {
            print "Não foi possível inserir um Hábito!";
        }
        mysqli_close($this->conexao);
    }

    //Atributo - Qual informação do usuário deseja retornar
    public function lerPeloNome() {
        //Preparando o Statement
        $statement = $this->conexao->prepare("SELECT * from Habito where codHabito=?");
        $statement->bind_param("s", $this->getCodHabito());
        //Executando o Statement
        $resultado = mysql_query($statement, $this->conexao) or die(mysql_error());
        //Tratando os resultados
        if (mysql_num_rows($resultado) > 0) {
            while ($linha = $resultado->fetch_assoc()) {
                $this->setNomeHabito($linha["nomeHabito"]);
                $this->setCategoriaHabito($linha["categoriaHabito"]);
                $this->setDificuldadeHabito($linha["dificuldadeHabito"]);
            }
        } else {
            print " Hábito não encontrado ";
        }
        mysqli_close($this->conexao);
    }

    function lerTodos() {
        //Preparando o Statement
        $statement = $this->conexao->prepare("SELECT * from Habito");

        //Executando o Statement
        $resultado = mysql_query($statement, $this->conexao) or die(mysql_error());
        //Tratando os resultados
        if (mysql_num_rows($resultado) > 0) {
            while ($linha = $resultado->fetch_assoc()) {
                $this->setNomeHabito($linha["nomeHabito"]);
                $this->setCategoriaHabito($linha["categoriaHabito"]);
                $this->setDificuldadeHabito($linha["dificuldadeHabito"]);
                $this->setCodHabito($linha["codHabito"]);
                array_push($this->listaHabitos, $linha);
            }
        } else {
            print " Hábito não encontrado ";
        }
        mysqli_close($this->conexao);
    }

    function atualizar() {
        $this->preparaHabito();

        $habito = $this->lerPeloNome();

        //Preparando o Statement
        $statement = $this->conexao->prepare("UPDATE Habito set nomeHabito=?,categoriaHabito=?,dificuldadeHabito=? where codHabito=?");
        $statement->bind_param("sssi", $this->getNome(), $this->getCategoria(), $this->getDificuldade(), $habito->getCodHabito());

        //Executando o Statement
        $resultado = mysql_query($statement, $this->conexao) or die(mysql_error());

        //Tratando os resultados
        if (mysql_num_rows($resultado) > 0) {
            print "Hábito atualizado com sucesso!";
        } else {
            print "Não foi possível atualizar um hábito!";
        }
        mysqli_close($this->conexao);
    }

    function deletar() {

        //Preparando o Statement
        $statement = $this->conexao->prepare("DELETE from Habito where codHabito=?");
        $statement->bind_param("s", $this->getCodHabito());
        //Executando o Statement
        $resultado = mysql_query($statement, $this->conexao) or die(mysql_error());
        //Tratando os resultados
        if (mysql_num_rows($resultado) > 0) {
            print ("Habito deletado com sucesso");
        } else {
            print " Falha ao deletar ";
        }
        mysqli_close($this->conexao);
    }
    
    
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
        $this->nomeHabito = $nome;
    }

    function setCategoria($categoria) {
        $this->categoriaHabito = $categoria;
    }

    function setDificuldade($dificuldade) {
        $this->dificuldadeHabito = $dificuldade;
    }

    function setContCiclo($contCiclo) {
        $this->contCicloHabito = $contCiclo;
    }

    function mostrarHabito() {
        return $this->codUsuario . "-" . $this->nomeUsuario . "-" . $this->emailUsuario . "-" . $this->senhaUsuario;
    }

}
