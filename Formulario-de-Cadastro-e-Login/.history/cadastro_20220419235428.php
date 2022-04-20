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
   </head>
   <body>
     <h1>Formulario de Cadastro</h1>

     <form methot="POST" action="cadastro2.php">
         <label>Nome:</label><input type="text" name="nome"><br>
         <label>Sobrenome:</label><input type="text" name="sobrenome"><br>
         <label>E-mail:</label><input type="text" name="email"><br>
         <label>Criar a Senha:</label><input type="password" name="senha"><br>
         <input type="submit" value="Cadastrar" id="cadastrar" name="submit">

     </form>
  
   </body>
</html>