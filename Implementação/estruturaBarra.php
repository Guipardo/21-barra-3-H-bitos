<?php
	//Hábito
	class Habito{
		public $nome; //String - Nome do hábito
		public $contDiaAtual; // Inteiro - Contador de dias
		public $lembrete; // String de Horário de lembre
		public $categoria; // String - Categoria do hábito
		public $dificuldade; //String - Dificuldade do hábito
		public $tarefaMarcada; // Booleano - Define se a tarefa ainda está pendente
		public $tarefaCumprida; // boolean - Define se a tarefa foi cumprida ou não
		public $contCiclo; // Contador de ciclos da barra

		// Construtor da classe
		function Habito(){
			$this->preparaHabito();
		}

		// Função que preenche o hábito com seus valores (Pegar valores do banco de dados)
		function preparaHabito(){ 
			$this->nome = "Ler mais livros";
			$this->contDiaAtual = 14;
			$this->lembrete = "14:00";
			$this->categoria = "Leitura";
			$this->dificuldade = "Fácil";
			$this->tarefaMarcada = false; // Toda tarefa inicia como não marcada/pendente
			$this->contCiclo = 1;
		}

		//Reinicia o contador de dias e incrementa um ciclo
		function incrementaCiclo(){
			if($this->contDiaAtual >21){
				$this->contCiclo += 1;
				limparBarra();
			}
		}

		// Reinicia o contador de dias
		function limparBarra(){
			$this->contDiaAtual = 1;
			// Limpar a barra do canvas- todos os quadradinhos da barra 
		}

		//Retorna um código HEX de Cor se a tarefa foi cumprida ou não (Usar este código como parâmetro no Canvas para colorir)
		function colorirBarra(){
			if($this->tarefaCumprida == true){
				// Return #0000 código da cor Retornar cor VERDE
			} else {
				// Return #0000 código da cor Retornar cor VERMELHA
			}
		}

		//Retorna a quantidade de pontos ganhados naquele dia, somando com a pontuação total do usuário
		function calcularPontos(){
			if($this->dificuldade == "Fácil"){
				return 10;
			} else if($this->dificuldade == "Médio"){
				return 20;
			} else if($this->dificuldade == "Difícil"){
				return 30;
			}
		}

	}

	// USUÁRIO
	class Usuario{
		public $nome;
		public $login;
		public $senha;
		public $pontuacao;
		public $logado; //Verifica se está logado ou não (opcional)

		function Usuario(){
			$this->preparaUsuario();
		}

		//Pegar parâmetros do banco de dados
		function preparaUsuario(){
			$this->nome = "Lucie Wilde";
			$this->login = "Lulu";
			$this->senha = "umasenha1234";
			$this->pontuacao = 0; // Todo usuário começa com sua pontuação em 0
			$this->logado = false;
		}

		function logar(){
			if($this->logado == false){
				$this->logado = true;
			}
		}

		function deslogar(){
			if($this->logado == true){
				$this->logado = false;
			}
		}

		function getNome(){
			return $this->nome;
		}
	}
        
     $usuario = new Usuario();
     echo $usuario->nome;
?>
