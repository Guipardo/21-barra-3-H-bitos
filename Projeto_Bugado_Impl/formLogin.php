<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="design.css" />
    <title> Entrar/Registar </title>
</head>

<body id="bodyEntrar">
    <section>
        <fieldset id="campoEntrar">
            <a href="home.php"><img id="logoEntrar" src="Imagens/logoTipo.jpg" alt="Viajapa"></a>
            <p id="tituloEntrar"> Ainda não é cadastrado no site? Então, faça isso agora mesmo! </p>

            <!-- Validação de Login (link)
                        validarLogin
                    -->
            <form id="tabelaForm" name="login" action="usuario/logar.php" method="POST">
                <table>
                    <tr>
                        <td>Login:</td>
                        <td><input type="text" name="login"></td>
                    </tr>
                    <tr>
                        <td>Senha:</td>
                        <td><input type="password" name="senha" minlength="8" required/> Mínimo (8 caracteres) </p>
                        </td>
                    </tr>

                    <!-- Formulário de Cadastro -->
                    <tr>
                        <td><a href="formCadastro.php" id="cadastro">Registrar-se</a></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input id="botao" type="submit" value="Logar" /></td>
                    </tr>
                </table>
            </form>
            <a href='home.php'> Voltar </a>
        </fieldset>
    </section>
</body>

</html>