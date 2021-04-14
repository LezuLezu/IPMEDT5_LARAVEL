@extends('baseview')
    @section('title')
        Schoongemaakt
    @endsection
    @section('body')
        @include('dust.components.dustNav')
        <article class="cleanCard">
            <section class="cleanCard__text">
                <p class="cleanCard__par" id="js--cleanAdvice"></p>
                <script type="text/javascript">
                    adviceClean();
                </script>
            </section>
            <section class="cleanCard__table">
                <table class="cleanTable">
                    <tr class="cleanTable__row">
                        <th class="cleanTable__header"> Datum </th>
                        <th class="cleanTable__header"> Tijd </th>
                        <th class="cleanTable__header"> Methode </th>
                        <th class="cleanTable__header"> Product </th>                        
                    </tr>
                    @foreach($cleaned as $clean)
                        <tr class="cleanTable__row">
                            <td class=cleanTable__data> {{$clean->date}} </td>
                            <td class=cleanTable__data> {{$clean->time}} </td>
                            <td class=cleanTable__data> {{$clean->method}} </td>
                            <td class=cleanTable__data> {{$clean->product}} </td>
                        </tr>
                    @endforeach
                </table>
            </section>
        </article>
    @endsection