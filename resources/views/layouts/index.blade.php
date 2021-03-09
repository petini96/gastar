<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link href="/icons/fontawesome-free-5.15.2-web/css/fontawesome.css" rel="stylesheet">
    <link href="/icons/fontawesome-free-5.15.2-web/css/brands.css" rel="stylesheet">
    <link href="/icons/fontawesome-free-5.15.2-web/css/solid.css" rel="stylesheet">
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Rasgar') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header-user></header-user>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
