<?php
   $cities = ['Berlynas', 'Roma', 'Londonas'];
   $cities[] = 'Tokijas';

   $cities2 = [
      'Tokijas' => 13.6 ,
      'Vašingtonas' => 0.6 ,
      'Maskva' => 11.5
   ];


   $cities2['Londonas'] = 8.6;
   ?>


<!DOCTYPE html>
<html lang="">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title></title>
</head>

<body>
   
   <?php print_r($cities) ; ?>
   
   <ul>
      <li><?php echo $cities[1]; ?></li>
   </ul>
   
   <?php print_r($cities2);
     
   ?>
   
   <ul>
      <li><?php echo 'Gyventojų skaičius: ' . $cities2["Tokijas"] . ' .mln.'; ?></li>
   
   </ul>
   
</body>
</html>
