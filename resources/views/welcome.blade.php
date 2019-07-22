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
                <div class="title m-b-md">
                    Caja de Ahorro
                </div>

                <div class="links">
                    <a href="{{ route('register') }}">!Únete ahora!</a>
					<a href="{{ route('login') }}">Ya tengo una cuenta</a>
                </div>
            </div>
        </div>
    </body>
</html>
