
<?php

// Desactivar toda notificación de error
error_reporting(0);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EVENTOS</title>
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
@include('plantillas.header2')
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">VER LISTA DE EVENTOS 
							

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
						  <div>
							  <table class="table">
								  <thead>
									<tr>
									  <th>#</th>
									  <th>Titulo</th>
									  <th>Descripción</th>
									  <th>Fecha</th>
									  <th>Fotografias</th>
									  <th>Atajos</th>
									</tr>
								  </thead>
								  <tbody>
									<tr>
									  <td>1</td>
									  <td>BAUTIZO DE JUANITO</td>
									  <td>PAQUETE MEMORIAL 100 PERSONAS</td>
									  <td>28 ABRIL 2023 </td>
									  <td>
									<img src="{{ asset('css/descarga.jpg') }}" width="100" height="100">
									  </td>
									  <td>
										<a href="#" class="btn btn-warning">Agregar fotos</a>
									  </td>
									</tr>
									<tr>
									  <td>2</td>
									  <td>BAUTIZO DE JUANITO</td>
									  <td>PAQUETE MEMORIAL 100 PERSONAS</td>
									  <td>28 ABRIL 2023 </td>
									  <td>
									<img src="{{ asset('css/descarga.jpg') }}" width="100" height="100">
									  </td>
									  <td>
										<a href="#" class="btn btn-warning">Agregar fotos</a>
									  </td>
									</tr>
									<tr>
									  <td>3</td>
									  <td>BAUTIZO DE JUANITO</td>
									  <td>PAQUETE MEMORIAL 100 PERSONAS</td>
									  <td>28 ABRIL 2023 </td>
									  <td><img src="{{ asset('css/descarga.jpg') }}" width="100" height="100"></td>
									  <td><a href="#" class="btn btn-warning">Agregar fotos</a>
									  </td>
									  <td>
									</tr>
								   
								  </tbody>
								</table>
                   				 </div>


					
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="js/custom1.js"></script>V

    
</body>
</html>
