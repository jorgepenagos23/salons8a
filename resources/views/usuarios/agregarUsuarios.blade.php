
<?php
// Desactivar toda notificación de error
error_reporting(0);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PAQUETES</title>
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
@include('paquetes.header_paquete')

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">AGREGAR PAQUETES
							

						<?php
						
						?>
						</h1>
                     

                    </div>
                </div>
				
		
			<script type="text/javascript" src="js/validation/jquery.validate.min.js"></script>
                <div class="row">
				
                    <div class="col-sm-10 col-sm-offset-1">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                        </div>
						<form action="eventos.php" method="post" id="signupForm1" class="form-horizontal">
                        <div class="panel-body">
						<fieldset class="scheduler-border" >
						 <legend  class="scheduler-border">Información del Usuario a agregar :</legend>
						<div class="form-group">
								<label class="col-sm-2 control-label" for="Old">Nombre del Usuario </label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="sname" name="sname" value=""  />
								</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label" for="Old">Apellidos del Usuario </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="sname" name="sname" value=""  />
							</div>
					    </div>
						<div class="form-group">
							<label class="col-sm-2 control-label" for="Old">Domicilio del Usuario </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="sname" name="sname" value=""  />
							</div>
						</div>
				</div>
					
							
							
						
						<div class="form-group">
								<div class="col-sm-8 col-sm-offset-2">
								<input type="hidden" name="id" value="">
								<input type="hidden" name="action" value="">
								
									<button type="submit" name="save" class="btn btn-primary">Guardar </button>
								 
								   
								   
								</div>
							</div>
                         
                           
                           
                         
                           
                         </div>
							</form>
							
                        </div>
                            </div>
            
			
                </div>
               

			   
			   
		<script type="text/javascript">
		

	
		 <link href="css/datatable/datatable.css" rel="stylesheet" />
		 
		
		
		<div class="panel panel-default">
                        <div class="panel-heading">
						panel para agregar  un evento
                        </div>
                        <div class="panel-body">
                            <div class="table-sorting table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="tSortable22">
                                    <thead>
                                        <tr>
                                            <center> 
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Fecha de evento</th>
                                            <th>Total</th>
											<th>Fotos</th>
											
                                        </tr>
                                        </center>
                                    </thead>
                                    <tbody>
									
								
                                       <tr>
                                            <td> 1</td>
                                            <td>EVento Cena de Navidad</td>
                                            <td> 24 diciembre </td>
                                            <td>agregar</td>
											<td>  pendiente</td>
											<td>  
											<a href="#" class="btn btn-danger">Eliminar</a>
               								 <a href="#" class="btn btn-primary">Editar</a></td>
												
												</td>
                                        </tr>
							
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     
	<script src="js/dataTable/jquery.dataTables.min.js"></script>
    
   
    <div id="footer-sec">
DERECHOS RESERVADOS 2023 <a href="LINK" target="_blank">TECNm</a>
	</div>
   
  
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="js/custom1.js"></script>V

    
</body>
</html>

