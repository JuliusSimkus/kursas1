<?php

class Person{
   public $name;
   public $surName;   
   
   public function labas(){
      return 'Sveiki, aš esu ' . $this -> name . '. Mano pavardė ' . $this -> surName . '. <br>';
   }
   
}
 
$Tomas = new Person();
$Rokas = new Person();

$Tomas -> name = "Tomas";
$Rokas -> name = "Rokas";

$Rokas -> surName = "Rokauskas";
$Tomas -> surName = "Tomauskas";

echo $Tomas -> labas();
echo $Rokas -> labas();   
   
   
   
?>