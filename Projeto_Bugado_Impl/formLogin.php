<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="design2.css"/>
        <title> Entrar/Registar </title>  
    </head>
    
    <body id="bodyEntrar">  
        <section>
            <fieldset id="campoEntrar">
                <a href="home.php"><img id="logoEntrar" src="Imagens/newLogo.png" alt="Viajapa"></a>
                    <!-- Validação de Login (link)
                        validarLogin
                    -->
                    <form id="tabelaForm" name="login" action="./usuario/logar.php" method="POST">
                        <table>
                            <tr>
                                <td>Login:</td>
                                <td><input type="text" name="login"></td>
                            </tr>
                            <tr>
                                <td>Senha:</td>
                                <td><input type="password" name="senha" minlength="8" required/> Mínimo (8 caracteres) </td>
                            </tr>
                            <tr>
                                <td colspan="2"><input id="botao" type="submit" value="Enviar"/></td>
                                <td colspan="2"><a href="home.php"> Voltar </a></td>
                            </tr>
                        </table>
                    </form>
            </fieldset>
        </section> 
    </body>
</html>