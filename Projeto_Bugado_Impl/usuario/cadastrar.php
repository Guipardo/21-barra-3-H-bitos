<!DOCTYPE html>
<?php
    include '../acesso/DAOUsuario.php';
    include 'validacoes.php';
    $dao = new DAOUsuario();
    $mensagem = 1;
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Cadastro</title>
        <script language="javascript">
        function sucesso(){
                setTimeout("window.location='../formLogin.php'", 3000);
        }  
    	</script>
    </head>
    <body>
        <?php
            $nome = $_POST["nome"];
            $email= $_POST["email"];
            $login = $_POST["login"];
            $senha = $_POST["senha"];
            $senha2 = $_POST["senha2"];

            $dao->setLoginUsuario($login);

            if($dao->lerUsuario() > 0){
            	echo "<a> Este nome de usuário já existe </a><br>";
            	$mensagem = 0;
            } 
            
            if($senha != $senha2){
            	echo "<a> Senhas não conferem: Digite senhas iguais </a><br>";
                $mensagem = 0;
            }
            
            if(nomeValido($nome) == false){
            	echo "<a> Nome inválido: Digite apenas letras </a><br>";
                $mensagem = 0;
            }
          
            if(emailValido($email) == false){
            	echo "<a> Email inválido </a><br>";
                $mensagem = 0;
            }
            
            if($mensagem > 0){
            	$dao->limpar();
                $dao->setNomeUsuario($nome);
                $dao->setEmailUsuario($email);
                $dao->setLoginUsuario($login);
                $dao->setSenhaUsuario($senha);
                $dao->novo();
                echo "<a> Usuário Cadastrado com sucesso </a>";
                echo "<script language='javascript'>sucesso()</script";
            } else {
                echo "<br><a> Erro no cadastro</a> <a href='../formCadastro.php'> Voltar </a>";
            }
        ?>
    </body>
</html>

