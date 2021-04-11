<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luchtvochtigheid</title>
    <link rel="stylesheet" href="/css/humidity.css">
    <script>
        //javaScript
        window.onload=function(){

            trim();

            function trim(){
                avghum = String({{$avghum}})
                document.getElementById('-js--gemiddelde').innerHTML="gemiddelde: " + avghum
            }
        }
    </script>
</head>

<body>
    <div class="container">
        <ul class="container__list">
            <li class="container__list__top">
                <h1>Luchtvochtigheid</h1>
            </li>
            <li class="container__list__item">
                <h2>{{$hum->luchtvochtigheid}}</h2>
            </li>
            <li class="container__list__item">
                <h2 id="-js--gemiddelde">{{$avghum}}</h2>
            </li>
        </ul>
    </div>
</body>
</html>