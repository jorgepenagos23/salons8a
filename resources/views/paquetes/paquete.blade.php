
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

	 <script src="js/jquery-1.10.2.js"></script>



</head>

@include('paquetes.header')
<?php

?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Paquetes
						<?php
						?>
						</ah1>

                 </div>
                </div>

		 <link href="css/datatable/datatable.css" rel="stylesheet" />
		<div class="panel panel-default">
                        <div class="panel-heading">
                         Panel para    Administrar la
                        </div>
                        <div class="panel-body">
                             <div class="table-sorting table-responsive">
                                <table class="table">
                                    <thead>
                                      <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Descripcion</th>
                                        <th>Precio</th>
                                        <th>Fotografia</th>

                                      </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($lista AS $item)
                                      <tr>
                                        <td>{{$item->id_paquete}}</td>
                                        <td>{{$item->nombre}}</td>
                                        <td>{{$item->descripción}}</td>
                                        <td>{{$item->precio}}</td>
                                        <td> <img src="{{ asset('css/paquete1.jpg') }}" width="100" height="100"></td>
                                        <td>
                                            <a href="{{ route('paquetes.edit_paquetes', $item->id_paquete) }}" class="btn btn-primary">Editar</a>
                                            <form action="{{ route('paquetes.destroy',['id_paquete' => $item])}}" method="POST">
                                                @csrf


                                                @auth
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                                @endauth
                                            </form>


                                       </td>
                                      </tr>

                                      @endforeach
                                    </tbody>

                                  </table>

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
    <!-- /. WRAPPER  -->


</body>
</html>
