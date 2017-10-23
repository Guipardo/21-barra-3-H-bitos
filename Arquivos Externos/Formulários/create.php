<?php
    include "conecta_mysql.php";
    
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $resultado = mysqli_query($conexao, "INSERT INTO dados(nome, sobrenome, email, senha) VALUES ('".$nome."',".$sobrenome.",".$email.",".$senha.")") or die("Não foi possivel executar a SQL: ".mysqli_error($conexao))
    
    if($resultado === TRUE){
        echo "<br/>Usuário inserido com sucesso!";
    } else {
        echo "<br/>Erro na inserção!";
    }
    mysqli_close($conexao);
    ?>