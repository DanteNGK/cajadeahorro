<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>cajadeahorro</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">



        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="image">
                    <img src="{{ asset('images/cash.png') }}" alt="">
                </div>
                <div class="options">
                    <h1>Caja de Ahorro</h1>
                    <div class="buttons m-4">
                        <a href="{{ route('register') }}" class="m-2 btn btn-red btn-lg" role="button" aria-disabled="true">Solicita prestamo</a>
                        <a href="{{ route('login') }}" class="m-2 btn btn-blue btn-lg" role="button" aria-disabled="true">Iniciar sesión</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
