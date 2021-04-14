@extends('default')



@section('content')
    <article class="dustCard">
        <section class="dustCard__text">
            Huidig uur:     {{$hour}}   <br>
            Gemiddelde stof niveau dit uur: {{$average}}
            <p id="dust__advise"></p>
            <script type="text/javascript">
                advice({{$average}}); 
            </script>

           <script type="text/javascript">
                checkAverage({{$average}});
           </script>

        </section>
    </article>
@endsection

