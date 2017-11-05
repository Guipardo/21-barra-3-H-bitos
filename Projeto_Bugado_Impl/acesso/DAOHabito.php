<?php

/*
 *  Este arquivo faz o crud dos hábitos no banco de dados
 */
include_once '../acesso/conexao.php';

class DAOHabito {

	private $listaHabitos; // Lista de Habitos 
    private $codHabito; //Código do hábito
    private $nomeHabito; //String - Nome do hábito
    private $categoriaHabito; // String - Categoria do hábito
    private $dificuldadeHabito; //String - Dificuldade do hábito
    private $contCicloHabito; // Contador de ciclos da barra
    private $codUsuario; //Login do Usuário que esta relacionado a este hábito
    private $dias; //Array de Quadrados que marcam os dias do ciclo
    private $lembrete; // Horario de lembrete do hábito


    function __construct() {
        $this->limpar();
    }

    public function limpar(){
        $this->listaHabitos = array();
        $this->codHabito = 0;
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

        $consulta = "INSERT INTO habito (codHabito,nomeHabito,categoriaHabito,dificuldadeHabito,contCicloHabito,codUsuario,lembrete) 
        VALUES ('$this->codHabito','$this->nomeHabito','$this->categoriaHabito','$this->dificuldadeHabito','$this->contCicloHabito','$this->codUsuario',now())";
        $resultado = mysqli_query($banco->getConexao(), $consulta) or die (mysqli_error($banco->getConexao()));

        $consulta2 = "INSERT INTO ciclo(codCiclo,dia1,dia2,dia3,dia4,dia5,dia6,dia7,dia8,dia9,dia10,dia11,dia12,dia13,dia14,dia15,dia16,dia17,dia18,dia19,dia20,dia21) values
         ('$this->codHabito',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0)";
        $resultado2 = mysqli_query($banco->getConexao(), $consulta2) or die (mysqli_error($banco->getConexao()));;

        if ($resultado > 0 AND $resultado2 > 0) {
            $mensagem = 1;
        }
        $banco->fecharConexao();
        return $mensagem;
    }

    public function lerHabito(){
        $mensagem = 0;
        $banco = new Banco();
        $consulta = "SELECT * FROM habito WHERE codHabito = '$this->codHabito'";
        
        $resultado = mysqli_query($banco->getConexao(),$consulta) or die (mysqli_error($banco->getConexao()));
        $linhas = mysqli_num_rows($resultado);
            
        if($linhas > 0){
            while ($linha = $resultado->fetch_assoc()) {
                $this->setCodHabito($linha["codHabito"]);
                $this->setNomeHabito($linha["nomeHabito"]);
                $this->setCategoriaHabito($linha["categoriaHabito"]);
                $this->setDificuldadeHabito($linha["dificuldadeHabito"]);
                $this->setContCicloHabito($linha["contCicloHabito"]);
                $this->setCodusuario($linha["codUsuario"]);
                $this->setLembrete($linha["lembrete"]);
                $mensagem = 1;
            }
        }
        
        $consulta2 = "SELECT * FROM ciclo WHERE codCiclo = '$this->codHabito'";
        $resultado2 = mysqli_query($banco->getConexao(),$consulta) or die (mysqli_error($banco->getConexao()));
        $linhas2 = mysqli_num_rows($resultado2);
            
        if($linhas2 > 0){
            while ($linha = $resultado2->fetch_assoc()) {
                for($i = 0;$i < count($this->dias);$i++){
                    $chave = "dia".($i+1);
                    $this->dias[$i] = $linha['$chave'];
                }
                $mensagem = 1;
            }
        }
        
        $banco->fecharConexao();
        return $mensagem;
    }
    
    public function habitoExiste($nome,$login){
        $mensagem = 0;
        $banco = new Banco();
        $consulta = "SELECT * FROM habito WHERE nomeHabito ='$nome' AND codUsuario='$login'";
        $resultado = mysqli_query($banco->getConexao(),$consulta) or die (mysqli_error($banco->getConexao()));
        $linhas = mysqli_num_rows($resultado);
            
        if($linhas > 0){
            while ($linha = $resultado->fetch_assoc()) {
                $mensagem = 1;
            }
        }
        $banco->fecharConexao();
        return $mensagem;
    }

