<?php
    include "conecta_mysql.php";
    
    $senha = $_POST['senha'];
    
    $resultado = mysqli_query($conexao, "DELETE FROM dados WHERE senha=".$senha) or die ("Não foi possível executar a SQL: ".mysqli_error($conexao));
    
    if ($resultado === TRUE){
    echo "<br/>Usuário removido com Sucesso! ";
    } else {
        echo "<br/>Erro na remoção! ";
    }
    
    mysqli_close($conexao);
    ?>