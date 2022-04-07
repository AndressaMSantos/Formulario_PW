<?php

    //Variáveis Globais

   echo  $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $arq = $_FILES['arq'];

   

    // S
    

        if( strlen($nome) == 0 )
    {
      
        header("location:Formulario.php?erro=nome");
        return;
    }


    if( strlen($email)== 0 )
    {
        
        header("location:Formulario.php?erro=email");
        return;
    }
    
    
    if( strlen($telefone)== 0 )
    {
        
        header("location:Formulario.php?erro=telefone");
        return;
    }
    
    
    if( strlen($senha)<= 6 )
    {
        
        header("location:Formulario.php?erro=senha");
        return;
    }
    
    
    // if( strlen($arq)==0 )
    // {
      
    //     header("location:Formulario.php?erro=arq");
    // }


    $tmp = $_FILES['arq']['tmp_name'];
    $pasta = "arq/" . $_FILES['arq']['name'];
    move_uploaded_file($tmp , $pasta);
    echo (int) move_uploaded_file($tmp , $pasta);
?>
