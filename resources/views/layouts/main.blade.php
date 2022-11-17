<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>@yield('title')</title>
    </head>

    <body>
        <header class="top">
            <nav class="navbar">
                <a class="btn-nav" href="/show"> Ver cachorro aleatório</a>
                <a class="btn-nav" href="/breeds"> Ver raças de cachorro</a>
                <a class="btn-nav" href="/"> Home</a>
            </nav>
        </header>
        
        <section class="mid">
            @yield('content')
        </section>

        <footer class="bot">
            <p>DogApi &copy; 2022</p>
        </footer>
    </body>
</html>