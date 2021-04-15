@extends('baseview')
<!-- css en js  -->
@section('dustFiles')
    <link rel="stylesheet" href="/css/dust.css">
    <script type="text/javascript" src="/js/dust.js"></script>
@endsection
<!-- title -->
@section('title')
    Schoongemaakt
@endsection
@section('body')
<!-- nav -->
    @include('dust.components.dustNav')
        <main class="main">
        <article class="cleanCard">
            <section class="cleanCard__text">
                <header class="cleanCard__header">
                    <h1 class="cleanCard__heading">Schoonmaak overzicht </h1>                    
                </header>
                <!-- input vanuit js -->
                <p class="cleanCard__par" id="js--cleanAdvice"></p>
                <script type="text/javascript">
                    adviceClean();
                </script>
            </section>
            <!-- tabel overzicht van schoonmaak inputs -->
            <section class="cleanCard__table">
                <table class="cleanTable">
                    <tr class="cleanTable__row">
                        <th class="cleanTable__header"> Datum </th>
                        <th class="cleanTable__header"> Tijd </th>
                        <th class="cleanTable__header"> Methode </th>
                        <th class="cleanTable__header"> Product </th>                        
                    </tr>
                    @foreach($cleaned as $clean)
                        <tr class="cleanTable__row">
                            <td class=cleanTable__data> {{$clean->date}} </td>
                            <td class=cleanTable__data> {{$clean->time}} </td>
                            <td class=cleanTable__data> {{$clean->method}} </td>
                            <td class=cleanTable__data> {{$clean->product}} </td>
                        </tr>
                    @endforeach
                </table>
            </section>
            <section class='buttonSection'>
                    <button class="dustCard__button" onclick="window.location.href='/dust'"> Terug </button>
                </section>
        </article>
</main>
    @endsection