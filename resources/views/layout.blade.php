<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titel')</title>
    <link rel="stylesheet" href="{{url('css/main.style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    @yield('styles')
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{route('home.index')}}">Home</a></li>
                <li><a href="{{route('projects.index')}}">Overzicht</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>© 2022 Kaylan de Groot</p>
    </footer>
</body>
@yield('scripts')
<script src="https://kit.fontawesome.com/ab1ca9801d.js" crossorigin="anonymous"></script>
</html>