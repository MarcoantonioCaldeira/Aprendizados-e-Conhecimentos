<?php
  $num = 8;
  $resultado = "";

  if($num<0){
    $resultado="Numero negativo";
  }else if($num>0){
    $resultado="Numero positivo";
  }else{
    $resultado="Numero igual a zero";
  }

  echo"$resultado";

?>