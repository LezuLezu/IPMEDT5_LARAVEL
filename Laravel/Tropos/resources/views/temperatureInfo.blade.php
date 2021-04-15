<link rel="stylesheet" href="/css/temperatuur.css">
@extends("baseview")

@section('title')
Temperatuur informatie
@endsection

@section('body')
<header>
<!-- Navigatie -->
    <nav class="nav">
        <a class="nav__link nav__link__notHover nav__link--img" href="/home"><figure><img class="nav__link__img" src="/img/troposLogo.png" alt="logo van Tropos"></figure></a>
        <a class="nav__link" href="/home">Home</a>
        <a class="nav__link nav__link__current" href="/temperatuur">Temperatuur</a>
        <a class="nav__link" href="#">Luchtvochtigheid</a>
        <a class="nav__link" href="/airpressure">Luchtdruk</a>
        <a class="nav__link" href="/dust">Stof</a>
        <a class="nav__link" href="/monoxide">Koolmonoxide</a>
    </nav>  
</header>
<main class="temperatuur_main">
<!-- Header -->
<h1 class="temperatuurArticle_h1 temperatuurArticle_h1_info">Hier staan alle adviezen voor de temperatuur in huis.</h1>
<!-- Article met advies voor een goede temperatuur-->
<article class="temperatuurArticle_info">
  <h2 class="temperatuurArticle_h2">Algemeen advies bij een goede temperatuur</h2>
  <!-- Informatie en adviezen voor een goede temperatuur -->
  <p class="temperatuurArticle_p_goed">Zorg voor een gelijkmatig verwarmde woning. Laat ook de dag- en nachttemperatuur in huis zo min mogelijk verschillen. Overdag 21 graden Celsius en ’s nachts 18 graden Celsius is een mooi gemiddelde. De temperatuur in de gehele woning dient 18 tot 21 graden te zijn.
    Gebruik binnenshuis liever geen kaarsen, en zeker geen geurkaarsen. Kaarsen zorgen ervoor dat de lucht die je inademt minder schoon is en hierdoor kunnen je klachten verergeren. 
    Neem zo nodig extra medicijnen. Hou je wel aan de voorgeschreven dosering.</p>
    <a href="/temperatuur" class="temperatuurArticle_button temperatuurArticle_button_info">Temperatuur meten</a>
</article>
<!-- Article met advies voor warme tempertuur -->
<article class="temperatuurArticle_info temperatuurArticle_warm">
  <h2 class="temperatuurArticle_h2">Advies voor een warme temperatuur in huis.</h2>
  <!-- Informatie en adviezen voor een warme temperatuur -->
  <p class="temperatuurArticle_p">Een te warme temperatuur kan bij astmapatiënten zorgen voor snellere kortademigheid. Zorg ervoor dat je genoeg drinkt, als je te weinig drinkt kan namelijk je luchtwegslijmvlies uitdrogen. Hierdoor kunnen de klachten toenemen. 
    Wanneer het buiten niet erg warm is, kun je een raam open doen en de deur van de kamer open doen waardoor er een luchtstroom ontstaat. Echter wanneer het buiten ook warm is kan je beter je raam en deur gesloten houden. Je kan ook een koele handdoek in je nek leggen om af te koelen.
    Pas echter wel op met airconditioning, de airco kan uw klachten verergeren. Het is beter om een ventilator te gebruiken. Wil je toch liever airconditioning zorg er dan voor dat deze airco goed gereinigd word en stel het apparaat niet te hoog of te laag in. 
    </p>
</article>
<!-- Article met advies voor koude tempertuur -->
<article class="temperatuurArticle_info temperatuurArticle_koud">
  <h2 class="temperatuurArticle_h2">Advies voor een koude temperatuur in huis.</h2>
  <!-- Informatie en adviezen voor een koude temperatuur -->
  <p class="temperatuurArticle_p">Koude lucht kan je klachten erger maken. Adem bij koud weer zoveel mogelijk door de neus om de lucht te verwarmen voordat deze wordt ingeademd. Zet zo mogelijk de verwarming wat hoger, de beste temperatuur voor binnenshuis is rond de 18 tot 20 graden.
    Zorg ervoor dat je zoveel mogelijk door je neus ademt. Vermijd vooral een open haard bij een koude temperatuur, de openhaard veroorzaakt soms ook irritatie aan de longen door de houtrook. Je kan het beste een elektrische verwarming of gaswarmte gebruiken.
    </p>
</article>
</main>
@endsection
