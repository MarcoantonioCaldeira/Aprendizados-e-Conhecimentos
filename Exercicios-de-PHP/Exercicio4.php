<!doctype html>
<html>
<head>
<meta charset="utf-8">  
<head> 
<body> 
  <h1>Tipos de dados/h1>

  <?php
   function Myfunction(){
     static $n1 = 0;
     echo $n1;
     $n1++;
   }
   Myfunction();
   Myfunction();
   Myfunction();
  ?>

</body>
</html>

