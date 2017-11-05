<script language="javascript">
    function deslogar() {
        setTimeout("window.location='../home.php'", 3000);
    }
</script>
<?php
	session_start();
    session_destroy();
    echo "<a>Carregando</a>";
    echo "<script language='javascript'>deslogar()</script>";
?>