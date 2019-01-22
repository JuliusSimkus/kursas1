
      <link type="text/css" rel="stylesheet" href="https://astajo.eu/projektas/materialize/css/materialize.min.css"  media="screen,projection"/>
<?php
$link = mysqli_connect("localhost", "asjoeu_julius", "Juliusphp1", "asjoeu_lankytojai");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$sql = "SELECT * FROM lankytojai";


if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<div class='card-content grey lighten-4'>";
        while($row = mysqli_fetch_array($result)){

                echo "<div id='test$row[id]'>" . $row['tekstas'] . "</div>";
        }
        echo "</div>";


        
        
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