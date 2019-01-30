<?php 

   require __DIR__ . '/src/db.php';  
    $result = mysqli_query($mysqli,"SELECT word FROM guess order by RAND() limit 1");
?> 
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    
    
    <style>
        #header{
            background-color:cornsilk;
            padding-top: 5px;
            text-align: center;
        }
        
        .menu{
            background-color: aliceblue;
            box-shadow: 13px 13px 14px -10px rgba(0,0,0,0.75);
            width: 320px;
            border-radius: 15px;
            margin-left: 10px;
            display: block;
            height: 50px;
            line-height: 50px;
            vertical-align: middle;
        }

        

        
        ul {
            list-style-type: none;
            font-family:"Helvetica Neue", Helvetica, Sans-serif;
        }
        
        #h1{
            margin-top: 5px;
            font-family:"Helvetica Neue", Helvetica, Sans-serif;
        }
        #guessDescriptionText{
            background-color: aliceblue;
            float: right;
            margin-right: 10px;
            display:none;
            width: 500px;
            box-shadow: -19px 18px 14px -14px rgba(0,0,0,0.75);
            border-radius: 15px;
            margin-top: -105px;
            font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
        }
        #whisperDescriptionText{
            background-color:aliceblue;
            float: right;
            margin-right: 10px;
            display:none;
            width: 500px;
            box-shadow: -19px 18px 14px -14px rgba(0,0,0,0.75);
            border-radius: 15px;
            margin-top: -105px;
            font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
        }
        .paraDescription{
            margin-left: 10px;
        }
        a:link {
          text-decoration: none;
        }
        
        #gameGuess{
            margin-top: 200px;
            width:100%;
            height: 150px;
            display: none;
        }
        
        #demo{
           font-size: 20px;
            padding-top: -250px;
            font-size: 55px;
            margin-right: 150px;
        }
        
        #time{
            float: right;
            height: 150px;
            line-height: 150px;
            position:relative;
        }
        
        #stop{
            position: absolute;
            right:    0;
            bottom:   0;
        }
        
        #start{
            position: absolute;
            right:    0;
            bottom:   0;
            margin-right: 55px;
        }      
        
        #word{
            height: 150px;
            float: left;
            width: 650px;
        }
        
        .words{
            font-size: 65px;
            margin-left: 355px;
            display: none;            
        }
    
    </style>
</head>

<body>
    
    <header id="header">
        
        <div ><h1 id="h1">Žaidimai skirti poroms</h1>
        </div>
    
    </header>

        <div class="menu">
            <ul>
                <li style="font-size:20px"><a href="#word" id="guessLink">Atspėk žodį</a>&nbsp;&nbsp;<button id="btnGuess">Žaidimo aprašymas</button></li>    
            </ul>
        </div>
         <div class="menu">
            <ul>
                <li style="font-size:20px"><a href="">Šnabždesys</a>&nbsp;&nbsp;<button id="btnWhisper">Žaidimo aprašymas</button></li>     
            </ul>
        </div>   

    
    
    <div id="guessDescriptionText">    
        <p class="paraDescription">Guess the word and challenge your word knowledge!</p>
    </div>
    
    <div id="whisperDescriptionText">    
        <p class="paraDescription">Once everyone has their music playing, one person who was previously picked out will whisper a phrase to the person next to them, and they have to lip-read. It then gets passed along the line if there are any other people playing the game. Have one person turn to the person next to them and whisper a phrase to them.</p>
    </div>
    
    
    <div id="gameGuess">
          
        <div id="time">
            
            
            <button id="start" onClick="myTimer = setInterval(myCounter, 1000)" name="start" method="post">Start</button>
            <p id="demo"></p>
            <button id="stop" onClick="clearInterval(myTimer)">Stop</button>
        </div>
        
        <div id="word">
        <!--reikia perrasyti i funkcijas abu paspaudimus, start ir next mygtukus. if isset start. su click funkcija daryti scripte ir integruojant php. Dabar start tiesiog atidengia. O reikia kad onclick start fetchintu random word-->

                                            <form method="post"><button type="submit" id="next" name="next">Next word</button></form>
            
            
            
            
            
            <?php
                                                if($row = mysqli_fetch_array($result)){
                                                    $randomWord = array_rand(array_flip($row), 1);
                                                    echo '<p class="words">' . $randomWord . '</p>';
                                                } elseif (isset($_POST["next"]) && isset($randomWord)){
                                                        echo '<p class="words">' . $randomWord . '</p>';
                                                }
            

                 

            ?>
                                                
        </div>
        
    </div>
   
    

    
    
    
    
    
    
    
    
    
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
         
            $(document).ready(function(){
              $("#btnGuess").click(function(){
                $("#guessDescriptionText").toggle();
              });
            }); 
      
          $(document).ready(function(){
              $("#btnWhisper").click(function(){
                $("#whisperDescriptionText").toggle();
              });
            }); 
      
          $(document).ready(function(){
              $("#guessLink").click(function(){
                $("#gameGuess").toggle();
              });
            });    
      
            $(document).ready(function(){
              $("#start").click(function(){
                $(".words").toggle();
              });
            });  
      
            
      
          function myStopFunction() {
                clearInterval(myTimer);
          }   

      
            var c = 0;
            function myCounter() {
              document.getElementById("demo").innerHTML = ++c;
            }

 
    
    
    
    
    
 </script>  
</body>
</html>
