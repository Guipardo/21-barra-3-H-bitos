<?php

/*
 *  Este arquivo faz o crud dos hábitos no banco de dados
 */

include '../acesso/conexao.php';

class DAOHabito {

	private $listaHabitos; // Lista de Habitos 
    private $codHabito; //Código do hábito
    private $nomeHabito; //String - Nome do hábito
    private $categoriaHabito; // String - Categoria do hábito
    private $dificuldadeHabito; //String - Dificuldade do hábito
    private $contCicloHabito; // Contador de ciclos da barra
    private $codUsuario; //Login do Usuário que esta relacionado a este hábito
    private $dias; //Array de Quadrados que marcam os dias do ciclo


    function __construct() {
        $this->limpar();
    }

    public function limpar(){
        $this->listaHabitos = [];
        $this->codHabito = "";
        $this->nomeHabito = "";
        $this->categoriaHabito = "";
        $this->dificuldadeHabito = "";
        $this->contCicloHabito = 0;
        $this->codUsuario = "";
        $this->dias = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
    }

    public function novo(){
        $mensagem = 0;
        $banco = new Banco();

        $consulta = "INSERT INTO habito (codHabito,nomeHabito,categoriaHabito,dificuldadeHabito,contCicloHabito,codUsuario) 
        VALUES ('$this->codHabito','$this->nomeHabito','$this->categoriaHabito','$this->dificuldadeHabito','$this->contCicloHabito','$this->codUsuario');";
        $resultado = mysqli_query($banco->getConexao(), $consulta);

        $consulta2 = "INSERT INTO ciclo(dia1,dia2,dia3,dia4,dia5,dia6,dia7,dia8,dia9,dia10,dia11,dia12,dia13,dia14,dia15,dia16,dia17,dia18,dia19,dia20,dia21) values
         ('$this->dias[0]');";
        $resultado2 =  mysqli_query($banco->getConexao(), $consulta2);

        if ($resultado > 0 AND $resultado2 > 0) {
            $mensagem = 1;
        }
        $banco->fecharConexao();
        return $mensagem;
    }


    /*
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
    */
    
    
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

    function getDiasBarra(){
        return $this->diasBarra;
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

    function setDiasBarra($array){
        $this->diasBarra = $array;
    }

    function mostrarHabito() {
        return $this->codUsuario . "-" . $this->nomeUsuario . "-" . $this->emailUsuario . "-" . $this->senhaUsuario;
    }

}