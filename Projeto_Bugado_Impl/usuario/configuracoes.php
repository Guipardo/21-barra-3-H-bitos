<!DOCTYPE html>
<?php
    include '../acesso/DAOUsuario.php';
    $dao = new DAOUsuario();
    $mensagem;
    session_start();
    $login = $_SESSION["login"];
    $senha = $_SESSION["senha"];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="design.css"/>
        <title> Configurações </title>  
    </head>

    <body id="bodyCadastro">  
        <section>
                <?php 
                    if(isset($_SESSION['login']) and isset($_SESSION['senha'])){
                    $dao->setLoginUsuario($login);
                    $dao->lerUsuario();
                    $nome = $dao->getNomeUsuario();
                    $email = $dao->getEmailUsuario();
                    $senha = $dao->getSenhaUsuario();

                    echo "<h3> Configurações </h3>

                    <fieldset>
                    <form id='tabelaForm' name='cadastro' action='alterarDados.php' method='POST'>
                        <input type=hidden name='opcao' value='nome'>
                        <a> Alterar nome </a><input type='text' name='nome' value='$nome'/>
                        <input type='submit' value='Salvar'/>
                    </form></fieldset>
                    <hr>

                    <fieldset>
                    <form id='tabelaForm' name='cadastro' action='alterarDados.php' method='POST'>
                        <input type=hidden name='opcao' value='email'>
                        <a> Alterar Email </a><input type='text' name='email' value='$email'/>
                        <input type='submit' value='Salvar'/>
                    </form></fieldset>
                    <hr>

                    <fieldset>
                    <form id='tabelaForm' name='cadastro' action='alterarDados.php' method='POST'>
                        <input type=hidden name='opcao' value='senha'>
                        <a> Alterar Senha </a>
                        <br>
                        Senha Antiga: <input type='password' required name='senha' value='$senha'/><br/>
                        Senha Nova: <input type='password' name='senha2' minlength='8' required/>
                        <input type='submit' value='Salvar'/>
                    </form></fieldset>
                    <hr>

                    <fieldset>
                    <form id='tabelaForm' name='cadastro' action='alterarDados.php' method='POST'>
                        <input type=hidden name='opcao' value='deletar'>
                        <input type='submit' value='Deletar'/>
                    </form></fieldset>

                    <a href='../canvas/painelCanvas.php'> Voltar </a>";
                } else {
                    header("Location: ../home.php");
                }
                ?>
        </section> 
    </body>
</html>