<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="design.css" />
    <title> Criar Hábito </title>
</head>

<body>
    <?php 
        session_start();
            if(isset($_SESSION['login']) and isset($_SESSION['senha'])){
            echo "<section> <fieldset><h3>Novo Hábito</h3>
                <form action='novo.php' method='POST' accept-charset='UTF-8'>
                    Nome: <input type='text' name='nome'>
                    Categoria: <input type='text' name='categoria'>
                    <p> Dificuldade </p>
                    Fácil:<input type='radio' name='dificuldade' value='Facil' checked>
                    Médio:<input type='radio' name='dificuldade' value='Medio'>
                    Difícil:<input type='radio' name='dificuldade' value='Dificil'>
                    <input type='submit' value='Criar'>
                </form>
                <a href='../canvas/painelCanvas.php'> Voltar </a>
            </fieldset>
        </section>";
            }else {
                 header("Location: ../home.php");
            }
        ?>
</body>

</html>