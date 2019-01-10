<?php
   $vardas = trim($_POST['vardas']);
   $email = trim($_POST['email']);
   $message = trim($_POST['message']);


if(!empty($vardas) && !empty($email) && !empty($message) && isset($_POST['submit'])){
      if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $from = "$email";
         $to = "julius.simkus0@gmail.com";
         $subject = "Nauja žinutė";
         $autorius = 'Nuo ' . $vardas . ', ' . $email;
         $zinute = htmlspecialchars($message);
         mail($to, $subject, $autorius, $zinute, $from);
echo "<script>alert('Dekojame. Jusu zinute gauta. Netrukus susisieksime.');</script>";     
      }
}
include('db.php');