
      function lentele(viesbuciai){
         document.write ("<h1>" + "Viešbučiai su laisvais kambariais" + "</h1>");
         document.write ("<h2>" + [viesbuciai[0].name] + "</h2>");
         document.write ("<h3>" + [viesbuciai[0].Address] + "</h3>");
         document.write ("<table border=1>");
         document.write ("<tr>");
         document.write("<td>" + "Kambario numeris" + "</td><td>" + "Žmonių skaičius" + "</td><td>" + "Kaina" + "</td>");
         document.write ("</tr>");                            
         document.write ("<tr>");
         document.write("<td>" +[viesbuciai[0].Rooms[0].Number] + "</td><td>" + [viesbuciai[0].Rooms[0].GuestCount] + "</td><td>" + [viesbuciai[0].Rooms[0].Price] + "</td>");
         document.write ("</tr>");                         
         document.write ("<tr>");
         document.write("<td>" + [viesbuciai[0].Rooms[1].Number] + "</td><td>" + [viesbuciai[0].Rooms[1].GuestCount] + "</td><td>" + [viesbuciai[0].Rooms[1].Price] + "</td>");
         document.write ("</tr>");          
         document.write ("<tr>");
         document.write("<td>" + [viesbuciai[0].Rooms[2].Number] + "</td><td>" + [viesbuciai[0].Rooms[2].GuestCount] + "</td><td>" + [viesbuciai[0].Rooms[2].Price] + "</td>");
         document.write ("</tr>");              
         document.write ("</table>") 
         
         document.write ("<h2>" + [viesbuciai[1].name] + "</h2>");
         document.write ("<h3>" + [viesbuciai[1].Address] + "</h3>");
         document.write ("<table border=1>");
         document.write ("<tr>");
         document.write("<td>" + "Kambario numeris" + "</td><td>" + "Žmonių skaičius" + "</td><td>" + "Kaina" + "</td>");
         document.write ("</tr>");                            
         document.write ("<tr>");
         document.write("<td>" + [viesbuciai[1].Rooms[0].Number] + "</td><td>" + [viesbuciai[1].Rooms[0].GuestCount] + "</td><td>" + [viesbuciai[1].Rooms[0].Price] + "</td>");
         document.write ("</tr>");                         
         document.write ("<tr>");
         document.write("<td>" + [viesbuciai[1].Rooms[1].Number] + "</td><td>" + [viesbuciai[1].Rooms[1].GuestCount] + "</td><td>" + [viesbuciai[1].Rooms[1].Price] + "</td>");
         document.write ("</tr>");          
         document.write ("<tr>");
         document.write("<td>" + [viesbuciai[1].Rooms[2].Number] + "</td><td>" + [viesbuciai[1].Rooms[2].GuestCount] + "</td><td>" + [viesbuciai[1].Rooms[2].Price] + "</td>");
         document.write ("</tr>");   
          document.write ("<tr>");
         document.write("<td>" + [viesbuciai[1].Rooms[3].Number] + "</td><td>" + [viesbuciai[1].Rooms[3].GuestCount] + "</td><td>" + [viesbuciai[1].Rooms[3].Price] + "</td>");
         document.write ("</tr>");           
         document.write ("</table>") 
         
      }