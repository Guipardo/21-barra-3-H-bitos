<?php
    include '../phpComCanvas.php';
    include '../usuario/validacoes.php';
    session_start();
    $login = $_SESSION["login"];
    $dao = carregarHabitosPeloLogin($login);
    $quantHabitos = count($dao->getListaHabitos());
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' type='text/css' href='design.css' />
        <title> Atualizar Hábito </title>
    </head>

    <body>
        <section>
            <?php 
                if(isset($_SESSION['login'])){
                   $dao2 = new DAOHabito();
                    for ($i = 0; $i < $quantHabitos; $i++) {
                    $dao2 = lerhabitoPeloIndice($dao,$i);
                    $nome = $dao2->getNomeHabito();
                    $categoria = $dao2->getCategoriaHabito();
                    echo "<fieldset><h3>Habito ".($i+1)."</h3>
                    <form action='editar.php' method='POST'>
                        <input type='hidden' name='nomeAntigo' value='$nome'>
                        Nome: <input type='text' name='nome' value='$nome'>
                        Categoria: <input type='text' name='categoria' value='$categoria'>
                        <input type='submit' value='Atualizar'>
                    </form>
                    </fieldset><br>";
                    } 
                } else {
                    header("Location: ../home.php");
                }
            ?>

        </section>
        <a href='../canvas/painelCanvas.php'> Voltar </a>
    </body>

    </html>