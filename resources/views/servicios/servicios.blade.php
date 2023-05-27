
<?php

// Desactivar toda notificación de error
error_reporting(0);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LISTAR SERVICIOS  GERENTE</title>
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
@include('servicios.header')
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">VER LISTA DE SERVICIOS


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
						   <div class="panel-body">
                            <div class="table-sorting table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="tSortable22">
                                    <thead>
                                        <tr>
                                            <center>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Descripción</th>
                                            <th>Precio</th>
											<th>Fotos</th>

                                        </tr>
                                        </center>
                                    </thead>

                                    <tbody>
                                        @foreach ($lista AS $item)
                                        <tr>
                                          <td>{{$item->id}}</td>
                                          <td>{{$item->nombre}}</td>
                                          <td>{{$item->descripcion}}</td>
                                          <td>{{$item->costo}}</td>
                                          <td> <img src="{{ asset('css/party.jpeg') }}" width="100" height="100"></td>
                                          <td> <img src="{{ asset('css/payaso.jpg') }}" width="100" height="100"></td>
                                          <td> <img src="{{ asset('css/trampolin.jpg') }}" width="100" height="100"></td>


                                          <td>


                                              <a href="{{ route('servicios.edit_servicios', $item->id) }}" class="btn btn-primary">Editar</a>

                                              <form action="{{ route('servicios.destroy',['id' => $item])}}" method="POST">
                                                  @csrf
                                                  @method('DELETE')
                                                  <button type="submit" class="btn btn-danger">Eliminar</button>
                                              </form>


                                         </td>
                                        </tr>
                                        @endforeach





                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>





</body>
</html>
