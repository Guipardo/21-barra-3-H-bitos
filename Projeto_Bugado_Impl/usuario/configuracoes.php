<?php
    include '../acesso/DAOUsuario.php';
    $dao = new DAOUsuario();
    $mensagem;
    session_start();
    $login = $_SESSION['login'];
    $senha = $_SESSION['senha'];
?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset='UTF-8'>
        <link rel='stylesheet' type='text/css' href='../estiloForm.css'/>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title> Configurações </title>
    </head>

    <body>
        <section>
            <?php
                    if(isset($_SESSION['login']) and isset($_SESSION['senha'])){
                    $dao->setLoginUsuario($login);
                    $dao->lerUsuario();
                    $nome = $dao->getNomeUsuario();
                    $email = $dao->getEmailUsuario();
                    $senha = $dao->getSenhaUsuario();
                        
                    echo "<h3 class='titulo'> Configurações </h3>

                    <fieldset>
                    <form name='cadastro' action='alterarDados.php' method='POST'>
                        <input type=hidden name='opcao' value='nome'>
                        <a> Alterar nome </a><input type='text' class='caixaTexto' name='nome' value='$nome'/>
                        <input type='submit' value='Salvar'/>
                    </form></fieldset>
                    <hr>

                    <fieldset>
                    <form name='cadastro' action='alterarDados.php' method='POST'>
                        <input type=hidden name='opcao' value='email'>
                        <a> Alterar Email </a><input type='text' class='caixaTexto' name='email' value='$email'/>
                        <input type='submit' value='Salvar'/>
                    </form></fieldset>
                    <hr>

                    <fieldset>
                    <form name='cadastro' action='alterarDados.php' method='POST'>
                        <input type=hidden name='opcao' value='senha'>
                        <a> Alterar Senha </a>
                        <br><br>
                        <a>Senha Antiga: </a><input type='password' class='caixaTexto' required name='senha' value='$senha'/><br><br>
                        <a>Senha Nova: </a><input type='password' class='caixaTexto' name='senha2' minlength='8' required/>
                        <input type='submit' value='Salvar'/>
                    </form></fieldset>
                    <hr>

                    <fieldset>
                    <form name='cadastro' action='alterarDados.php' method='POST'>
                        <input type=hidden name='opcao' value='deletar'>
                        <input type='submit' value='Deletar'/>
                    </form></fieldset>
                    <br>
                    <a href='../canvas/painelCanvas.php'> Voltar </a>";
                    } else {
                        header('Location: ../home.php');
                    }
        ?>
        </section>
    </body>

    </html>