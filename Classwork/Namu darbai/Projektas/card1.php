
      <link type="text/css" rel="stylesheet" href="Materialize/css/materialize.min.css"  media="screen,projection"/>
<?php
$link = mysqli_connect("localhost", "root", "", "lankytojai");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$sql = "SELECT * FROM lankytojai";


if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<ul class='tabs tabs-fixed-width'>";
        while($row = mysqli_fetch_array($result)){

                echo "<li class='tab'><a href='#test$row[id]'>" . $row['vardas'] . "</a></li>";
        }
        echo "</ul>";


        
        
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

 
// Close connection
mysqli_close($link);
?>