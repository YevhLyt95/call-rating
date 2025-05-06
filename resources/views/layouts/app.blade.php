<!DOCTYPE html>
<html lang="uk">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title', 'Оцінка Дзвінків')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        @include('layouts.header')
        <main>
            @yield('content')
        </main>
    </body>
</html>