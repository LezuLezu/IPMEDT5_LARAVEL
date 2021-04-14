@extends('baseview')

<section class='buttonSection'>

    <section class="buttonSection__create">
        <p class="buttonSection__text"> Heb je schoongemaakt? Vul in hoe en waarmee je hebt schoongemaakt door op de knop te klikken: </p>
        <button class="cleanButton" onclick="window.location.href='/dust/create'"> Schoongemaakt </button>
    </section>
        <section class="buttonSection__show">
        <p class="buttonSection__text"> Wil je bekijken wanneer je heb schoongemaakt? Klik op de volgende knop; </p>
        <button class="cleanButton" onclick="window.location.href='/dust/clean'"> Overzicht </button>
    </section>

</section>