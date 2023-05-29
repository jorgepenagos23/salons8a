<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/stylelogin.css') }}" />
    <style>
        body {
            background: linear-gradient(135deg, white, yellow);
        }
    </style>
    <title>Login</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Mi Aplicación</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header">
                        <img src="{{ asset('css/logo.png') }}" width="400" height="300">
                    </div>
                    <div class="card-body">
                        <h1 class="text-center mb-4">Inicia sesión</h1>
                        @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        <form action="{{ route('authenticate') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="usuario">Usuario</label>
                                <input class="form-control" name="usuario" id="usuario" value="" type="text"
                                    autofocus placeholder="Usuario">
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" id="password" name="password" placeholder="Contraseña">
                                <button type="button" id="togglePassword">Mostrar</button>
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary" type="submit">Iniciar sesión</button>
                            </div>
                        </form>
                        <a href="{{ route('registro') }}" class="btn btn-primary">Registrarse</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/code.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        const passwordInput = document.getElementById('password');
        const toggleButton = document.getElementById('togglePassword');

        toggleButton.addEventListener('click', function () {
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleButton.textContent = 'Ocultar';
            } else {
                passwordInput.type = 'password';
                toggleButton.textContent = 'Mostrar';
            }
        });
    </script>
</body>

</html>
