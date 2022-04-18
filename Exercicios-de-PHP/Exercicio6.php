<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">  
<head> 
<body> 
  <h1>Tipos de dados/h1>

  <?php
    $time = date("H");
    
    if($time < 20){
      echo "Tenha um bom dia";
    }else{
      echo "Tenha uma boa noite";
    }
  ?>

</body>
</html>