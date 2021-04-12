@extends("baseview")

@section('title')
Koolmonoxide
@endsection

@section('body')
<section class="monoxideSection" id="js--monoxideSection">
    <h1 class="monoxideSection__header">Koolmonoxide: {{$carbon_monoxide}} ppm</h1>
    <h2 class="monoxideSection__result" id="js--result">Gehalte advies</h2>
    <p class="monoxideSection__result__advice" id="js--result__explained">Uitleg van het resultaat</p>
    <p class="monoxideSection__result__advice" id="js--result__solution">Oplossing van het resultaat</p>

    <button class="monoxideSection__button" onclick=informationMonoxide()>Informatie over koolmonoxide gehaltes</button>
    <button class="monoxideSection__button monoxideSection__button--buzzer" id="js--button__buzer" onclick=stopBuzzer()>Alarm uit</button>
  <!-- <a href='{{"/buzzer"}}'> Buzzer uit</a>   vergeet pop up waarschuwing niet want vertraging-->
</section>


<script>
    function stopBuzzer() {
        location.href='{{"/buzzer"}}'; 
    }

    function informationMonoxide(){
        location.href="/monoxideInformation";
    }
  
    //   RESULT BY MONOXIDE VALUE
    let result = document.getElementById("js--result");
    let result__explained = document.getElementById("js--result__explained");
    let result__solution = document.getElementById("js--result__solution");
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
        result__explained.innerHTML = "Het gehalte is hoger dan wat het hoort te zijn.";
        result__solution.innerHTML = "Om het gehalte te laten dalen kan je ramen en deuren open doen.";
        section.style.backgroundColor ="#fdee93";
        //   buttonBuzzer.style.display = "none";
    }

    if( {{$carbon_monoxide}} > 400 && {{$carbon_monoxide}} < 800){
        result.innerHTML = "Het koolmonoxide gehalte is schadelijk voor je gezondheid.";
        result__explained.innerHTML = "Het gehalte is aan de hoge kant.";
        result__solution.innerHTML = "Houdt alle ramen en deuren open. Houdt ook het gehalte in de gaten, zodat je kan zien of het gaat dalen. Ales het gaat stijgen verlaat de ruimte.";
        section.style.backgroundColor ="#ffa046";
    }

    if( {{$carbon_monoxide}} >= 800){
        result.innerHTML = "Verlaat de ruimte! Het koolmonoxide gehalte is te hoog";
        result__explained.innerHTML = "Het gehalte is te hoog. Verlaat zo snel mogelijk de ruimte. Het kan ernstige gevolgen hebben als je blijft.";   
        result__solution.innerHTML = "Het is te hoog om er nu zelf nog iets tegen te doen.";
        section.style.backgroundColor ="#fc6465";
    }
  
</script>

@endsection

