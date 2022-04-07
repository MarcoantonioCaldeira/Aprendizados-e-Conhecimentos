<!DOCTYPE html>
<html> 
<body> 
  <h1>Constantes</h1>
      
  <?php
    
    define("NOME", "Essa função define </br>maiusculas de minusculas");
    echo NOME;
 
  ?>
 <hr>
  <h1>Matrizes de constantes</h1>

  <?php

    define("carro", [
      "Alfa Romeo</br>",
      "BMW</br>",
      "Toyota</br>"
      ]);
    echo carro[0];
    echo carro[1];  
    echo carro[2];

  ?> 

</body>
</html>