@extends("baseview")

@section('title')
Monoxide
@endsection

@section('body')
<section>
    <h1>monoxide: {{$carbon_monoxide}} ppm</h1>
    <a href='{{"/buzzer"}}'> Buzzer aan/uit</a>
</section>

<section class="information">
    <h2 class="information__h2">Wat is koolmonoxide?</h2>
    <p>Koolstofmonoxide (CO) is een gas die ontstaat bij een onvolledige verbranding.
       Het is een levensgevaarlijke gas. Wat het zo gevaarlijk maakt is dat het niet te ruiken, proeven of zien is.
       Het wordt daarom ook wel de stille sluipmoordenaar genoemd.</p>
</section>

<section class="information">
    <h2 class="information__h2">Oorzaken koolmonoxidevergiftiging</h2>
    <ul>
        <li>Een verkeerd geïnstalleerd of kapot gastoestel: kachel, geiser, cv of combiketel.</li>
        <li>Verkeerde installatie van kachels en open haarden en een slechte afvoer als gevolg van 
            lekken in afvoerbuizen of aansluitingen en gebrekkig onderhoud van de afvoerkanalen.</li>
        <li>Verkeerde stookgewoonten, bijvoorbeeld door kachels en open haarden te gebruiken als allesbranders.</li>
        <li>Het verbranden van gas, olie of hout in een afgesloten ruimte.</li>
    </ul>
</section>

<section class="information">
    <h2 class="information__h2">Koolmonoxide voorkomen</h2>
    <p>tekst</p>
</section>

