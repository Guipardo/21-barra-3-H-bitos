<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href='../estiloForm.css' />
    <title> Criar Hábito </title>
</head>

<body>
    <?php 
        session_start();
            if(isset($_SESSION['login']) and isset($_SESSION['senha'])){
            echo "<section> <fieldset><h3 class='titulo'>Novo Hábito</h3>
                <form action='novo.php' method='POST' accept-charset='UTF-8'>
                    <a>Nome:</a><input type='text'class='caixaTexto' name='nome'><br>
                    <br>
                    <a>Categoria:</a><input type='text' class='caixaTexto' name='categoria'><br>
                    <br>
                    <a> Dificuldade </a><br>
                    <a>Fácil:</a><input type='radio' name='dificuldade' value='Facil' checked><br>
                    <a>Médio:</a><input type='radio' name='dificuldade' value='Medio'><br>
                    <a>Difícil:</a><input type='radio' name='dificuldade' value='Dificil'><br><br>
                    <input type='submit' value='Criar'>
                </form>
                <br>
                <a href='../canvas/painelCanvas.php'> Voltar </a>
            </fieldset>
        </section>";
            }else {
                 header("Location: ../home.php");
            }
        ?>
</body>

</html>