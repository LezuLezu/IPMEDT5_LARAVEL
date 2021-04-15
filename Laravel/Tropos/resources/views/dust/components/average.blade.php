@extends('baseview')
<!-- css en js  -->
@section('dustFiles')
    <link rel="stylesheet" href="/css/dust.css">
    <script type="text/javascript" src="/js/dust.js"></script>
@endsection
<!-- title -->
@section('title')
    Stof
@endsection

@section('body')
<!-- nav -->
@include('dust.components.dustNav')
<!-- Show pagina gemiddelde meting -->
<main class="main">
    <article class="dustCard dustCard--show">
        <section class="dustCard__text">
        <header class="dustCard__header">
                <h1 class="dustCard__heading dustCard__heading--average">Gemiddeld stofgehalte: {{$average. ' ' . $dust->unit}} </h1>
                
            </header>
            <!-- input vanuit js -->
            <h2 class="dustCard__level" id="js--dustLevelAverage"></h2>
            <p id="js--dustAdviceAverage"></p>
            <script type="text/javascript">
                dustAverage({{$average}}); 
            </script>
             <p class="dustCard__par dustCard__dateTime">
                Gemiddelde gemeten voor uur {{$hour}} op {{ Carbon\Carbon::parse($dust->date)->format('d-m-Y') }} om  {{$dust->time}}.
            </p>
            <!-- gemiddelde checken            -->
            <script type="text/javascript">
                checkAverage({{$average}});
            </script>

            <!-- terug  of refresh-->
            <section class='buttonSection__grid'>
                    <button class="dustCard__button" onclick="window.location.href='/dust'"> Terug </button>
                    <button class="dustCard__button dustCard__button--refreshButton" onclick=refresh()>
                        <img class="dustCard__button__img" src="/img/refresh.png" alt="Refresh logo">
                    </button>   
            </section>

        </section>
    </article>
</main>
@endsection

