<link rel="stylesheet" href="/css/airpressure.css">
@extends("baseview")

@section('title')
Luchtdruk
@endsection

@section("body")

<!-- navigatie -->
@include('nav')

<!-- overzicht data -->
    <section class="airpressure__sectionHeader">
        <h1 class="airpressure__header">Luchtdruk</h1>
    </section>

    <section class="section__airpressure">
        <section class="section__airpressureInfo">
            <h2 class="section__airpressureInfoHeader">Huidige luchtdruk is:</h2>
            <p class="section__airpressureInfoText">{{$airpressure}} hPa</p>
            
            <h2 class="section__airpressureInfoHeader">Raam is:</h2>
            <p class="section__airpressureInfoText">{{$window_status}}</p>

            <h2 class="section__airpressureInfoHeader">Verwarming is:</h2>
            <p class="section__airpressureInfoText">{{$heater_status}}</p>

            <h2 class="section__airpressureInfoHeader">Gewenste luchtdruk is:</h2>
            <p class="section__airpressureInfoText">{{$desired_airpressure}} hPa</p>
        </section>

<!-- input gewenste luchtdruk -->
        <article class="section__airpressureDesired">
            <form action="/airpressure" method="POST">
                @csrf

                <section class="section__airpressureDesiredInputSection">
                    <label class="section__airpressureDesiredHeader" for="airpressure">Voer je gewenste luchtdruk in:</label>
                    <input class="section__airpressureDesiredInput" name="airpressure" id="airpressure" type="number" />
                </section>

                <section class="section__airpressureDesiredButtonSection">
                    <button class="section__airpressureDesiredButton" type="submit">Ok</button>   
                </section>

            </form>
        </article>
    </section>  
@endsection