<?php

   define("DB_SERVER", "localhost");
   define("DB_USER", "asjoeu_julius");
   define("DB_PASSWORD", "Juliusphp1");
   define("DB_NAME", "asjoeu_lankytojai");

$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

if($mysqli->connect_error){
   echo "Atsiprašome, bet svetainė susidūrė su problema.\n";
   echo 'Klaida: ' . $mysqli->connect_error . '\n';
   exit();
}


if(isset($_POST['action'])){
     mysqli_query($mysqli, "INSERT INTO lankytojai (vardas, email, tekstas) 
     VALUES('$_POST[vardas]', '$_POST[email]', '$_POST[tekstas]')");

    $mysqli->close();  
    
}