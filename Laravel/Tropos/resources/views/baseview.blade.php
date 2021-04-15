<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    @yield('css')
    @yield('monoxideCSS')
    @yield('homepageCSS')
    <link rel="stylesheet" href="/css/temperatuur.css">
    @yield('dustFiles')
    
    <title>@yield('title')</title>
</head>
    <body>
         @yield("body")
    </body>
</html>