    public function lerTodos(){
        $mensagem = 0;
        $banco = new Banco();
        $consulta = "SELECT * FROM habito where codUsuario='$this->codUsuario';";
        $resultado = mysqli_query($banco->getConexao(),$consulta) or die (mysqli_error($banco->getConexao()));
        $linhas = mysqli_num_rows($resultado);
            
        if($linhas > 0){
            while ($linha = $resultado->fetch_assoc()) {
                $this->setCodHabito($linha["codHabito"]);
                $this->setNomeHabito($linha["nomeHabito"]);
                $this->setDificuldadeHabito($linha["dificuldadeHabito"]);
                $this->setContCicloHabito($linha["contCicloHabito"]);
                $this->setCodusuario($linha["codUsuario"]);
                $this->setLembrete($linha["lembrete"]);
                array_push($this->listaHabitos, $linha);
                $mensagem = 1;
            }
        }
        $banco->fecharConexao();
        return $mensagem;
    }

    function atualizar($nomeAntigo) {
    	$mensagem = 0;
        $banco = new Banco();
        $consulta = "UPDATE Habito SET nomeHabito='$this->nomeHabito',categoriaHabito='$this->categoriaHabito' where codUsuario='$this->codUsuario' AND nomeHabito='$nomeAntigo'";
        echo $consulta;
		$resultado = mysqli_query($banco->getConexao(), $consulta);
        if ($resultado > 0) {
            $mensagem = 1;
        }
        $banco->fecharConexao();
        return $mensagem;
    }

    function apagar() {
    	$mensagem = 0;
        $banco = new Banco();
        $consulta = "DELETE from Habito where codUsuario='$this->codUsuario' AND nomeHabito='$this->nomeHabito'";
		$resultado = mysqli_query($banco->getConexao(), $consulta);
        if ($resultado > 0) {
            $mensagem = 1;
        }
        $banco->fecharConexao();
        return $mensagem;
    }
    
    function definirLembrete(){
        $mensagem = 0;
        $banco = new Banco();
        $consulta = "UPDATE Habito SET lembrete='$this->lembrete' where codUsuario='$this->codUsuario' AND nomeHabito='$nomeAntigo'";
        echo $consulta;
		$resultado = mysqli_query($banco->getConexao(), $consulta);
        if ($resultado > 0) {
            $mensagem = 1;
        }
        $banco->fecharConexao();
        return $mensagem;
    }

    function dia($indice){
        return $dao->diasBarra[$indice];
    }
    
    function getCodHabito() {
        return $this->codHabito;
    }

    function getNomeHabito() {
        return $this->nomeHabito;
    }

    function getCategoriaHabito() {
        return $this->categoriaHabito;
    }

    function getDificuldadeHabito() {
        return $this->dificuldadeHabito;
    }

    function getContCicloHabito() {
        return $this->contCicloHabito;
    }

    function getDiasBarra(){
        return $this->diasBarra;
    }

    function getCodusuario(){
       return $this->codUsuario;
    }

    function getLembrete(){
       return $this->lembrete;
    }
    
    function getListaHabitos(){
        return $this->listaHabitos;
    }

    function setCodHabito($codHabito) {
        $this->codHabito = $codHabito;
    }

    function setNomeHabito($nome) {
        $this->nomeHabito = $nome;
    }

    function setCategoriaHabito($categoria) {
        $this->categoriaHabito = $categoria;
    }

    function setDificuldadeHabito($dificuldade) {
        $this->dificuldadeHabito = $dificuldade;
    }

    function setContCicloHabito($contCiclo) {
        $this->contCicloHabito = $contCiclo;
    }

    function setCodusuario($codUsuario){
        $this->codUsuario = $codUsuario;
    }

    function setLembrete($lembrete){
        $this->lembrete = $lembrete;
    }

    function setDiasBarra($array){
        $this->diasBarra = $array;
    }

    function mostrarHabitos() {
        $array = $this->listaHabitos;
        foreach($array as $indice => $sub){ 
            foreach($sub as $indice => $valor){
                 echo var_dump($indice,$valor)."<br>";
            }
        }
    }
}