<!DOCTYPE html>
<html>
<head>
    <title>{{ 'PRUEBA DE MENU' }}</title>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet"/>
    {{ HTML::style('css/main.css') }}
</head>
<body>
    <div class="container">
        <header>
            <h1>
                {{ 'Cabecera de nuestra prueba.' }}
            </h1>
        </header>
        <nav>
            @include('formularios')
        </nav>
        <footer>
        </footer>
    </div>
</body>
</html>
