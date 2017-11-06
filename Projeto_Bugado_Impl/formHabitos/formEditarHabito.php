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
        <link rel="stylesheet" type="text/css" href='../estiloForm.css'/>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
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
                        echo "<fieldset><h3 class='titulo'> Habito ".($i+1)."</h3>
                        <form action='editar.php' method='POST'>
                            <input type='hidden' name='nomeAntigo' value='$nome'>
                            <a>Nome:</a><input type='text' name='nome' value='$nome'><br><br>
                            <a>Categoria:</a><input type='text' name='categoria' value='$categoria'><br><br>
                            <input type='submit' value='Atualizar'>
                        </form>
                        </fieldset><br>";
                        }
                    echo "<a href='../canvas/painelCanvas.php'> Voltar </a>";
                    } else {
                    header("Location: ../home.php");
                }
                
            ?>
        </section>
    </body>

    </html>