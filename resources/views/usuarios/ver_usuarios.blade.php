
<?php

// Desactivar toda notificación de error
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SERVICIOS GERENTE</title>
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

</head>
@include('plantillas.header6')
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">VER LISTA DE USUARIOS


						<?php

						?>
						</h1>
						<style>
							h3 {
							  color: rgb(77, 77, 77);

						  }
						  div{

							  zoom: 1.0; /* Aumenta el tamaño del navbar en un 20% */
						  }

						  </style>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                         Listar Usuarios
                        </div>
                        <div class="panel-body">
                             <div class="table-sorting table-responsive">
                                <table class="table">
                                    <thead>
                                      <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Roles</th>
                                        <th>Apellidos</th>
                                        <th>Direccion</th>
                                        <th>Telefono</th>
                                        <th>Edad</th>
                                        <th>Email</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($lista AS $item)
                                      <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->nombre}}</td>
                                        <td>{{$item->Roles}}</td>
                                        <td>{{$item->apellidos}}</td>
                                        <td>{{$item->direccion}}</td>
                                        <td>{{$item->telefono}}</td>
                                        <td>{{$item->edad}}</td>
                                        <td>{{$item->email}}</td>




                                        <td> <img src="{{ asset('users_img/user1.png') }}" width="100" height="100"></td>
                                        <td>
                                            <form action="{{ route('usuarios.destroy',['id' => $item])}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                            </form>
                                         <a href="{{ route('usuarios.edit_usuario', ['id' => $item]) }}" class="btn btn-primary">Editar</a>

                                        </td>
                                      </tr>

                                       <tr>
                                       </tr>
                                      @endforeach
                                    </tbody>

                                  </table>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>




</body>
</html>
