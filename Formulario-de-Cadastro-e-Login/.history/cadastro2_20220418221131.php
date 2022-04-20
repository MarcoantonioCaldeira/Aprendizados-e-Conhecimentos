<?php

  error_reporting(0);
  $nome = $_POST['nome'];
  $sobrenome = $_POST['sobrenome'];
  $email = $_POST['email'];
  $senha = MD5($_POST['senha']);
  $connect = mysql_connect('localhost','root','');
  $db = mysql_select_db('cadastro');
  $query_select = "SELECT nome FROM usuarios WHERE nome = '$nome'";
  $select = mysql_query($query_select,$connect);
  $array = mysql_fetch_array($select);
  $logarray = $array['nome'];
  
  
  
    if($nome == "" || $nome == null){
      echo"<script language='javascript' type='text/javascript'>
      alert('O campo nome deve ser preenchido');window.location.href='
      cadastro.html';</script>";
  
      }else{
        if($logarray == $nome){
  
          echo"<script language='javascript' type='text/javascript'>
          alert('Esse cadastro já existe');window.location.href='
          cadastro.php';</script>";
          die();
  
        }else{
          $query = "INSERT INTO usuarios (nome, sobrenome, email, senha) VALUES ('$nome','$sobrenome', '$email', '$senha')";
          $insert = mysql_query($query,$connect);
  
          if($insert){
            echo"<script language='javascript' type='text/javascript'>
            alert('Usuário cadastrado com sucesso!');window.location.
            href='login.php'</script>";
          }else{
            echo"<script language='javascript' type='text/javascript'>
            alert('Não foi possível cadastrar esse usuário');window.location
            .href='cadastro.php'</script>";
          }
        }
      } 

?>