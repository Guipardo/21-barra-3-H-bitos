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
                <!-- Validação de Cadastro -->
                <form id="tabelaForm" name="cadastro" action='./usuario/cadastrar.php' method='POST' >
                   <p id="tituloEntrar">Cadastro</p>
                    <table>
                        <tr>
                            <td>Nome:</td>
                            <td><input type='text' name='nome'>
                            </td>
                        </tr>
                        <tr>
                            <td>Login:</td>
                            <td><input type='text' name='login'>
                            </td>
                        </tr>
                        <tr>
                            <td>E-mail:</td>
                            <td><input type='text' name='email'>
                            </td>
                        </tr>
                        <tr>
                            <td>Senha:</td>
                            <td><input type='password' name="senha" minlength="8" required>
                            </td>
                        </tr>
                       <tr>
                            <td>Confirmar senha :</td>
                            <td><input type=password name='senha2' minlength="8" required>
                            </td>
                        </tr> 
                        <td colspan="2"><input id="botao" type='submit' value='Cadastrar'/></td>
                        <td colspan="2"><a href="home.php"> Voltar </a></td>
                    </table>
                    
                </form></fieldset>
        </section> 
    </body>
</html>