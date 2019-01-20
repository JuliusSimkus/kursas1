<?php


if(isset($_POST['action'])){
   $vardas = trim($_POST['vardas']);
   $email = trim($_POST['email']);
   $message = trim($_POST['tekstas']);    
    header('Location: http://localhost/php/projektas/index.php'); 



if(!empty($vardas) && !empty($email) && !empty($tekstas)){
      if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $from = "$email";
         $to = "julius.simkus0@gmail.com";
         $subject = "Nauja žinutė";
         $autorius = 'Nuo ' . $vardas . ', ' . $email;
         $message = htmlspecialchars($message);
         mail($to, $subject, $autorius, $zinute, $from);
         echo "<script>alert('Dėkojame, jūsų istorija įkelta.');</script>";     
      }
}
include('db.php');

}           