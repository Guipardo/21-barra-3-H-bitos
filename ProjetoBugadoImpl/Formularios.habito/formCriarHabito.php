<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="design.css"/>
        <title> Criar Hábito </title>  
    </head>

    <body id="bodyEntrar">  
        <section>
            <fieldset><h3>Criar Hábito</h3>
                <form action="criarHabito.php" method="POST">
                    Nome: <input type="text" name="nome">
                    Categoria: <input type="text" name="categoria">
                    <p> Dificuldade </p>
                    Fácil:<input type="radio" name="dificuldade" value="Fácil">
                    Médio:<input type="radio" name="dificuldade" value="Médio">
                    Difícil:<input type="radio" name="dificuldade" value="Difícil">
                    <input type="button" value="Criar">
                </form>
        </section> 
    </body>
</html>