<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AGREGAR USUARIOS</title>
      <!-- BOOTSTRAP STYLES-->
      <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
      <!-- FONTAWESOME STYLES-->
      <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
      <!-- CUSTOM BASIC STYLES-->
      <link href="{{ asset('css/basic.css') }}" rel="stylesheet">
      <!-- CUSTOM MAIN STYLES-->
      <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
      <!-- GOOGLE FONTS-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
      <!-- GOOGLE FONTS-->
      <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <style>
        .form-container {
            margin-top: 50px;
            background-color: #1389f7;
            padding: 40px;
            border-radius: 10px;
        }
    </style>
</head>
@auth
@include('usuarios.header_usuarios2')
<body>
<div class="container">
    <div class="row justify-content-center align-items-center" style="height: 100vh; background-color: #ffffff;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ingresa los datos para agregar un Nuevo Usuario') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('usuarios.store') }}" class="needs-validation" novalidate>
                        @csrf
                        <div class="mb-3 row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>
                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" required autofocus>
                                <div class="invalid-feedback">
                                    Por favor ingresa el nombre.
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="usuario" class="col-md-4 col-form-label text-md-end">{{ __('Usuario') }}</label>
                            <div class="col-md-6">
                                <input id="usuario" type="text" class="form-control" name="usuario" required>
                                <div class="invalid-feedback">
                                    Por favor ingresa el usuario.
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="Roles" class="col-md-4 col-form-label text-md-end">{{ __('Roles') }}</label>
                            <div class="col-md-6">
                                <select class="form-select" id="Roles" name="Roles" required>
                                    <option value="cliente">Cliente</option>
                                    <option value="gerente">Gerente</option>
                                    <option value="empleado">Empleado</option>
                                </select>
                                <div class="invalid-feedback">
                                    Por favor selecciona un rol.
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="apellidos" class="col-md-4 col-form-label text-md-end">{{ __('Apellidos') }}</label>
                            <div class="col-md-6">
                                <input id="apellidos" type="text" class="form-control" name="apellidos" required>
                                <div class="invalid-feedback">
                                    Por favor ingresa los apellidos.
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="direccion" class="col-md-4 col-form-label text-md-end">{{ __('Dirección') }}</label>
                            <div class="col-md-6">
                                <input id="direccion" type="text" class="form-control" name="direccion" required>
                                <div class="invalid-feedback">
                                    Por favor ingresa la dirección.
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="telefono" class="col-md-4 col-form-label text-md-end">{{ __('Teléfono') }}</label>
                            <div class="col-md-6">
                                <input id="telefono" type="tel" class="form-control" name="telefono" required>
                                <div class="invalid-feedback">
                                    Por favor ingresa el teléfono.
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="edad" class="col-md-4 col-form-label text-md-end">{{ __('Edad') }}</label>
                            <div class="col-md-6">
                                <select class="form-select" id="edad" name="edad">
                                    @foreach(range(1, 100) as $edad)
                                        <option value="{{ $edad }}">{{ $edad }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo electrónico') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" required>

                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="contraseña-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmar Contraseña') }}</label>
                            <div class="col-md-6">
                                <input id="contraseña-confirm" type="password" class="form-control" name="contraseña_confirmation" required>
                                <div class="invalid-feedback">
                                    Por favor confirma la contraseña.
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Agregar Usuario</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endauth

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
