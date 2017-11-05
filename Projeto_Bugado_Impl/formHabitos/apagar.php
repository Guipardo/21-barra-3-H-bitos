<!DOCTYPE html>
<?php
    include '../acesso/DAOHabito.php';
    include '../usuario/validacoes.php';
    $dao = new DAOHabito();
    $mensagem = 1;
    session_start();
    $login = $_SESSION["login"];
?>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <title>Novo Hábito</title>
        <script language="javascript">
            function sucesso() {
                setTimeout("window.location='../canvas/painelCanvas.php'", 3000);
            }
        </script>
    </head>

    <body>
        <?php
            $nome = $_POST["nome"];
            $dao->setNomeHabito($nome);
            $dao->setCodUsuario($login);
            $mensagem = $dao->apagar();
              
            if($mensagem > 0){
                echo "<a> Hábito removido com sucesso </a>";
                echo "<script language='javascript'>sucesso()</script>";
            } else {
                echo "<br><a> Erro ao apagar </a> <a href='../canvas/painelCanvas.php'> Voltar </a>";
            }
        ?>
    </body>

    </html>