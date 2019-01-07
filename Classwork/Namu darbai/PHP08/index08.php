<?php
   $temp = [4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21];


echo "<br>";


   $averageTemp = array_sum($temp) / count($temp); 
   echo "Vidutinė temperatūra yra: " . $averageTemp;

echo "<br>";
   

   echo "Suapvalinta vidutinė temperatūra yra: " . round($averageTemp);
  
   
echo "<br>";
   

   rsort($temp);
  

echo "Penkios šilčiausios temp:";   
                               
   $siluma = array_slice($temp,0,5);
   foreach ($siluma as $siltasSkaicius){
   echo $siltasSkaicius . " " ;
   }
     

echo "<br>";
   
echo "Penkios šalčiausios temp:";


   $saltis = array_slice($temp,-5,5);
   foreach ($saltis as $saltasSkaicius){
   echo $saltasSkaicius . " " ;   
   }
?>
   
