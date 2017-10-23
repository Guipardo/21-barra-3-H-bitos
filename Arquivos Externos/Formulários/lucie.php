<!DOCTYPE html>
<html>
    
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="design.css"/>
        <title> Entrar/Registar </title>
        
    </head>
    
    <body id="bodyEntrar">
        
        <section>
            <fieldset id="campoEntrar">
                <a href="home.html"><img id="logoEntrar" src="Imagens/logoTipo.jpg" alt="Viajapa"></a>
                <p id="tituloEntrar"> Ainda não é cadastrado no site? Então, faça isso agora mesmo! </p>
            
                    <form  id="tabelaForm" name="cadastro" action="crud.php" method="POST">
                    
                        <table>
                            <tr>
                                <td>User Name</td>
                                <td><input type="text" name="userName"></td>
                            </tr>
                            <tr>
                                <td>Senha:</td>
                                <td><input type="password" name="senha" maxlength="8" required/>*(8 caracteres)</p></td>
                            </tr>
                            <tr><td><a href = "form.php" id="cadastro" >Registrar-se</a></td></tr>
                            
                            <tr>
                                <td colspan="2"><input id="botao" type="submit" value="Enviar"/></td>
                            </tr>
                        </table>
                    
                    </form>
    
            

            </fieldset>
        </section>
    
    </body>
    
</html>