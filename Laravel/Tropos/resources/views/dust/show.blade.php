@extends('default')



@section('content')
    <article class="dustCard">
        <section class="dustCard__text">
            
                Datum:          {{ Carbon\Carbon::parse($dust->date)->format('d-m-Y') }} <br>
                Tijd:           {{$dust->time}} <br>
                Hoeveelheid:    {{$dust->measurement . ' ' . $dust->unit}} <br>
            


            <p id="dust__advise" > </p> <br>
            <script type="text/javascript">
                advice({{$dust->measurement}}); 
            </script>

        </section>
    </article>
@endsection

