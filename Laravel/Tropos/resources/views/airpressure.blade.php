@extends("baseview")

@section('title')
Luchtdruk
@endsection

@section('body')
<header>
    <nav class="nav">
        <a class="nav__link nav__link__notHover nav__link--img" href="/home"><figure><img class="nav__link__img" src="/img/troposLogo.png" alt="logo van Tropos"></figure></a>
        <a class="nav__link" href="/home">Home</a>
        <a class="nav__link" href="/temperatuur">Temperatuur</a>
        <a class="nav__link" href="#">Luchtvochtigheid</a>
        <a class="nav__link nav__link__current" href="/airpressure">Luchtdruk</a>
        <a class="nav__link" href="#">Stof</a>
        <a class="nav__link" href="/monoxide">Koolmonoxide</a>
    </nav>  
</header>
<h1>Airpressure is {{$airpressure}} hPa</h1>

@endsection