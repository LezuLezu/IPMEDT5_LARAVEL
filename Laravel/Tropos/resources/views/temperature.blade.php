<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/temperatuur.css">
    <title>Temperatuur</title>
</head>
<body>
<main>
<article class="temperatuurArticle" id="js--temperatuurArticle">
  <h1 class="temperatuurArticle_h1">Temperatuur: {{$temp}} °C</h1>
  <h2 class="temperatuurArticle_h2" id="js--temperatuurArticle_h2">Advies</h2>
  <p class="temperatuurArticle_p" id="js--p_advies">Hier komt het advies te staan.</p>
  <p class="temperatuurArticle_p" id="js--p_advies_2"></p>
  <p class="temperatuurArticle_p" id="js--p_advies_3"></p>
  <a href="/"><button class="temperatuurArticle_button">Meet opnieuw</button></a>
  <a href="/tempInfo"><button class="temperatuurArticle_button">Alle informatie</button></a>
</article>
</main>
<script>
console.log('help');
if({{$temp}} <= 17){
  document.getElementById("js--p_advies").innerHTML = "Koude lucht kan je klachten erger maken. Adem bij koud weer zoveel mogelijk door de neus om de lucht te verwarmen voordat deze wordt ingeademd. Zet zo mogelijk de verwarming wat hoger, de beste temperatuur voor binnenshuis is rond de 18 tot 20 graden.";

  document.getElementById("js--p_advies_2").innerHTML = "Zorg ervoor dat je zoveel mogelijk door je neus ademt. Vermijd vooral een open haard bij een koude temperatuur, de openhaard veroorzaakt soms ook irritatie aan de longen door de houtrook. Je kan het beste een elektrische verwarming of gaswarmte gebruiken.";

  document.getElementById("js--temperatuurArticle_h2").innerHTML = "Advies: te koud";
  
  document.getElementById("js--temperatuurArticle").style.backgroundColor ="#3c59b6";
}

if({{$temp}} >= 18 && {{$temp}} <= 21){
  document.getElementById("js--p_advies").innerHTML = "Zorg voor een gelijkmatig verwarmde woning. Laat ook de dag- en nachttemperatuur in huis zo min mogelijk verschillen. Overdag 21 graden Celsius en ’s nachts 18 graden Celsius is een mooi gemiddelde. De temperatuur in de gehele woning dient 18 tot 21 graden te zijn.";

  document.getElementById("js--p_advies_2").innerHTML = "Gebruik binnenshuis liever geen kaarsen, en zeker geen geurkaarsen. Kaarsen zorgen ervoor dat de lucht die je inademt minder schoon is en hierdoor kunnen je klachten verergeren. ";
  
  document.getElementById("js--p_advies_3").innerHTML = "Neem zo nodig extra medicijnen. Hou je wel aan de voorgeschreven dosering.";
  
  document.getElementById("js--temperatuurArticle_h2").innerHTML = "Advies: goede temperatuur";
  document.getElementById("js--temperatuurArticle").style.backgroundColor ="#fff3e6";
}

if({{$temp}} >= 21){
  document.getElementById("js--p_advies").innerHTML = "Een te warme temperatuur kan bij astmapatiënten zorgen voor snellere kortademigheid. Zorg ervoor dat je genoeg drinkt, als je te weinig drinkt kan namelijk je luchtwegslijmvlies uitdrogen. Hierdoor kunnen de klachten toenemen.";

  document.getElementById("js--p_advies_2").innerHTML = "Wanneer het buiten niet erg warm is, kun je een raam open doen en de deur van de kamer open doen waardoor er een luchtstroom ontstaat. Je kan ook een koele handdoek in je nek leggen om af te koelen.";
  
  document.getElementById("js--p_advies_3").innerHTML = "Pas echter wel op met airconditioning, de airco kan uw klachten verergeren. Het is beter om een ventilator te gebruiken. Wil je toch liever airconditioning zorg er dan voor dat deze airco goed gereinigd word en stel het apparaat niet te hoog of te laag in.";
  
  document.getElementById("js--temperatuurArticle_h2").innerHTML = "Advies: te warm";
  document.getElementById("js--temperatuurArticle").style.backgroundColor ="#ffc95f";
}
</script>
</body>
</html>
