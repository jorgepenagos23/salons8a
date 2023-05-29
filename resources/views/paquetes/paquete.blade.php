<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LISTAR SERVICIOS GERENTE</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <!-- FONTAWESOME STYLES-->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <!--CUSTOM BASIC STYLES-->
    <link href="{{ asset('css/basic.css') }}" rel="stylesheet">
    <!--CUSTOM MAIN STYLES-->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <!-- GOOGLE FONTS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <style>
        body {
            font-family: "Open Sans", sans-serif;
        }

        .page-head-line {
            color: #4d4d4d;
            font-size: 28px; /* Ajustar el tamaño del título */
            margin-bottom: 20px; /* Agregar espacio inferior al título */
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f5f5f5;
        }

        .btn-danger,
        .btn-primary {
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            border-radius: 4px;
        }

        img {
            width: 150px; /* Ajustar el tamaño de la imagen */
            height: auto;
        }
    </style>
</head>
@include('servicios.header')

<body>
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">VER LISTA DE PAQUETES</h1>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th style="width: 250px;">Nombre</th> <!-- Ajustar el ancho de la columna Nombre -->
                                <th>Descripción</th>
                                @auth
                                <th>Estado</th>
                                @endauth
                                <th>Precio</th>
                                <th>Foto</th>

                                @auth
                                    <th>Acciones</th>
                                @endauth
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lista as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nombre }}</td>
                                    <td>{{ $item->descripcion }}</td>
                                    @auth
                                    <td>{{ $item->estado }}</td>
                                    @endauth
                                    <td>{{ $item->costo }}</td>
                                    <td><img src="{{ asset($item->imagen) }}" width="100" height="100"></td>
                                    @auth
                                        <td>
                                            @can('eliminar', $item)
                                                <form action="{{ route('servicios.destroy', ['id' => $item]) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                                </form>
                                            @endcan
                                            @can('editar', $item)
                                                <a href="{{ route('servicios.edit_servicios', $item->id) }}" class="btn btn-primary">Editar</a>
                                            @endcan
                                        </td>
                                    @endauth
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
