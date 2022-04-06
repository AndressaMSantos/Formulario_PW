<?php

    //Variáveis Globais

    $nome = $_GET['nome'];
    $sexo = $_GET['sexo'];
    $senha = $_GET['senha'];
    $email = $_GET['email'];
    $telefone = $_GET['telefone'];
    $arq = $_GET['arq'];

    // $nome = $_POST['nome'];
    // $sexo = $_POST['sexo'];
    // $senha = $_POST['senha'];
    // $email = $_POST['email'];
    // $telefone = $_POST['telefone'];

    //Imprimir Variáveis
    echo "<p><strong> Nome: " . $nome . "</strong></p>";
    echo "<p><strong> E-mail: " . $email . "</strong></p>";
    echo "<p><strong> Telefone: " . $telefone . "</strong></p>";
    echo "<p><strong> Sexo: " . $sexo . "</strong></p>";
    echo "<p><strong> Senha: " . $senha . "</strong></p>";
    echo "<p><strong> Arquivo: " . $arq . "</strong></p>";
    
    

        // echo strlen($nome); // Mostra na tela a quantidade de caracter
        // echo "<br>";
        // echo empty($nome); //Usando (int) antes do empty, ele mostra o valor do bolean número 0 na tela
        // echo "<br>";

    if( strlen($nome)==0 )
    {
        //echo " Campo Obrigatório!!! ";
        header("location:Formulario.php?erro=nome");
    }
    if( strlen($senha)<= 6 )
    {
        //echo " Coloque uma senha de 6 caracteres ";
        header("location:Formulario.php?erro=senha");
    }
    if( strlen($email)== 0 )
    {
        //echo " Por favor, coloque um endereço de e-mail ";
        header("location:Formulario.php?erro=email");
    }
    if( strlen($telefone)== 0 )
    {
        //echo " Adicione um Número de Telefone, exemplo: 15 98765-4321";
        header("location:Formulario.php?erro=telefone");
    }
    if( strlen($arq)==0 )
    {
        //echo " Adicione um Número de Telefone, exemplo: 15 98765-4321";
        header("location:Formulario.php?erro=arq");
    }


    //Upload - Servidor

    //var_dump($_FILES['arq']);
    // echo "<p> Nome do arquivo: " . $_FILES["arq"]["name"] . "</p>";
    // echo "<p> Tipo do arquivo: " . $_FILES["arq"]["type"] . "</p>";
    // echo "<p> Erro do arquivo: " . $_FILES["arq"]["error"] . "</p>";
    // echo "<p> Diretorio Temporario: " . $_FILES["arq"]["tmp_name"] . "</p>";
    // echo "<p> Tamanho do arquivo: " . $_FILES["arq"]["size"] . "</p>"; 

    //Mover da pasta Temporaria, para a pasta do Servidor
    $tmp = $_FILES['arq']['tmp_name'];
    $pasta = "arq" . $_FILES['arq']['name'];
    move_uploaded_file($tmp , $pasta);
    echo (int) move_uploaded_file($tmp , $pasta);
?>