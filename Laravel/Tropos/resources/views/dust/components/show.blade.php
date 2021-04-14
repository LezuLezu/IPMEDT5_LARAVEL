@extends('baseview')
    @section('title')
        Stof
    @endsection
    @section('body')
    @include('dust.components.dustNav')
        <article class="dustCard">
            <section class="dustCard__text">
            
                
                    Datum:          {{ Carbon\Carbon::parse($dust->date)->format('d-m-Y') }} <br>
                    Tijd:           {{$dust->time}} <br>
                    Hoeveelheid:    {{$dust->measurement . ' ' . $dust->unit}} <br>
                


                <p id="js--dustAdviceNow" > </p>
                <script type="text/javascript" >
                    adviceNow({{$dust->measurement}}); 
                </script>
                @include('dust.components.clean--button')

                <!-- Terug -->
                <section class='buttonSection'>
                    <button class="cleanButton" onclick="window.location.href='/dust'"> Terug </button>
                </section>
            </section>
        </article>
    @endsection



