
<html>
    <head>
        <meta charset="UTF-8">
        <title> Página Inicial </title>
    </head>
    <body>
        <?php
        ?>
        <h1> Cadastro </h1>
        <form action="validarCadastro.php" method="post">
            Nome: <input type="text" name="nome"><br>
            Login: <input type="text" name="login"><br>
            E-mail: <input type="text" name="email"><br>
            Senha: <input type="password" name="senha"><br>
            <input type="submit" value="Cadastrar">
        </form>
        
        <h1> Login </h1>
        <form action="validarLogin.php" method="post">
            Login: <input type="text" name="nome"><br>
            Senha: <input type="password" name="senha"><br>
            <input type="submit" value="Cadastrar">
        </form>
    </body>
</html>
