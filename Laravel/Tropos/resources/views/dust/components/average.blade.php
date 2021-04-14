@extends('baseview')

@section('title')
    Stof
@endsection

@section('body')
    @include('dust.components.dustNav')
    <article class="dustCard">
        <section class="dustCard__text">
            Huidig uur:     {{$hour}}   <br>
            Gemiddelde stof niveau dit uur: {{$average. ' ' . $dust->unit}}
            <p id="dust__advise__average"></p>
            <script type="text/javascript">
                adviceAverage({{$average}}); 
            </script>

            <script type="text/javascript">
                checkAverage({{$average}});
            </script>
            
            @include('dust.components.clean--button')

            <!-- terug -->
            <section class='buttonSection'>
                    <button class="cleanButton" onclick="window.location.href='/dust'"> Terug </button>
            </section>

        </section>
    </article>
@endsection

