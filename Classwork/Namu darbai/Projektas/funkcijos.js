function skaiciuoti(){
   $( ".badge" ).empty();
   var x = $("#counter1").val();
   var y = $("#counter2").val();
   var z = $("#counter3").val();
   var atsakymas = x*y*z;
   $(".badge").append('<b>' + "Jums reikės " + atsakymas + " Eur" + '</b>');
}

