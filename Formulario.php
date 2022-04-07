<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preencher Formulario</title>
</head>
<body  style="background-Color:purple">  

    

    <form action="Proc.php" method="Post" enctype="multipart/form-data">

        <div>
             <p>
            <label style="color:white"> Nome:</label>
            <input type= "text" id="nome" name="nome" color="White"/>
            <?php
                if(isset($_GET['erro']) && $_GET['erro'] == "nome")
                {
                    echo "<span style=\"color:red\"> Campo Obrigatório! </span>";
                }
            ?>
            </p>
            <!-- <span>*</span> -->

        </div>

        <div>

            <label style="color:white"> E-mail:</label>
            <input type= "text" id="email" name="email"/>
            <?php
                if(isset($_GET['erro']) && $_GET['erro'] == "email")
                {
                    echo "<span style=\"color:red\"> Por favor, coloque um endereço de e-mail </span>";
                }
            ?>

        </div>

        <div>
            <p>
            <label style="color:white"> Telefone:</label>
            <input type= "text" id="telefone" name="telefone"/>
            <?php
                if(isset($_GET['erro']) && $_GET['erro'] == "telefone")
                {
                    echo "<span style=\"color:red\"> Adicione um Número de Telefone, exemplo: 15 98765-4321 </span>";
                }
            ?>
            </P>
        </div>
        

        <div> 
            <p>
            <label style="color:white"> Sexo:</label>
            <input type="radio" id="sexo" checked name="sexo" value="F"/> Feminino
            <input type="radio" id="sexo" name="sexo" value="M"/> Masculino
            </p>
        </div>

        <div>
            <p>
            <label style="color:white"> Senha:</label>
            <input type="password" id="senha" name="senha"/>
            <?php
                if(isset($_GET['erro']) && $_GET['erro'] == "senha")
                {
                    echo "<span style=\"color:red\"> Senha, precisa conter no minímo 6 caracteres </span>";
                }
            ?>
            </p>
        </div>

        <div>
            <p>
            <label style="color:white"> Adicionar Arquivos: </label>
            <input type="file" id="arq" name="arq"/>
            <?php
                if(isset($_GET['erro']) && $_GET['erro'] == "arq")
                {
                    echo "<span style=\"color:red\"> Adicione um Arquivo </span>";
                }
            ?>
            </p>



        </div>
        <p>
        <input type="submit" value="cadastro"/>
        <p>
    </form>

</body>
</html>
