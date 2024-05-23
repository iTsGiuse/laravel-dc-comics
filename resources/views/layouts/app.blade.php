<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dc Comics</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <header>
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-2">
                    <img src="{{Vite::asset('resources/img/dc-logo.png') }}" alt="">
                </div>
                <div class="col-2">
                    <div class="d-flex">
                        <ul>
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a href="/movies">Movies</a>
                            </li>
                            <li>
                                <a href="/">Aggiungi</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>   
        </div>
    </header>
    <main>
        @yield('main')
    </main>

</body>

</html>