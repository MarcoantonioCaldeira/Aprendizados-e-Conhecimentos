<?php
  $dbHost = 'Localhost';
  $dbUsername = 'root';
  $dbPassWorld = '';
  $dbName = 'cadastro';

  $conexao = new mysqli($dbHost, $dbUsername, $dbPassWorld, $dbName);
  
?>

<?php
   $limpeza = opcache_reset();
  
   if($limpeza){
     echo 'Ok! O cache foi limpo com sucesso.';
   }else{
     echo 'Erro! A limpeza de cache esta desabilitada';
   }
?>