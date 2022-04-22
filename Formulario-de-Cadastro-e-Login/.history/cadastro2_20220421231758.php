<?php
  $dbHost = 'localhost';
  $dbUsername = 'root';
  $dbPassWorld = '';
  $dbName = 'cadastro5';

  $conexao = new mysqli($dbHost, $dbUsername, $dbPassWorld, $dbName);
  
  if($conexao == null || $conexao == ""){

    echo "Usuario não cadastrado";

  }else{

    echo"<script language='javascript' type='text/javascript'>
    alert('Usuário cadastrado com sucesso!');window.location.
    href='index.php'</script>";

  } 
?>