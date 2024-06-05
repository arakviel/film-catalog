<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Каталог фільмів')</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/films') }}">Фільми</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/genres') }}">Жанри</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<main class="container mt-5">
    @yield('content')
</main>
<footer class="bg-light text-center py-4 mt-auto">
    <p>&copy; {{ date('Y') }} Laravel App. All rights reserved.</p>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>
</html>
