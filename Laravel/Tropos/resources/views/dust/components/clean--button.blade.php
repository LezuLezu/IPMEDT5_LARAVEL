@extends('baseview')
<!-- css en js  -->
@section('dustFiles')
    <link rel="stylesheet" href="/css/dust.css">
    <script type="text/javascript" src="/js/dust.js"></script>
@endsection

<!-- index display voor schoonmaakinput of overzicht -->
<section class='clean__buttonSection'>
    <header class="clean__header">
        <h1 class="clean__heading">Schoonmaken </h1>                    
    </header>
    <!-- schoonmaak invoeren -->
    <section class="clean__buttonSection__create">
        <p class="clean__buttonSection__text"> Heb je schoongemaakt? Vul in hoe en waarmee je hebt schoongemaakt door op de knop te klikken: </p>
        <section class='buttonSection'>
            <button class="cleanButton" onclick="window.location.href='/dust/create'"> Schoongemaakt </button>
        </section>
    </section>
    <!-- schoonmaak overzicht -->
    <section class="clean__buttonSection__show">
        <p class="clean__buttonSection__text"> Wil je bekijken wanneer je heb schoongemaakt? Klik op de volgende knop; </p>
        <section class='buttonSection'>
            <button class="cleanButton" onclick="window.location.href='/dust/clean'"> Overzicht </button>
        </section>
    </section>

</section>