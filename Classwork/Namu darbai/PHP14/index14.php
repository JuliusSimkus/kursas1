
<!DOCTYPE html>
<html lang="">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title></title>
</head>

<body>
   
 <?php
  


   $date_str = '2010';

   $formatted_date = date('2015', strtotime($date_str)) ;  

      if ($formatted_date >= 2019){
           echo '&copy ' . date("Y"); 
      } else{
           echo '&copy ' . $formatted_date . "-" . date("Y");
      }

?>

   
</body>
</html>

