<!DOCTYPE html>
<?php
    include '../acesso/DAOUsuario.php';
    include 'validacoes.php';
    $dao = new DAOUsuario();
    $mensagem = 1;
    session_start();
    $login = $_SESSION["login"];
?>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <title>Alterar dados</title>
        <script language="javascript">
            function deletado() {
                setTimeout("window.location='../home.php'", 2000);
            }
        </script>
    </head>

    <body>
        <?php
            $opcao = $_POST["opcao"];
            $dao->setLoginUsuario($login);
            $dao->lerUsuario();

            switch($opcao){
                case "nome":
                    $nome = $_POST["nome"];
                    if(nomeValido($nome) == false){
                        echo "<a> Nome inválido: Digite apenas letras </a><br>";
                        $mensagem = 0;
                    }
                    $dao->setNomeUsuario($nome);
                    break;
                case "email":
                    $email= $_POST["email"];
                    if(emailValido($email) == false){
                        echo "<a> Formato de email inválido </a><br>";
                        $mensagem = 0;
                    }
                    $dao->setEmailUsuario($email);
                    break;
                case "senha":
                    $senha = $_POST["senha"];
                    $senha2 = $_POST["senha2"];
                    if($senha == $senha2 || $senha2 == ""){
                        echo "<a> Senhas iguais: Digite uma senha diferente </a><br>";
                        $mensagem = 0;
                    } else {
                        $dao->setSenhaUsuario($senha2);
                    }
                    break;
                case "deletar":
                    $mensagem = $dao->deletar();
                    if($mensagem > 0){
                        echo "<a> Este usuário foi deletado <br> Carregando... </a>";
                        include 'deslogar.php';
                        echo "<script language='javascript'>deletado()</script>";
                        exit();
                    }
                    break;
            }
            $mensagem = $dao->atualizar();
            if($mensagem > 0){
                echo "<a> Atualizado com sucesso </a> <a href='../usuario/configuracoes.php'> Voltar </a>";
            } else {
                echo "<br><a> Erro ao atualizar</a> <a href='../usuario/configuracoes.php'> Voltar </a>";
            }
        ?>
    </body>

    </html>