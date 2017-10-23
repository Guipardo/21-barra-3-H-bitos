<!DOCTYPE html>
<html>
    
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="design.css"/>
        <title> Projeto Bugado </title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        
    </head>
    
    <body>
        
        <header>
        <a href="home.php"><img id="logo" src="Imagens/logoTipo.jpg" alt="Projeto Bugado"></a>
        
        <nav id="menuSuperior">
            <ul>
                <li><a href="lucie.php"> Entrar </a></li>
                <li><a href="sobreosite.html"> Sobre o Site </a></li>
                <li><a href="suporte.html"> Suporte </a></li>
                
            </ul>
        </nav>
        </header>
        
        <br>
        
        <section>
            <img id="img" src="Imagens/cuphead.jpg" alt="Japão">
        </section>
        
        <br>
        
        
        
       
            </fieldset>
        </article>

        <br>
            
        <footer><a href="#" id="subir"><img id="topo" src="Imagens/arrowTop.png" alt="Topo"></a></footer>
            
        <script type="text/javascript">
            $(document).ready(function() {
            $('#subir').click(function(){ 
            $('html, body').animate({scrollTop:0}, 'slow');
                return false;
            });
            });
        </script>
        
    <br>
        
    <hr id="linhaFoot">
    
            
    </body>
    
</html>