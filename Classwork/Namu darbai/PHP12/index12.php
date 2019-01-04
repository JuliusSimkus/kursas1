   <?php

      if(isset ($_POST['mygtukas'], $_POST['vardas'], $_POST['pavarde'])){
            if($_POST['vardas'] && $_POST['pavarde']){
            echo $_POST['vardas'] . " " . $_POST['pavarde'];       
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
      Vardas: <input type="text" name="vardas" />
      Pavardė: <input type="text" name="pavarde" />
      <input type="submit" value="Send" name="mygtukas">
   
   </form>
  
   

   
</body>
</html>
