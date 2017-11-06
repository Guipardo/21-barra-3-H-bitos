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
            <fieldset id="campoCadastro">
                <a href="home.php"><img id="logoEntrar" src="Imagens/newLogo.png" alt="Viajapa"></a>
                <p id="tituloEntrar">Cadastro</p>

                <!-- Validação de Cadastro -->
                <form id="tabelaForm" name="cadastro" action='./validacao/validarCadastro.php' method='POST' >
                    <table>
                        <tr>
                            <td>Nome:</td>
                            <td><input type='text' name='nome'>
                            </td>
                        </tr>
                        <tr>
                            <td>Sobrenome:</td>
                            <td><input type='text' name='sobrenome'>
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
                            <td><input type='passaword' minlength="8" required name='nome'>
                            </td>
                        </tr>
                       <tr>
                            <td>Confirmar senha :</td>
                            <td><input type=password name='senha2' minlength="8" required>
                            </td>
                        </tr> 
                        <td colspan="2"><input id="botao"
                                               input type='submit' value='Inserir'/></td>
                    </table>
                </form></fieldset>
        </section> 
    </body>
</html>