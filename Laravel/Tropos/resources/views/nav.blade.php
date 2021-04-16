<header>
    <!-- desktop nav -->
    <nav class="nav">
        <a class="nav__link nav__link__notHover nav__link--img" href="/home"><figure><img class="nav__link__img" src="/img/troposLogo.png" alt="logo van Tropos"></figure></a>
        <a class="nav__link {{ 'home' == Request::is('home') ? 'nav__link__current' : ''}}" href="/home">Home</a>
        <a class="nav__link {{ 'temperatuur' == Request::is('temperatuur', 'tempInfo') ? 'nav__link__current' : ''}}" href="/temperatuur">Temperatuur</a>
        <a class="nav__link {{ 'humidity' == Request::is('humidity') ? 'nav__link__current' : ''}}" href="/humidity">Luchtvochtigheid</a>
        <a class="nav__link {{ 'airpressure' == Request::is('airpressure') ? 'nav__link__current' : ''}}" href="/airpressure">Luchtdruk</a>
        <a class="nav__link {{ 'dust' == Request::is('dust', 'dust/*') ? 'nav__link__current' : ''}}" href="/dust">Stof</a>
        <a class="nav__link {{ 'monoxide' == Request::is('monoxide', 'monoxideInformation', 'buzzer') ? 'nav__link__current' : ''}}" href="/monoxide">Koolmonoxide</a>
    </nav>

    <!-- mobile nav -->
    <nav id="navMobile" class="navMobile">
      <div class="navMobile__closebtn" onclick="closeNav()"><span class="navMobile__closebtn__menu"> Menu</span> &times;</div>
        <a class="navMobile__link {{ 'home' == Request::is('home') ? 'navMobile__link__current' : ''}}" href="/home">Home</a>
        <hr class="navMobile__line">
        <a class="navMobile__link {{ 'temperatuur' == Request::is('temperatuur', 'tempInfo') ? 'navMobile__link__current' : ''}}" href="/temperatuur">Temperatuur</a>
        <hr class="navMobile__line">
        <a class="navMobile__link {{ 'humidity' == Request::is('humidity') ? 'navMobile__link__current' : ''}}" href="/humidity">Luchtvochtigheid</a>
        <hr class="navMobile__line">
        <a class="navMobile__link {{ 'airpressure' == Request::is('airpressure') ? 'navMobile__link__current' : ''}}" href="/airpressure">Luchtdruk</a>
        <hr class="navMobile__line">
        <a class="navMobile__link {{ 'dust' == Request::is('dust', 'dust/*') ? 'navMobile__link__current' : ''}}" href="/dust">Stof</a>
        <hr class="navMobile__line">
        <a class="navMobile__link {{ 'monoxide' == Request::is('monoxide', 'monoxideInformation', 'buzzer') ? 'navMobile__link__current' : ''}}" href="/monoxide">Koolmonoxide</a>
        <hr class="navMobile__line">
    </nav>
    <button class="navMobile__menu" onclick="openNav()">&#9776; Menu</button>
</header>