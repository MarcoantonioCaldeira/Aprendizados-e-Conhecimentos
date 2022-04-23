<?php
  $dbHost = 'localhost';
  $dbUsername = 'root';
  $dbPassWorld = '';
  $dbName = 'cadastro';

  $conexao = new mysqli($dbHost, $dbUsername, $dbPassWorld, $dbName);


  if(isset($_POST['submit']))
  {

  

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,sobrenome,email,senha) 
    VALUES('$nome','$sobrenome','$email','$senha')"); 
  }

  if($conexao-> connect_errno){
    echo"Erro";
  }else{
    echo"<script language='javascript' type='text/javascript'>
    alert('Usuário cadastrado com sucesso!');window.location.
    href='login.php'</script>";
  }
  
?>
