<link rel="stylesheet" href="/css/humidity.css">
@extends("baseview")

@section('title')
Luchtvochtigheid
@endsection

@section('body')

    <script>
        //javaScript
        window.onload=function(){

            laatsteWaarde();
            trim();

            function laatsteWaarde(){
                hum = String({{$hum->luchtvochtigheid}})
                document.getElementById('-js--laatsteWaarde').innerHTML="Op dit moment is het " + hum + "%"
            }

            function trim(){
                avghum = String({{$avghum}})
                document.getElementById('-js--gemiddelde').innerHTML="Gemiddelde: " + avghum + "%"
            }
        }
    </script>

    <header>
        <nav class="nav">
            <a class="nav_link navlinknotHover navlink--img" href="/home"><figure><img class="navlink_img" src="/img/troposLogo.png" alt="logo van Tropos"></figure></a>
            <a class="nav__link" href="/home">Home</a>
            <a class="nav__link" href="/temperatuur">Temperatuur</a>
            <a class="nav__link navlink_current" href="/humidity">Luchtvochtigheid</a>
            <a class="nav__link" href="/airpressure">Luchtdruk</a>
            <a class="nav__link" href="#">Stof</a>
            <a class="nav__link" href="/monoxide">Koolmonoxide</a>
        </nav>  
    </header>

    <div class="container">
        <ul class="container__list">
            <li class="container__list__top">
                <h1>Luchtvochtigheid</h1>
            </li>
            <li class="container__list__hum">
                <h2 id="-js--laatsteWaarde">{{$hum->luchtvochtigheid}}</h2>
            </li>
            <li class="container__list__avg">
                <h2 id="-js--gemiddelde">{{$avghum}}</h2>
            </li>
        </ul>
    </div>
 @endsection