@extends('baseview')

@section('title')
    Stof
@endsection

@section('body')

    @include('dust.components.dustNav')

    <!-- Huidige meting -->
    <article class="dustCard">
            <section class="dustCard__text">
            
                
                    Datum:          {{ Carbon\Carbon::parse($dust->date)->format('d-m-Y') }} <br>
                    Tijd:           {{$dust->time}} <br>
                    Hoeveelheid:    {{$dust->measurement . ' ' . $dust->unit}} <br>
                


                <p id="js--dustAdviceNow" > </p> <br>
                <script type="text/javascript" >
                    adviceNow({{$dust->measurement}}); 
                </script>
                <section class='buttonSection'>
                    <button class="button" onclick="window.location.href='/dust/show'"> Naar pagina </button>
                </section>
            </section>
        </article>

    <!-- Gemiddelde meting -->
    <article class="dustCard">
        <section class="dustCard__text">
            Huidig uur:     {{$hour}}   <br>
            Gemiddelde stof niveau dit uur: {{$average. ' ' . $dust->unit}}
            <p id="js--dustAdviceAverage"></p>
            <script type="text/javascript">
                adviceAverage({{$average}}); 
            </script>

            <script type="text/javascript">
                checkAverage({{$average}});
            </script>
            
            <section class='buttonSection'>
                    <button class="button" onclick="window.location.href='/dust/avg'"> Naar pagina </button>
                </section>

        </section>
    </article>

        <!-- Schoonmaak invoeren -->
    <section class='dustCard'>
        @include('dust.components.clean--button')
    </section>

    

@endsection