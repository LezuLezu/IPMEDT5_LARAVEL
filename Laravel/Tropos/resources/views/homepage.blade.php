@extends("baseview")

@section('monoxideCSS')
<link rel="stylesheet" href="/css/home.css">
@endsection

@section('title')
Home
@endsection

@section('body')

@include('nav')

<h1 class="homeHeader">Home</h1>
<p class="homeInfo">Welkom bij het systeem Tropos. Hier op de pagina staan alle vijf de subsystemen.
   Klik op het systeem waar je de waarde van wil meten en informatie over wil lezen.</p>
<main class="monoxideMainInfo">                     <!--class name from monoxide because they have the same css code -->
    <section class="homepageCard" onclick=temperaturePage()>
        <h2 class="monoxideMain__h2">Temperatuur</h2>               <!--class name from monoxide because they have the same css code -->
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
        <p class="monoxideMain__explanation">Een te hoog of een te laag luchtdruk kan invloed hebben op je welzijn. 
        Het verschil in luchtdruk tussen ruimtes kan ook invloed hebben op je welzijn. 
        Zo kan het zijn als het verschil in luchtdruk tussen ruimtes of tussen binnen en buiten hoofdpijn kan veroorzaken.
        Of een te lage luchtdruk kan er voor zorgen dat je lastiger kan ademen.
        Het gemiddelde luchtdruk in een kamer is 1024 pHa en in de avond kan dat oplopen tot 1035 pHa.</p>
        <ul class="monoxideMain__explanation monoxideMain__explanation--ul">
        </ul>
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
        <h2 class="monoxideMain__h2">Koolmonoxide</h2>          <!--class name from monoxide because they have the same css code -->
        <p class="monoxideMain__explanation">Koolmonoxide (CO) is een gas die ontstaat bij een onvolledige verbranding.
        Het is een levensgevaarlijk, giftig, brandbaar en explosief gas. Wat het zo gevaarlijk maakt is dat het niet te ruiken,
        proeven of zien is. Het wordt daarom ook wel de stille sluipmoordenaar genoemd.
        Neem daarom voorzorgsmaatregelen om het risico op koolmonoxidevergiftiging te verkleinen.</p>       <!--class name from monoxide because they have the same css code -->
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