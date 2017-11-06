<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="design2.css"/>
        <title> Projeto Bugado </title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    </head>

    <body>

    	<!-- Menu Superior (links)
			Página de Login
			Sobre o site
			Suporte
    	-->
        <header>
            <a href="home.php"><img id="logo" src="Imagens/newLogo.png" alt="logo"></a>
            <nav id="menuSuperior">
                <ul>
                    <li><a href="formLogin.php"> Já tenho uma conta </a></li>
                    <li><a href="formCadastro.php"> Cadastrar-se </a></li>
                </ul>
            </nav>
        </header>

        <br>

    	<!-- Imagem Principal -->
<article>  
        <section>
            <img id="img" src="Imagens/newcuphead.jpg" alt="CupHead">
        </section>
        <br>
</article>

<br>

<!-- Seta de Subir Página -->
<footer><a href="#" id="subir"><img id="topo" src="Imagens/arrowTop.png" alt="Topo"></a></footer>


<!-- Subir a página -->
<script type="text/javascript">
    $(document).ready(function () {
        $('#subir').click(function () {
            $('html, body').animate({scrollTop: 0}, 'slow');
            return false;
        });
    });
</script>
<br>
<hr id="linhaFoot">
</body>
</html>