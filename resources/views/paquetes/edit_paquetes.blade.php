<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EDITAR PAQUETE</title>
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
        body {
            background: linear-gradient(to right, #7c71b8, #7c8bb8);
            color: white;
        }

        .container {
            margin-top: 50px;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-group textarea {
            height: 150px;
        }

        .form-group button {
            margin-top: 20px;
        }

        .database-image {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .database-image img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

@include('paquetes.header_paquete')

<body>
    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('paquetes.update', ['id_paquete' => $paquete->id_paquete]) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" class="form-control" value="{{ $paquete->nombre }}" required>
                    </div>

                    <div class="form-group">
                        <label for="descripcion">Descripción:</label>
                        <textarea name="descripcion" class="form-control" required>{{ $paquete->descripcion }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="costo">Precio:</label>
                        <input type="number" name="costo" class="form-control" value="{{ $paquete->costo }}" required>
                    </div>

                    <div class="form-group">
                        <label for="capacidad">Capacidad:</label>
                            <input type="number" name="capacidad" class="form-control" value="{{ $paquete->capacidad }}" required>
                    </div>

                    <div class="form-group">
                        @php
                            $paquete = \App\Models\PaquetesModel::first();
                        @endphp
                        @if ($paquete)
                        <input type="checkbox" disabled @if ($paquete->evento && $paquete->evento->id_paquete == $paquete->id_paquete) checked @endif>
                        @endif


                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Guardar cambios') }}
                        </button>
                    </div>
                </form>
            </div>


    </div>
</body>
</html>
