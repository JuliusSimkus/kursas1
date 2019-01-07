
<!DOCTYPE html>
<html lang="">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title></title>
</head>

<body>
   
 <?php
  

/*   echo '&copy ' . date('Y'); 
   echo '<br>';*/


   $formatted_date = date('2019') ;  /*tinklalapio sukūrimo metai*/

      if ($formatted_date >= date('Y')){
           echo '&copy ' . $formatted_date; 
      } else{
           echo '&copy ' . $formatted_date . "-" . date("Y");
      }

?>

   
</body>
</html>

