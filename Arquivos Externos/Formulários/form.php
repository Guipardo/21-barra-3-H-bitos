<!DOCTYPE html>
<html>
    <head>
        <title>CRUD</title>
        <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="design.css"/>
    </head>
    <body>
        <fieldset id="caixa">
        <form action="crud.php" method="post" id = "caixa2">
            <input type="radio" name="tipoCRUD" value="C" checked/>Create<br/>
            <input type="radio" name="tipoCRUD" value="R"/>Read<br/>
            <input type="radio" name="tipoCRUD" value="U"/>Update<br/>
            <input type="radio" name="tipoCRUD" value="D"/>Delete<br/>
            <input type="submit" name="enviar" value="START" id = "botao"/>
        </form>
            </fieldset>
    </body>
</html>