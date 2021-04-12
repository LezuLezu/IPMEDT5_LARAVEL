@extends("baseview")

@section('title')
Koolmonoxide
@endsection

@section('body')
<header>
    <nav class="nav">
        <a class="nav__link nav__link__notHover nav__link--img" href="/home"><figure><img class="nav__link__img" src="/img/troposLogo.png" alt="logo van Tropos"></figure></a>
        <a class="nav__link" href="/home">Home</a>
        <a class="nav__link" href="/temperatuur">Temperatuur</a>
        <a class="nav__link" href="#">Luchtvochtigheid</a>
        <a class="nav__link" href="/airpressure">Luchtdruk</a>
        <a class="nav__link" href="#">Stof</a>
        <a class="nav__link nav__link__current" href="/monoxide">Koolmonoxide</a>
    </nav>  
</header>
<main class="main">
    <section class="monoxideSection" id="js--monoxideSection">
        <h1 class="monoxideSection__header">Koolmonoxide: {{$carbon_monoxide}} ppm
        <button class="monoxideSection__button monoxideSection__button--refreshButton" onclick=refresh()><img class="monoxideSection__button__img" src="/img/refresh.png" alt="Refresh logo"></button>
        </h1>
        <h2 class="monoxideSection__result" id="js--result">Gehalte advies</h2>
        <p class="monoxideSection__result__advice" id="js--result__explained">Uitleg van het resultaat</p>
        <p class="monoxideSection__result__advice" id="js--result__solution"></p>
        <p class="monoxideSection__result__advice" id="js--result__alarm"></p>

        <button class="monoxideSection__button" onclick=informationMonoxide()>Informatie over koolmonoxide</button>
        <button class="monoxideSection__button monoxideSection__button--buzzer" id="js--button__buzer" onclick=stopBuzzer()>Alarm uit</button>
    <!-- <a href='{{"/buzzer"}}'> Buzzer uit</a>   vergeet pop up waarschuwing niet want vertraging-->
    </section> 
</main>

<script>
    function stopBuzzer() {
        location.href='{{"/buzzer"}}'; 
    }

    function informationMonoxide(){
        location.href="/monoxideInformation";
    }

    function refresh(){
        location.href="/monoxide";
    }
  
    //   RESULT BY MONOXIDE VALUE
    let result = document.getElementById("js--result");
    let result__explained = document.getElementById("js--result__explained");
    let result__solution = document.getElementById("js--result__solution");
    let result__alarm = document.getElementById("js--result__alarm");
    let buttonBuzzer = document.getElementById("js--button__buzer");
    let section = document.getElementById("js--monoxideSection");

    if( {{$carbon_monoxide}} < 200){
        result.innerHTML = "Het koolmonoxide gehalte is goed.";  //niks doen
        result__explained.innerHTML = "Het gehalte is niet schadelijk voor je gezondheid. Je hoeft niks te veranderen aan de ruimte.";
        section.style.backgroundColor ="#abe8af";
        buttonBuzzer.style.display = "none";
    }

    if( {{$carbon_monoxide}} >= 200 && {{$carbon_monoxide}} <= 400){
        result.innerHTML = "Het koolmonoxide gehalte is matig. ";     //raam en deuren open 
        result__explained.innerHTML = "Het gehalte is hoger dan wat het hoort te zijn. Een CO gehalte boven de 200 kan hoofdpijn, duizeligheid, misselijkheid en vermoeidheid veroozaken.";
        result__solution.innerHTML = "Om het gehalte te laten dalen kan je ramen en deuren open doen.";
        section.style.backgroundColor ="#fdee93";
        //   buttonBuzzer.style.display = "none";
    }

    if( {{$carbon_monoxide}} > 400 && {{$carbon_monoxide}} < 800){
        result.innerHTML = "Het koolmonoxide gehalte is schadelijk voor je gezondheid.";
        result__explained.innerHTML = "Het gehalte is aan de hoge kant. Een CO gehalte bovend de 400 kan intense hoofdpijn veroorzaken. Levensgevaar na drie uur.";
        result__solution.innerHTML = "Houdt daarom alle ramen en deuren open. Houdt ook het gehalte in de gaten, zodat je kan zien of het gaat dalen. Als het gaat stijgen verlaat de ruimte.";
        result__alarm.innerHTML = "Het alarm gaat af als waarschuwing. Om het alarm uit te zetten klik je op de knop.";
        section.style.backgroundColor ="#ffa046";
    }

    if( {{$carbon_monoxide}} >= 800){
        result.innerHTML = "Verlaat de ruimte! Het koolmonoxide gehalte is te hoog";
        result__explained.innerHTML = "Het gehalte is te hoog. Verlaat zo snel mogelijk de ruimte. Het kan ernstige gevolgen hebben als je blijft.";   
        result__solution.innerHTML = "Het gehalte is te hoog en je hebt te weinig tijd om er nu zelf nog iets tegen te doen. Een gehalte hoger dan 800 veroorzaakt hoofdpijn, duizeligheid en misselijkheid. Na 45 minuten het bewustzijn verliezen. Ongeveer na 2 - 3 uur overlijden.";
        section.style.backgroundColor ="#fc6465";
    }
  
</script>

@endsection

