<!DOCTYPE html>
<html>
<head>

    <title>Iniciar sesión</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/log.css')}}">
</head>
<body>
    @if (session('error'))
        <div>{{ session('error') }}</div>
    @endif

    <form method="POST" action="{{route('anonimo.authenticate')}}">
        @csrf

        <div class="login-container">
            <div class="title">
                <h1>INGRESA TUS DATOS ANONIMO</h1>
            </div>
            <img src="{{asset('css/login-icon.svg')}}" alt="username-icon" style="height: 7rem" >
            <div class="form-group">
                <label for="username">Usuario:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
                <button type="submit">Iniciar sesión</button>
        </div>
    </form>
</body>
</html>
