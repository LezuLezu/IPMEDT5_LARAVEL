@extends('baseview')
    @section('title')
        Schoongemaakt
    @endsection
    @section('body')
        @include('dust.components.dustNav')
        <article class="create-form">
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
        </article>

    @endsection
