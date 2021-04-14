@extends("baseview")

@section('title')
Home
@endsection

@section('body')
<header>
    <nav class="nav">
        <a class="nav__link nav__link__notHover nav__link--img" href="/home"><figure><img class="nav__link__img" src="/img/troposLogo.png" alt="logo van Tropos"></figure></a>
        <a class="nav__link nav__link__current" href="/home">Home</a>
        <a class="nav__link" href="/temperatuur">Temperatuur</a>
        <a class="nav__link" href="#">Luchtvochtigheid</a>
        <a class="nav__link" href="/airpressure">Luchtdruk</a>
        <a class="nav__link" href="/dust">Stof</a>
        <a class="nav__link" href="/monoxide">Koolmonoxide</a>
    </nav>  
</header>
<h1 class="homeHeader">Home</h1>
<p class="homeInfo">Welkom bij het systeem Tropos. Hier op de pagina staan alle vijf de subsystemen.
   Klik op het systeem waar je de waarde van wil meten en informatie over wil lezen.</p>
<main class="monoxideMainInfo">
    <section class="homepageCard" onclick=temperaturePage()>
        <h2 class="monoxideMain__h2">Temperatuur</h2>
        <p class="monoxideMain__explanation">De temperatuur in huis kan een grote invloed hebben op asthma. Zo kan een warme temperatuur ervoor zorgen dat je sneller kortademig bent en een koude temperatuur kan ervoor zorgen dat je klachten erger worden.</p>
    </section>

    <section class="homepageCard" onclick=humidityPage()>
        <h2 class="monoxideMain__h2">Luchtvochtigheid</h2>
        <!-- <p class="monoxideMain__explanation">Voorkomen dat er koolmonoxide vrijkomt is natuurlijk het beste wat je kunt doen.
            Hierbij helpen de volgende dingen:</p>
        <ul class="monoxideMain__explanation monoxideMain__explanation--ul">
            <li>Ventileer je huis permanent, zorg altijd voor frisse lucht.</li>
            <li>Meer dan de helft van de vergiftigingen veroorzaakt worden door (moderne en/of nieuwe) cv-ketels.
                Laat deze dus elk jaar controleren door een erkend bedrijf.</li>
            <li>Als je een geiser hebt, laat die ook jaarlijks controleren door een erkend bedrijf.
                Check regelmatig zelf of de vlam in de geiser blauw is.</li>
            <li>Wil je een gasketel verplaatsen of vervangen? Schakel dan een erkende installateur in,
                hoe eenvoudig zo’n klusje ook lijkt.</li>
            <li>Hang koolstofmonoxide melders op.</li>
        </ul> -->
    </section>

    <section class="homepageCard" onclick=airPressurePage()>
        <h2 class="monoxideMain__h2">Luchtdruk</h2>
        <!-- <p class="monoxideMain__explanation">Koolmonoxide is onzichtbaar.
            Maar er zijn een paar dingen die je waarschuwen voor de aanwezigheid van koolmonoxide:</p>
        <ul class="monoxideMain__explanation monoxideMain__explanation--ul">
            <li>Lichamelijke klachten zoals hoofdpijn, misselijkheid, sufheid, duizeligheid, vermoeidheid, bewusteloosheid, 
                een versnelde hartslag en braken. De klachten nemen langzaam af zodra je naar buiten gaat.</li>
            <li>Ramen beslaan door het vrijgekomen vocht.</li>
            <li>Gasvlammen gaan oranje of gelig branden in plaats van blauw. Ze branden ook hoger dan normaal en flakkeren meer.</li>
        </ul> -->
    </section>


    <section class="homepageCard" onclick=dustPage()>
        <h2 class="monoxideMain__h2">Stof</h2>
        <!-- <p class="monoxideMain__explanation">Als je denkt dat er koomonoxide binnen is doe dan de volgende dingen:</p>
        <ul class="monoxideMain__explanation monoxideMain__explanation--ul">
            <li>Zet ramen en deuren wijd open. Er moet zo snel mogelijk frisse lucht binnenkomen.</li>
            <li>Waarschuw of help mensen die ook in het gebouw zijn.</li>
            <li>Denk aan je (eigen) veiligheid. Ga niet zomaar een ruimte binnen waarin je giftige stoffen in de lucht vermoedt.
                Blijf in zo’n geval buiten staan en bel 1-1-2.</li>
        </ul> -->
    </section>

    <section class="homepageCard" onclick=monoxidePage()>
        <h2 class="monoxideMain__h2">Koolmonoxide</h2>
        <p class="monoxideMain__explanation">Koolstofmonoxide (CO) is een gas die ontstaat bij een onvolledige verbranding.
        Het is een levensgevaarlijk, giftig, brandbaar en explosief gas. Wat het zo gevaarlijk maakt is dat het niet te ruiken,
        proeven of zien is. Het wordt daarom ook wel de stille sluipmoordenaar genoemd.
        Neem daarom voorzorgsmaatregelen om het risico op koolmonoxidevergiftiging te verkleinen.</p>
    </section>
</main>

<script>
    function temperaturePage() {
        location.href="/temperatuur"; 
    }

    function humidityPage() {
        location.href=""; 
    }

    function airPressurePage() {
        location.href="/airpressure"; 
    }

    function dustPage() {
        location.href="/dust"; 
    }

    function monoxidePage() {
        location.href="/monoxide"; 
    } 
</script>

@endsection