<script language="javascript">
    function deslogar() {
        setTimeout("window.location='../home.php'", 3000);
    }
</script>
<?php
	session_start();
    session_destroy();
    echo "<a>Carregando...</a>";
    echo "<html><head><link rel='stylesheet' type='text/css' href='../design2.css'/>
    </head><body><script language='javascript'>deslogar()</script></body></html>";
?>