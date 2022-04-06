<!DOCTYPE html>
  <html>

      <body>

        <?php
        echo "Escopo de variaveis</br>";
        echo "Global</br>";

          $x = 60; //global scope
          $y = 30;
          $s = $x + $y; //global scope
          function Soma(){
   
          }
          Soma();
          
          echo "A soma eh igual a $s";
        
        ?>

      </body>
  </html>