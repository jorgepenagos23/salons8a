<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <body>
        <div class="flex-center position-ref full-height">
       
            
            <div class="content">
                <div class="title m-b-md">
                    SALÓN DE EVENTOS
                </div>

                <div class="links">
                    <a href="{{ route('gerente.showLoginForm') }}">GERENTE</a>
                    <a href="{{ route('user.showLoginForm') }}">CLIENTE</a>
                    <a href="{{ route('empleados.showLoginForm') }}">EMPLEADO</a>
                    <a href="{{ route('anonimo.showLoginForm') }}">Paquetes</a>

                </div>
            </div>
        </div>
    </body>
</html>
