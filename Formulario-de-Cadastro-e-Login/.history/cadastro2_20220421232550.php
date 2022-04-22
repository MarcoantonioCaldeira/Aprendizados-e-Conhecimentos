<?php
  $dbHost = 'localhost';
  $dbUsername = 'root';
  $dbPassWorld = '';
  $dbName = 'cadastro';

  $conexao = new mysqli($dbHost, $dbUsername, $dbPassWorld, $dbName);
  
  if($conexao -> connect_errno)
  {
    echo "Usuario não cadastrado";
  }
  else
  {
    echo "Conexão efetuada com sucesso";
  } 
?>