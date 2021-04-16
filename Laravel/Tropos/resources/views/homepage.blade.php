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
        <p class="monoxideMain__explanation">De luchtvochtigheid kan veel effect hebben op de kwaliteit van lucht.
            Bij astma kan dit een benauwd gevoel geven. Als de luchtvochtigheid boven de 60% of onder de 40% komt, kan het zelfs schadelijk zijn.
            Klik op de banner om naar de Luchtvochtigheidpagina te gaan voor de laatste waarden en advies!
        </p>
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
        <p class="monoxideMain__explanation">
            Stof bestaat uit verschillende materialen, voornamelijk organische zoals huidschilfers, 
            dierenharen en voedselresten maar ook uit fijnstof, bacteriën en toxines. 
            Hierdoor heeft een hoge hoeveelheid stof invloed op je gezondheid.  
            Wanneer je je in een stoffige ruimte bevindt of daar langere tijden doorbrengt kan 
            dit voor astmapatiënten ervoor zorgen dat zij moeite krijgen met ademen. <br>
            Het stof niveau wordt continue om de 30 seconden gemeten om je te helpen dat er niet te veel stof aanwezig is.  
        </p>       
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
        location.href="/humidity"; 
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