<!DOCTYPE html>
<?php
	include '../acesso/DAOUsuario.php';
    $dao = new DAOUsuario();
    $mensagem;
    session_start();
?>
    <html>

    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="../design2.css"/>
        <script language="javascript">
            function sucesso() {
                setTimeout("window.location='../canvas/painelCanvas.php'", 2000);
            }

            function falha() {
                setTimeout("window.location='../formLogin.php'", 2000);
            }
        </script>
    </head>

    <body>
        <?php
            $login = $_POST["login"];
            $senha = $_POST["senha"];

            $dao->setLoginUsuario($login);
            $dao->setSenhaUsuario($senha);
            
            $mensagem = $dao->logar();

            if($mensagem == 0){
                echo "<a>Dados Inválidos <br> Voce será redirecionado ao menu de login</a>";
                echo "<script language='javascript'>falha()</script>";
            } else {
                $_SESSION["login"]=$_POST["login"];
                $_SESSION["senha"]=$_POST["senha"];
                echo "<a> Carregando... </a>";
                echo "<script language='javascript'>sucesso()</script>";
            }
        ?>
    </body>

    </html>