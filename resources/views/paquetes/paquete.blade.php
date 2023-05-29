<?php
// Desactivar toda notificación de error
error_reporting(0);
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LISTAR PAQUETES</title>
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
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="js/jquery-1.10.2.js"></script>
</head>
@include('paquetes.header')

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Paquetes</h1>
            </div>
        </div>

        <link href="css/datatable/datatable.css" rel="stylesheet" />
        <div class="panel panel-default">
            <div class="panel-heading">
                Panel para Administrar PAQUETES
            </div>
            <div class="panel-body">
                <div class="table-sorting table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Costo</th>
                                <th>Imagen</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lista AS $item)
                            <tr>
                                <td>{{$item->id_paquete}}</td>
                                <td>{{$item->nombre}}</td>
                                <td>{{$item->descripcion}}</td>
                                <td>{{$item->costo}}</td>
                                <td> <img src="{{ asset('css/paquete1.jpg') }}" width="100" height="100"></td>
                                <td>
                                    @can('edit', $item)
                                    <a href="{{ route('paquetes.edit_paquetes', $item->id_paquete) }}" class="btn btn-primary">Editar</a>
                                    <form action="{{ route('paquetes.destroy',['id_paquete' => $item])}}" method="POST">
                                     @endcan
                                        @csrf
                                        @method('DELETE')
                                        @auth
                                            <!-- Contenido visible solo para usuarios autenticados (Gerente) -->
                                            @if (Auth::user()->Roles == 'Gerente')
                                                <p>Bienvenido {{ Auth::user()->usuario }}</p>
                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                            @endif
                                        @endauth
                                    </form>
                                    @guest
                                        <!-- Contenido visible solo para usuarios no autenticados -->
                                        <p>Inicia sesión para acceder al contenido protegido.</p>
                                    @endguest
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
</div>
<script src="{{ asset('js/code.js') }}" defer></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
