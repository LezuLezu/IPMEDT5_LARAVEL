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
@include('nav')
    <main class="main">
        <article class="dustCard dustCard--show">
            <section class="dustCard__text">
                <header class="dustCard__header">
                    <h1 class="dustCard__heading">Stofgehalte: {{$dust->measurement . ' ' . $dust->unit}} </h1>
                    
                </header>
                <!-- input vanuit js -->
                <h2 class="dustCard__level" id="js--dustLevel"></h2>
                <p class="dustCard__par" id="js--dustAdviceNow" > </p> <br>
                <script type="text/javascript" >
                    dustNow({{$dust->measurement}}); 
                </script>
                <p class="dustCard__par dustCard__dateTime">
                    Gemeten op {{ Carbon\Carbon::parse($dust->date)->format('d-m-Y') }} om  {{$dust->time}}.
                </p>

                <!-- Terug of refresh-->
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



