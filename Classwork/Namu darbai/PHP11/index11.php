   <?php

      if(isset($_POST['mygtukas'])){
           if($_POST['ilgis'] && $_POST['plotis']){
            echo $_POST['ilgis'] * $_POST['plotis'];       
            die();
         }       
      }

 

   ?>


<!DOCTYPE html>
<html lang="">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title></title>
</head>

<body>
   
   
      <form action="<?php $_PHP_SELF; ?>" method="POST">
      Ilgis: <input type="text" name="ilgis" />
      Plotis: <input type="text" name="plotis" />
      <input type="submit" value="Send" name="mygtukas">
   
   </form>
  
   

   
</body>
</html>
