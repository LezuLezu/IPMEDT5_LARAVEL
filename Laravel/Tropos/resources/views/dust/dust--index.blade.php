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
<main class="main u-grid-v-12">
    <!-- Huidige meting -->
    <article class="dustCard ">
            <section class="dustCard__text">
                <header class="dustCard__header">
                    <h1 class="dustCard__heading">Stofgehalte: {{$dust->measurement . ' ' . $dust->unit}} </h1>
                    
                </header>
                <!-- Input adviezen vanuit js -->
                <h2 class="dustCard__level" id="js--dustLevel"></h2>
                <p class="dustCard__par" id="js--dustAdviceNow" > </p> <br>
                <script type="text/javascript" >
                    dustNow({{$dust->measurement}});
                </script>
                <p class="dustCard__par dustCard__dateTime">
                    Gemeten op {{ Carbon\Carbon::parse($dust->date)->format('d-m-Y') }} om  {{$dust->time}}.
                </p>

                <section class='buttonSection__grid'>
                    <button class="dustCard__button" onclick="window.location.href='/dust/show'"> Naar pagina </button>
                    <button class="dustCard__button dustCard__button--refreshButton" onclick=refresh()>
                        <img class="dustCard__button__img" src="/img/refresh.png" alt="Refresh logo">
                    </button>
                </section>
            </section>
        </article>

    <!-- Gemiddelde meting -->
    <article class="dustCard">
        <section class="dustCard__text">
            <header class="dustCard__header">
                <h1 class="dustCard__heading dustCard__heading--average">Gemiddeld stofgehalte: {{$average. ' ' . $dust->unit}} </h1>
                
            </header>
            <!-- Input adviezen vanuit js -->
            <h2 class="dustCard__level" id="js--dustLevelAverage"></h2>
            <p class="dustCard__par" id="js--dustAdviceAverage"></p>
            <script type="text/javascript">
                dustAverage({{$average}}); 

            </script>
             <p class="dustCard__par dustCard__dateTime">
                Gemiddelde gemeten voor uur {{$hour}} op {{ Carbon\Carbon::parse($dust->date)->format('d-m-Y') }} om  {{$dust->time}}.
            </p>

           
            <script type="text/javascript">
                checkAverage({{$average}});
            </script>
            
            <section class='buttonSection__grid'>
                    <button class="dustCard__button" onclick="window.location.href='/dust/avg'"> Naar pagina </button>
                    <button class="dustCard__button dustCard__button--refreshButton" onclick=refresh()>
                        <img class="dustCard__button__img" src="/img/refresh.png" alt="Refresh logo">
                    </button>
            </section>

        </section>
    </article>

        <!-- Schoonmaak -->
    <section class='dustCard'>
        @include('dust.components.clean--button')
    </section>

</main>

@endsection