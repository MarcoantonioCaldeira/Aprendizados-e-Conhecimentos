<?php
  $dbHost = 'Localhost';
  $dbUsername = 'root';
  $dbPassWorld = '';
  $dbName = 'cadastro';

  $conexao = new mysqli($dbHost, $dbUsername, $dbPassWorld, $dbName);
  
  $limpeza = opcache_reset();
  
  if($limpeza){
    echo "limpeza feita com sucesso";
  }else{
    echo "Erro na limpeza";
  }
?>