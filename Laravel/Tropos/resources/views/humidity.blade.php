<link rel="stylesheet" href="/css/humidity.css">
@extends("baseview")

@section('title')
Luchtvochtigheid
@endsection

@section('body')
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script>
        //javaScript
        window.onload=function(){

            laatsteWaarde();
            trim();

            function laatsteWaarde(){
                hum = String({{$hum->luchtvochtigheid}})
                document.getElementById('-js--laatsteWaarde').innerHTML="Luchtvochtigheid nu: " + hum + "%"
            }

            function trim(){
                avghum = Math.round({{$avghum}})
                document.getElementById('-js--gemiddelde').innerHTML="Gemiddelde: " + avghum + "%"
            }

            var chart = new CanvasJS.Chart("chartContainer", {
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
    </script>

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

    <div class="container">
        <div class="container__section">
            <ul class="container__section__list">
                <li class="container__section__list__hum">
                    <h2 id="-js--laatsteWaarde">{{$hum->luchtvochtigheid}}</h2>
                </li>
                <li class="container__section__list__avg">
                    <h2 id="-js--gemiddelde">{{$avghum}}</h2>
                </li>
                <li class="container__section__list__graph">
                    <div class="container__section__list__graph__chart" id="chartContainer"></div>
                </li>
            </ul>
        </div>
    </div>
 @endsection