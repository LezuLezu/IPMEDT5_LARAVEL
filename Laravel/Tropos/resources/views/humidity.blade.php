@extends("baseview")

@section('title')
Luchtvochtigheid
@endsection

@section('body')

    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script>
     //javaScript

        var timesClicked = 1;
        window.onload=function(){
        
            statusWaarde();
            laatsteWaarde();
            trim();

            //aangeven luchtvochtigheid (te) hoog/laag, met kleurverandering bericht en advies bij elke situatie

            function statusWaarde(){
                humWaarde = String({{$hum->luchtvochtigheid}})
                if(humWaarde >= 60){
                    document.getElementById('-js--statusWaarde').innerHTML="De luchtvochtigheid is te hoog!"
                    document.getElementById('-js--statusWaardeKleur').style.backgroundColor = "#DC4D41"
                    document.getElementById('-js--content').innerHTML="Neem medicatie zo snel mogelijk in! Zet ramen open, zet de afzuigkap aan en ventilatoren zodat je geen opgehoopte luchtvochtigheid houdt."
                } else 
                
                if(humWaarde >= 55 && humWaarde < 60){
                    document.getElementById('-js--statusWaarde').innerHTML="De luchtvochtigheid is hoog."
                    document.getElementById('-js--statusWaardeKleur').style.backgroundColor = "#FFC95F"
                    document.getElementById('-js--statusWaarde').style.color = "black"
                    document.getElementById('-js--content').innerHTML=" "
                } else 
                
                if(humWaarde >= 45 && humWaarde < 55){
                    document.getElementById('-js--statusWaarde').innerHTML="De luchtvochtigheid is goed"
                    document.getElementById('-js--statusWaardeKleur').style.backgroundColor = "#43B581"
                    document.getElementById('-js--content').innerHTML="Nergens om je druk over te maken!"
                } else 
                
                if(humWaarde >= 40 && humWaarde < 45){
                    document.getElementById('-js--statusWaarde').innerHTML="De luchtvochtigheid is laag"
                    document.getElementById('-js--statusWaardeKleur').style.backgroundColor = "#FFC95F"
                    document.getElementById('-js--statusWaarde').style.color = "black"
                    document.getElementById('-js--content').innerHTML="Neem wat thee, zet de badkamerdeur open of hang natte handdoeken in de kamers. Deze helpen met het snel weer vochtiger maken van de kamer."
                } else 
                
                if(humWaarde < 40){
                    document.getElementById('-js--statusWaarde').innerHTML="De luchtvochtigheid is te laag!"
                    document.getElementById('-js--statusWaardeKleur').style.backgroundColor = "#DC4D41"
                    document.getElementById('-js--content').innerHTML="Neem medicatie zo snel mogelijk in! Als het regent buiten, zet ramen open. Hang natte handdoeken op in het huis, zet een pan met water op het fornuis!"
                }
            }

            //weergave van laatst geregistreerde waarde door de sensor (deze wordt op het moment eens per minuut verzonden)

            function laatsteWaarde(){
                hum = String({{$hum->luchtvochtigheid}})
                document.getElementById('-js--laatsteWaarde').innerHTML="Luchtvochtigheid nu: " + hum + "%"
            }

            //weergave van gemiddelde luchtvochtigheid met een afronding van het getal zodat deze op een geheel getal uitkomt

            function trim(){
                avghum = Math.round({{$avghum}})
                document.getElementById('-js--gemiddelde').innerHTML="Gemiddelde: " + avghum + "%"
            }

            //weergave gehele tabel die opgeslagen is op de database. deze wordt aangevuld door de sensor, maar in het begin zijn er willekeurige getallen in geplaatst
            //geprobeerd een for-loop in te zetten zodat er niet zoveel datapoints aangegeven werd. Dit is niet mogelijk met de chart (CanvasJS)

            var chart = new CanvasJS.Chart("-js--chartContainer", {
                animationEnabled: true,
                theme: "light2",
                backgroundColor: "#eef2f6",
                title:{
                    text: "luchtvochtigheid in % afgelopen 12 uur"
                },
                data: [{
                    type: "line",
                    lineColor: "#3C59B6",
                    lineThickness: 4,
                    markerType: "none",
                    indexLabelFontSize: 12,
                    axisY:{
                        minimum: 0,
                        maximum: 100
                    },
                    dataPoints: [
                            {y: {{$sum[0]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[1]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[2]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[3]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[4]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[5]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[6]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[7]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[8]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[9]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[10]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[11]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[12]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[13]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[14]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[15]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[16]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[17]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[18]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[19]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[20]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[21]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[22]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[23]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[24]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[25]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[26]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[27]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[28]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[29]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[30]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[31]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[32]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[33]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[34]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[35]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[36]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[37]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[38]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[39]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[40]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[41]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[42]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[43]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[44]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[45]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[46]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[47]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[48]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[49]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[50]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[51]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[52]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[53]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[54]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[55]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[56]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[57]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[58]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[59]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[60]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[61]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[62]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[63]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[64]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[65]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[66]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[67]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[68]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[69]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[70]->luchtvochtigheid}}, label: " "},
                            {y: {{$sum[71]->luchtvochtigheid}}, label: " "}

                    ]
                }]
            });
            chart.render();

        }

        //weergave van tips wanneer er op de balk wordt geklikt van statusWaarde. hierdoor klapt er een collapsible uit die het advies weergeeft

        function openTips(){
            if(timesClicked == 1){
                document.getElementById("-js--tips").style.height = document.getElementById("-js--content").scrollHeight + 10 + "px"
                document.getElementById("-js--button").innerHTML = "-"
                timesClicked = 0
            } else {
                document.getElementById("-js--tips").style.height = "0px"
                document.getElementById("-js--button").innerHTML = "+"
                timesClicked = 1
            }
                 
        }
    </script>

    //navigatie gemaakt door Dishang, mogelijk nog in de Baseview worden geïmplementeerd
    //eigen pagina met gegevens, en een grafiek

    <header>
        <nav class="nav">
            <a class="nav__link nav__link__notHover nav__link--img" href="/home"><figure><img class="nav__link__img" src="/img/troposLogo.png" alt="logo van Tropos"></figure></a>
            <a class="nav__link" href="/home">Home</a>
            <a class="nav__link" href="/temperatuur">Temperatuur</a>
            <a class="nav__link nav__link__current" href="/humidity">Luchtvochtigheid</a>
            <a class="nav__link" href="/airpressure">Luchtdruk</a>
            <a class="nav__link" href="#">Stof</a>
            <a class="nav__link" href="/monoxide">Koolmonoxide</a>
        </nav>    
    </header>

    

    <main class="humidity">
        <section class="humidity__statusWaardeSection" id="-js--statusWaardeKleur" onclick="openTips()">
            <h2 id="-js--statusWaarde">{{$hum->luchtvochtigheid}}</h2>
            <div class="humidity__statusWaardeSection__button" id ="-js--button">
                <p>+</p>
            </div>
            <article class="humidity__statusWaardeSection__tips" id="-js--tips">
                <p id="-js--content">tips over wat te doen bij lage of hoge luchtvochtigheid</p>
            </article>
        </section>  
        <section class="humidity__section">
            <h2 id="-js--laatsteWaarde">{{$hum->luchtvochtigheid}}</h2>
        </section>
        <section class="humidity__section">
            <h2 id="-js--gemiddelde">{{$avghum}}</h2>
        </section>
        <section class="humidity__section">
            <div class="humidity__section__graph" id="-js--chartContainer"></div>
        </section> 
    </main>       

 @endsection