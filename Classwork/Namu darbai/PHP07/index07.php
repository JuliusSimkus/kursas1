<?php
      $cities4 = ['Tokijas', 'Vašingtonas', 'Maskva', 'Londonas'];
  ?> 

<!DOCTYPE html>
<html lang="">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title></title>
</head>

<body>
   
   <ul>
         
         <?php for ($i = 0; $i <count($cities4); $i++) : ?>
                  <li> <?php echo $cities4[$i] ; ?></li>
           <?php endfor ?>         
         
   </ul>
   
   <ul>
      
      <?php foreach ($cities4 as $city) : ?>
         <li><?php echo $city ; ?></li> 
      <?php endforeach ; ?>
   
   
   
   </ul>
   
   
   
</body>
</html>
