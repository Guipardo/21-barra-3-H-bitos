<?php
    include "conecta_mysql.php";
    
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST ['email'];
    $senha = $_POST['senha']
    
    $resultado = mysqli_query($conexao, "Update dados SET nome='".$nome."', sobrenome=".$sobrenome.", email=".$email." WHERE nome=".$nome) or die ("Não foi possível executar a SQL: ".mysqli_error($conexao));
    
    if($resultado === TRUE){
    echo "<br/>Usuário atualizado com Sucesso! ";
    } else {
        echo "<br/>Erro na atualização! ";
    }
    
    mysqli_close($conexao);
    ?>
        