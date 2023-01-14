<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>E-Learning</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- Scripts -->
    @vite(['resources/js/app.js'])
    @vite('resources/css/app.css')
    @yield('css')
    @yield('javascript')
</head>
<body>
        <main>
            @yield('content')
        </main>
</body>
</html>
