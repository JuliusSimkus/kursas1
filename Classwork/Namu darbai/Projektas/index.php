
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="Materialize/css/materialize.min.css"  media="screen,projection"/>
       <title>Kelionių blogas</title>
        <style>
        
          body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
          }

          main {
            flex: 1 0 auto;
          }
        
            .bigview{
                min-height: 100vh;
            }    
            
            .logo{
                width: 55px;
               padding-top: 8px;
               padding-left: 7px;
            }
           .box{
              height: 250px;
           }
           #skaiciuokle{
/*              border: 1px solid black;*/
              height: 430px;
              width: 400px;
              box-shadow: 13px 10px 26px -9px rgba(0,0,0,0.75);
              
           }
           #skaiciuoti{
              margin-left: 5px;
              margin-top: -5px;

           }
         
           #card{
               width: 430px;
               padding-bottom: 45px;
               padding-top: 5px;
               float: right;
               box-shadow: 13px 10px 26px -9px rgba(0,0,0,0.75);
               border-radius: 10px;
           }
           
           #slideris{
              margin-top: 70px;

           }
           

            

        </style>
       <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        
              <nav class="blue lighten-1">
                 <div class="nav-wrapper">
                   <a class="brand-logo"><img src="Images/logo.png" class="logo"></a>
                   <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                   <ul class="right hide-on-med-and-down">
                     <li><a href="index.html" class="black-text text-lighten-3"><b>Kelionės</b></a></li>
                     <li><a href="#advice">Patarimai</a></li>
                     <li><a href="#about">Apie</a></li>
                   </ul>
                 </div>            
             </nav>
             <ul class="sidenav" id="mobile-demo">
               <li><a href="index.html">Kelionės</a></li>
               <li><a href="#advice">Patarimai</a></li>
               <li><a href="#about">Apie</a></li>
            </ul>  

    
    <main>
        
            <div class="parallax-container bigview">
                <div class="parallax"><img id="imageback" src="Images/back.jpg"></div>
               
                  <div class="slider" id="slideris">
                      <ul class="slides">
                        <li>
                          <img src="Images/brazil.jpg"> 
                          <div class="caption center-align">
                            <h3>Brazilija</h3>
                            <h5 class="light grey-text text-lighten-3">Pietų Amerika</h5>
                          </div>
                        </li>
                        <li>
                          <img src="Images/Fuerte.jpg"> 
                          <div class="caption left-align">
                            <h3>Fuerteventura (Kanarų salos)</h3>
                            <h5 class="light grey-text text-lighten-3">Ispanijos salynas vakarų Afrikoje</h5>
                          </div>
                        </li>
                        <li>
                          <img src="Images/norway.jpg"> 
                          <div class="caption right-align">
                            <h3>Norvegija</h3>
                            <h5 class="light grey-text text-lighten-3">Europa</h5>
                          </div>
                        </li>
                        <li>
                          <img src="Images/rome.jpg">
                          <div class="caption center-align">
                            <h3>Roma</h3>
                            <h5 class="light grey-text text-lighten-3">Italija</h5>
                          </div>
                        </li>
                      </ul>
                    </div>               
               
 

                 
                 

            </div>
        
          <div class="section white bigview" id="advice">
            <div class="row container">
                  <h2 class="header">Patarimai</h2>

          
               <div id="skaiciuokle" class="col s12 m6 l4">
                  <h4>Skaičiuoklė</h4>
                  <p>Čia galite suskaičiuoti pagal šalį, laikotarpį ir žmonių kiekį, kiek jums rekomenduoju pasiimti dienpinigių.</p>
                       <div class="input-field col s12">
                         <select id="counter1">
                           <option value="" disabled selected>Choose your option</option>
                           <option value="50">Brazilija</option>
                           <option value="70">Norvegija</option>
                           <option value="35">Kanarų salos (Fuerteventura)</option>
                           <option value="65">Italija (Roma)</option>
                         </select>
                         <label>Šalis</label>
                       </div>

                    <div class="input-field col s12">
                      <select id="counter2">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="3">3 dienos</option>
                        <option value="7">1 savaitė</option>
                        <option value="14">2 savaitės</option>
                      </select>
                      <label>Laikotarpis</label>
                   </div>

                    <div class="input-field col s12">
                      <select id="counter3">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="1">1 žmogus</option>
                        <option value="2">2 žmonės</option>
                        <option value="3">3 žmonės</option>
                      </select>
                      <label>Žmonių kiekis</label>
                    </div>


                    <span class="badge"></span>


                  <a id="skaiciuoti" class="waves-effect waves-light btn">Skaičiuoti</a>
             
            </div>
               
               
               
               
              <div class="col s12 m6 l4 card" id="card">
                   <div class="card-content">
                     <p>Čia galite rasti lankytojų istorijas ir patarimus</p>
                   </div>
                   <div class="cards-tabs">
                     <ul class="tabs tabs-fixed-width">
                       <li class="tab"><a href="#test4" >Rokas</a></li>
                       <li class="tab"><a href="#test5" >Tomas</a></li>
                       <li class="tab"><a href="#test6" >Agnė</a></li>                     
                     </ul>
                   </div>
                   <div class="card-content grey lighten-4">
                     <div id="test4">Roberto tekstas      </div>
                     <div id="test5">Roberto tekstas</div>
                     <div id="test6">Agnės tekstas</div>                  
                   </div>
               </div>                
                            
        
         </div> 
      </div>
        
       <div class="parallax-container">
         <div class="parallax"><img src="Images/back.jpg"></div>
       </div>
    
        
       <div class="section white bigview" id="about">
         <div class="row container">
           <h2 class="header">Apie</h2>
             <p class="grey-text text-darken-3 lighten-3">Tai yra kelionių blogas su trumpais aprašymais apie šalis, kurias aplankiau. Taip pat yra pridėta skaičiuoklė, skirta greitai ir apytiksliai apskaičiuoti dienpinigius kelionėms.</p>
           <h3>Pasidalink savo istorija</h3>

             <div class="row">
               <form class="col s12" action="<?php $_PHP_SELF; ?>" method="POST">

                 <div class="row">
                   <div class="input-field col s12 m6 l4">
                     <input id="first_name" type="text" class="validate" name="vardas">
                     <label for="first_name">Vardas</label>
                   </div>
                   <div class="input-field col s12 m6 l4">
                     <input id="last_name" type="text" class="validate" name="pavarde">
                     <label for="last_name">Pavardė</label>
                   </div>

                   <div class="input-field col s12 m6 l4">
                     <input id="email" type="email" class="validate" name="email">
                     <label for="email">El. paštas</label>
                   </div>
                 </div>

                 <div class="row">
                   <div class="input-field col s12">
                     <textarea id="textarea1" class="materialize-textarea" name="tekstas"></textarea>
                     <label for="textarea1">Jūsų tekstas</label>
                   </div>
                 </div>

                     <button class="btn waves-effect waves-light pulse" type="submit" name="action" id="submit">Submit
                       <i class="material-icons right">send</i>
                   </button>

               </form>
           </div>
         </div>
       </div>        
     
       <div id="modal"></div>
        
       
    </main>    
        
          
         <footer class="page-footer  blue lighten-1">
                <div class="container">
                  <div class="row">
                    <div class="col l6 s12">
                      <h5 class="white-text">Kelionių blogo partneriai</h5>
                      <p class="grey-text text-lighten-4">Dėkojame šiems partneriams, be kurių nebūtų kelionių ir šio blogo.</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                      <h5 class="white-text">Partneriai</h5>
                      <ul>
                        <li><a class="grey-text text-lighten-3" href="https://www.novaturas.lt/">Novaturas</a></li>
                        <li><a class="grey-text text-lighten-3" href="https://www.tez-tour.com/lt/vilnius/">Tez Tour</a></li>
                        <li><a class="grey-text text-lighten-3" href="https://www.tui.lt/">TUI</a></li>
                        <li><a class="grey-text text-lighten-3" href="https://www.itaka.lt/">Itaka</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="footer-copyright">
                  <div class="container">
                  © 2019 Kelionių blogas

                  </div>
                </div>
        </footer>
        
        
        
        
        
     <script type="text/javascript" src="Materialize/js/jquery-3.3.1.js"></script> 
     <script src="funkcijos.js"></script>
     <script type="text/javascript" src="Materialize/js/materialize.min.js"></script>
       
        <script>
           
          $(document).ready(function(){
            $('.sidenav').sidenav();
          });
        
          $(document).ready(function(){
            $('.parallax').parallax();
          });    
            
           
         $('a[href="#advice"]').click(function(event){
            $('html, body').animate({scrollTop: $("#advice").offset().top}, 'slow');
         });           
           
         $('a[href="#about"]').click(function(event){
            $('html, body').animate({scrollTop: $("#about").offset().top}, 'slow');
         });

         $(document).ready(function(){
             $('.carousel').carousel();
           });


         $("#skaiciuoti").click(function() {
            skaiciuoti();
         })

        $(document).ready(function(){
            $('select').formSelect();
         });
           
           
        $(document).ready(function(){
          $('.slider').slider();
        });   
           
         $(document).ready(function(){
          $('.tabs').tabs();
        });
           

           
        </script>
    </body>
  </html>