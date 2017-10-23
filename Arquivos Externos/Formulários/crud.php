<?php
    $opcao = $_POST['tipoCRUD'];
    switch($opcao)
    {
        case "C":
            $formulario = "<fieldset  ><h3>Criar</h3>
                <form action='create.php' method='POST' >
                Nome: <input type='text' name='nome'/><br/>
                Sobrenome: <input type='text' name='sobrenome'/><br/>
                E-mail: <input type='text' name='email'/><br/>
                Senha: <input type='text' name='senha'/><br/>
                <input type='submit' value='Inserir'/>
            </form></fieldset>";
        break;
        
        case "R":
            $formulario = "<fieldset ><h3>Buscar</h3>
                <form action='read.php' method='POST'>
                    <input type='submit' value='Buscar'/>
                </fieldset></form>";
        break;
        
        case "U":
            $formulario = "<fieldset><h3>Atualizar</h3>
                <form action='update.php' method='POST'>
               Nome: <input type='text' name='nome'/><br/>
               Sobrenome: <input type='text' name='sobrenome'/><br/>
                E-mail: <input type='text' name='email'/><br/>
                Senha: <input type='text' name='senha'/><br/>
                <input type='submit' value='Atualizar'/>
            </fieldset></form>";
        break;
        
        case "D":
            $formulario = "<fieldset><h3>Apagar</h3>
                <form action='delete.php' method='POST'>
                Senha: <input type='text' name='senha'/><br/>
                <input type='submit' value='Remover'/>
           </fieldset> </form>";
        break;
    }
    echo $formulario;
?>