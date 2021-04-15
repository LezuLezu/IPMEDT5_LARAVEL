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
        <article class="create-form">
            <!-- schoonmaken invullen -->
            <form class="create-form__form" action="/dust/clean" method="POST">
                @csrf
                <p class="create-form__text"> Waarmee heb je schoongemaakt? </p>

                <!-- schoonmaak methode -->
                <section class="create-form__section">
                    <label class="create-form__label" for="method"> Manier van schoonmaken </label>
                    <select class="create-form__select" name="method" id="method">
                        <option disabled selected value> -- Selecteer een methode -- </option>
                        @foreach($methods as $method)
                            <option value="{{$method->method}}"> {{$method->method}} </option>
                        @endforeach
                    </select>
                </section>
                <!-- schoonmaak product -->
                <section class="create-form__section">
                    <label class="create-form__label" for="method"> Gebruikt product </label>
                    <select class="create-form__select" name="product" id="product">
                        <option disabled selected value> -- Selecteer een product -- </option>
                        <option value="Geen"> Geen product gebruikt </option>
                        @foreach($products as $product)
                            <option value="{{$product->product}}"> {{$product->product}} </option>
                        @endforeach
                    </select>
                </section>
                <!-- submit -->
                <section class="create-form__section">
                    <button class="create-form__button" type="submit">Verzend</button>
                </section>
            </form>
            <!-- terug naar indexpage -->
            <section class='buttonSection'>
                    <button class="dustCard__button" onclick="window.location.href='/dust'"> Terug </button>
            </section>
        </article>
</main>

    @endsection
