<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<header>
    <section>
        <div class="container">
            <nav>
                <ul class="nav d-flex gap-2"> 
                    <li class="nav-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a href="{{ route('comics.index') }}">Comics</a></li>
                </ul>
            </nav>
        </div>
    </section>
</header>

<body>
    <main class="bg-light">

    @yield('content')
    
    </main>
</body>

</html>