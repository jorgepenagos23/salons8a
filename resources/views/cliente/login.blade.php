<!DOCTYPE html>
<html>
<head>
    <title>Iniciar sesión</title>
</head>
<body>
    @if (session('error'))
        <div>{{ session('error') }}</div>
    @endif

    <form method="POST" action="{{route('login.authenticate')}}">
        @csrf

        <div>
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username">
        </div>

        <div>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password">
        </div>

        <div>
            <button type="submit">Iniciar sesión</button>
        </div>
    </form>
</body>
</html>
