<?php
  if(isset($_POST['submit']))
  {

    include_once('cadastro2.php');

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,sobrenome,email,senha) 
    VALUES('$nome','$sobrenome','$email','$senha')"); 
  }
?>

<!DOCTYPE html>
<html>
   <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http="X-UA-Compatible" content="IE-edge">
   <link rel="stylesheet" href="css/cadastro_css.css">
   </head>
   <body>
     <h1 class="titulo_cadastro">Formulario de Cadastro</h1>

     <form  method="POST" action="cadastro.php">

          <div>
            <input type="text" name="nome" placeholder="Nome" required><br>
          </div>

          <div>
            <input type="text" name="sobrenome" placeholder="Sobrenome" required><br>
          </div>
          
          <div>
            <input type="text" name="email"  placeholder="email" required><br>
          </div>

          <div>
            <input type="password" name="senha" placeholder="senha" required><br>
          <div>
         <input type="submit" id="submit" name="submit">

     </form>
  
   </body>
</html>