@extends("baseview")

@section('css')
<link rel="stylesheet" href="/css/monoxide.css">
@endsection

@section('title')
Koolmonoxide
@endsection

@section('body')

@include('nav')

<main class="main">
    <section class="monoxideSection" id="js--monoxideSection">
        <h1 class="monoxideSection__header">Koolmonoxide: {{$carbon_monoxide}} ppm
        <button class="monoxideSection__button monoxideSection__button--refreshButton" onclick=refresh()><img class="monoxideSection__button__img" src="/img/refresh.png" alt="Refresh logo"></button>
        </h1>       <!-- value of monoxide -->  
        <h2 class="monoxideSection__result" id="js--result">Gehalte advies</h2>         <!-- specified advice -->
        <p class="monoxideSection__result__advice" id="js--result__explained">Uitleg van het resultaat</p>      <!-- value explained -->
        <p class="monoxideSection__result__advice" id="js--result__solution"></p>        <!-- solution to lower the value -->
        <p class="monoxideSection__result__advice" id="js--result__hardware"></p>        <!-- included hardware -->

        <button class="monoxideSection__button" onclick=informationMonoxide()>Informatie over koolmonoxide</button>
        <!-- <button class="monoxideSection__button monoxideSection__button--buzzer" id="js--button__buzer" onclick=stopBuzzer()>Alarm uit</button>         NIET MEER NODIG UIT VOLGENS HET TESTEN-->
    </section> 
</main>

<script>
    // function stopBuzzer() {
    //     location.href='{{"/buzzer"}}'; 
    // }

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
    let result__hardware = document.getElementById("js--result__hardware");
    // let buttonBuzzer = document.getElementById("js--button__buzer");
    let section = document.getElementById("js--monoxideSection");

    if( {{$carbon_monoxide}} < 200){
        result.innerHTML = "Het koolmonoxide gehalte is goed.";  //NOTHING WRONG
        result__explained.innerHTML = "Het gehalte is niet schadelijk voor je gezondheid. Je hoeft niks te veranderen aan de ruimte.";
        result__hardware.innerHTML = "Het lampje blijft groen branden.";
        section.style.backgroundColor ="#abe8af";
        //buttonBuzzer.style.display = "none";        //ALARM BUTTON BUT ALARM ISNT ON
    }

    if( {{$carbon_monoxide}} >= 200 && {{$carbon_monoxide}} <= 400){        //WINDOWS AND DOORS OPEN 
        result.innerHTML = "Het koolmonoxide gehalte is matig. ";
        result__explained.innerHTML = "Het gehalte is hoger dan wat het hoort te zijn. Een CO gehalte boven de 200 kan hoofdpijn, duizeligheid, misselijkheid en vermoeidheid veroorzaken.";
        result__solution.innerHTML = "Om het gehalte te laten dalen gaat het raam automatisch open. Je kan zelf ook nog een deur openen";
        result__hardware.innerHTML = "Het lampje brandt geel en het raam gaat automatisch open.";
        section.style.backgroundColor ="#fdee93";
        //buttonBuzzer.style.display = "none";    //ALARM BUTTON BUT ALARM ISNT ON
    }

    if( {{$carbon_monoxide}} > 400 && {{$carbon_monoxide}} < 800){          //WINDOWS AND DOORS OPEN 
        result.innerHTML = "Het koolmonoxide gehalte is schadelijk voor je gezondheid.";
        result__explained.innerHTML = "Het gehalte is aan de hoge kant. Om het gehalte te laten dalen gaat het raam automatisch open. Een CO gehalte bovend de 400 kan intense hoofdpijn veroorzaken. Levensgevaar na drie uur.";
        result__solution.innerHTML = "Houdt daarom alle ramen en deuren open. Houdt ook het gehalte in de gaten, zodat je kan zien of het gaat dalen. Als het gaat stijgen verlaat de ruimte.";
        result__hardware.innerHTML = "Het lampje brandt geel en het raam gaat automatisch open.";
        section.style.backgroundColor ="#ffa046";
        //buttonBuzzer.style.display = "none";    //ALARM BUTTON BUT ALARM ISNT ON
    }

    // ALARM GOES ON VALUE TO HIGH
    if( {{$carbon_monoxide}} >= 800){
        result.innerHTML = "Verlaat de ruimte! Het koolmonoxide gehalte is te hoog";
        result__explained.innerHTML = "Het gehalte is te hoog. Verlaat zo snel mogelijk de ruimte. Het kan ernstige gevolgen hebben als je blijft.";   
        result__solution.innerHTML = "Het gehalte is te hoog en je hebt te weinig tijd om er nu zelf nog iets tegen te doen. Een gehalte hoger dan 800 veroorzaakt hoofdpijn, duizeligheid en misselijkheid. Na 45 minuten het bewustzijn verliezen. Ongeveer na 2 - 3 uur overlijden.";
        result__hardware.innerHTML = "Het lampje brandta rood en het alarm gaat af als waarschuwing! Ga naar buiten!";
        section.style.backgroundColor ="#fc6465";
    }
  
</script>

@endsection

