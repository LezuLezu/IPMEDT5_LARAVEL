@extends('default')



@section('content')
    <article class="dustCard">
        <section class="dustCard__text">
            <pre>
                Gemiddelde afgelopen uur:   {{$average}}
            </pre>
        </section>
    </article>
@endsection

