<?php
  $dbHost = 'Localhost';
  $dbUsername = 'root';
  $dbPassWorld = '';
  $dbName = 'cadastro';

  $conexao = new mysqli($dbHost, $dbUsername, $dbPassWorld, $dbName);
  
  if($conexao->connect_errno){
    echo "Erro";
  }else{
    echo "Usuario cadastrado com sucesso";
  }
?>