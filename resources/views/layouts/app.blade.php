<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dc Comics</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    
    <!-- Font-Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <header>
        <div class="container">
            <div class="row align-items-center my-3">
                <div class="col-2">
                    <img src="{{Vite::asset('resources/img/dc-logo.png') }}" href="/" alt="Logo">
                </div>
                <div class="col">
                    <div class="d-flex justify-content-end">
                        <ul>
                            <li class="nav-item">
                                <a class="{{ Request::is('/') ? 'nascondi' : '' }}" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="{{ Request::is('movies') ? 'nascondi' : '' }}" href="/movies">Movies</a>
                            </li>
                            <li class="nav-item">
                                <a class="{{ Request::is('movies/create') ? 'nascondi' : '' }}" href="/movies/create">Aggiungi</a>
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
    <footer>
        <div class="container">
            <div class="row">
                <div class="col text-center mt-3">
                    <h3>Made with Boolean</h3>
                    <h3>Giuse</h3>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>