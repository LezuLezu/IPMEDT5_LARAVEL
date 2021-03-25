@extends('default')



@section('content')
    <article class="dustCard">
        <section class="dustCard__text">
            <pre>
                Datum:          {{ Carbon\Carbon::parse($dust->date)->format('d-m-Y') }} <br>
                Tijd:           {{$dust->time}} <br>
                Hoeveelheid:    {{$dust->measurement . ' ' . $dust->unit}} <br>
            </pre>
        </section>
    </article>
@endsection

