function schrijfGroet(naam) {
    console.log('dit is function schrijfNaam');
    document.getElementById("tekst").innerHTML = "Hallo " + naam;
}


function schrijfDiv(div1) {
    var voornaam = document.getElementById("vn").value;
    var achternaam = document.getElementById("an").value;
    var leeftijd = document.getElementById("lt").value;
    document.getElementById("div1").innerHTML = " Mijn volledige naam is " + voornaam  + achternaam  + " en ik ben " + leeftijd + " jaar oud ";
}
