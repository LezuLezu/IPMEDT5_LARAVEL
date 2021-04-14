@extends("baseview")

@section("body")
    <section class="section__airpressure">
        <section class="section__airpressureInfo">
            <h1 class="section__airpressureInfoHeader">Airpressure is {{$airpressure}} hPa</h1>
            <h1 class="section__airpressureInfoHeader">Window is {{$window_status}}</h1>
            <h1 class="section__airpressureInfoHeader">Heater is {{$heater_status}}</h1>
            <h1 class="section__airpressureInfoHeader">Desired airpressure is {{$desired_airpressure}} hPA</h1>
        </section>

        <article class="section__airpressureDesired">
            <form action="/airpressure" method="POST">
                @csrf

                <section class="section__airpressureDesiredInputSection">
                    <label class="section__airpressureDesiredHeader" for="airpressure">Desired airpressure</label>
                    <input class="section__airpressureDesiredInput" name="airpressure" id="airpressure" type="text" />
                </section>

                <section class="section__airpressureDesiredButtonSection">
                    <button class="section__airpressureDesiredButton" type="submit">Ok</button>   
                </section>

            </form>
        </article>
    </section>  
@endsection