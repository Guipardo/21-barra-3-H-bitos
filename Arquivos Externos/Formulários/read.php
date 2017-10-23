<?php
    include "conecta_mysql.php";
    
    $resultado = mysqli_query($conexao, "SELECT * from dados") or die ("Não foi possivel executar a SQL: ".mysqli_error($conexao));
    if($resultado){
        while($row = mysqli_fetch_array($resultado)){
            echo $row["nome"]."-".$row["sobrenome"]."-".$row["email"]."<br/>";
        }
    }
    mysqli_close($conexao);
?>
