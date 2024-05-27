<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Каталог фільмів')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<header>
    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/films') }}">Фільми</a>
        <a href="{{ url('/genres') }}">Жанри</a>
    </nav>
</header>
<main>
    @yield('content')
</main>
<footer>
    <p>&copy; {{ date('Y') }} Laravel App. All rights reserved.</p>
</footer>
</body>
</html>
