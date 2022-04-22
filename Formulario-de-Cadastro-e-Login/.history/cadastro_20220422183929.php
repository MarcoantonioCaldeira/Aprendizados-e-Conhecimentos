<?php

  if(isset($_POST['submit']))
  {

    //print_r("Nome: ".$_POST['nome']);
    //print_r("Sobrenome: ".$_POST['sobrenome']);
    // print_r("E-mail: ".$_POST['email']);
    //print_r("Senha: ".$_POST['senha']);

    include_once('cadastro2.php');

    $id = $_POST['ID'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(id,nome,sobrenome,email,senha) 
    VALUES('$ID','$nome','$sobrenome','$email','$senha')"); 
  }
?>

<!DOCTYPE html>
<html>
   <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http="X-UA-Compatible" content="IE-edge">
   </head>
   <body>
     <h1>Formulario de Cadastro</h1>

     <form  method="POST" action="cadastro2.php">

          <div>
            <label>Nome:</label>
            <input type="text" name="nome" required><br>
          </div>

          <div>
            <label>Sobrenome:</label>
            <input type="text" name="sobrenome" required><br>
          </div>
          
          <div>
            <label>E-mail:</label>
            <input type="text" name="email" required><br>
          </div>

          <div>
            <label>Criar a Senha:</label>
            <input type="password" name="senha" required><br>
          <div>
         <input type="submit" id="submit" name="submit">

     </form>
  
   </body>
</html>