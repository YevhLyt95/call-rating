<!DOCTYPE html>
<html lang="uk">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title', 'Оцінка Дзвінків')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>
        @include('layouts.header')
        <main>
            @yield('content')
        </main>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>