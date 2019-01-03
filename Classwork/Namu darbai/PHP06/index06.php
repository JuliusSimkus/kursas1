<?php 

   $cities3 = [
      'Tokijas' => [13.6, 1868, 'Japonija'],
      'Vašingtonas' => [0.6, 1790, 'JAV'],
      'Maskva' => [11.5, 1147, 'Rusija']
   ];
   $cities3['Londonas'] = [8.6, 43, 'Anglija'];
   

?>

<?php $metai = 1774 ; ?>

<?php

   if ($metai >= $cities3['Vašingtonas'][1]){
         echo 'Vašingtonas yra JAV sostinė.' ;
   }
      elseif ($metai == 1774){
         echo 'JAV sostinė vis dar Filadelfijoje.' ;
      }
      else {
         echo 'Liko ' . ($cities3['Vašingtonas'][1] - $metai) .'metai (-ų) iki Vašingtono įkūrimo.' ;
      }
?>
