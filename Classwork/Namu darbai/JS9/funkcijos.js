
function lentele(viesbuciai) {       
   
           for (i = 0;i < viesbuciai.length; i ++){
               document.write ("<table border=1>");
               document.write ("<h2>" + viesbuciai[i].name + "</h2>");
               document.write ("<h3>" + viesbuciai[i].Address + "</h3>");
               document.write ("<tr>");
               document.write("<td>" + "Kambario numeris" + "</td><td>" + "Žmonių skaičius" + "</td><td>" + "Kaina" + "</td>");
               document.write ("</tr>");
              
              for(j = 0; j < viesbuciai[i].Rooms.length; j++){
                 
                  document.write ("<tr>");
                  document.write("<td>" +viesbuciai[i].Rooms[j].Number + "</td><td>" + viesbuciai[i].Rooms[j].GuestCount + "</td><td>" + viesbuciai[i].Rooms[j].Price + "</td>");
                  document.write ("</tr>"); 
                  
               }
              
            }   
            document.write ("</table>")

         }

   
