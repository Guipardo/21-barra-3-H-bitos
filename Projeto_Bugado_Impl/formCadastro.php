<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="design.css"/>
        <title> Entrar/Registar </title>  
    </head>

    <body id="bodyCadastro">  
        <section>
            <fieldset><h3>Cadastro</h3>

                <!-- Validação de Cadastro -->
                <form id="tabelaForm" name="cadastro" action='validarCadastro.php' method='POST' >
                    Nome: <input type='text' name='nome'/><br/>
                    Sobrenome: <input type='text' name='sobrenome'/><br/>
                    Login: <input type='text' name='login'/><br/>
                    E-mail: <input type='text' name='email'/><br/>
                    Senha: <input type='password' minlength="8" required name='senha'/><br/>
                    Confirmar senha: <input type='password' name='senha2' minlength="8" required/><br/>
                    <input type='submit' value='Inserir'/>
                </form></fieldset>
        </section> 
    </body>
</html>