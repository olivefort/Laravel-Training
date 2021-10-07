<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('titre','Mon site en test')</title>
    </head>
    <body>
        @include('includes.header')
        <p></p>
        <div class="content">
            @yield('content')
        </div>
        <div class="promo">
            @yield('promo')
        </div>
        <div class="profil">
            @yield('profil')
        </div>
        <p></p>    
        @include('includes.footer')
    </body>
</html>