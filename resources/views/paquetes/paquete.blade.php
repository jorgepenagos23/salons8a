
<?php

// Desactivar toda notificación de error
error_reporting(0);
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PAQUETESr</title>
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
                     
<?php

echo $errormsg;
?>
                    </div>
                </div>
				
				
				
        <?php 
        error_reporting(0);

		 if(isset($_GET['action']) && @$_GET['action']=="add" || @$_GET['action']=="edit")
		 {
		?>
		
			<script type="text/javascript" src="js/validation/jquery.validate.min.js"></script>
                <div class="row">
				
                    <div class="col-sm-8 col-sm-offset-2">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           <?php echo ($action=="add")? "Agregar paquete ": "Editar paquete "; ?>
                        </div>
						<form action="paquetes.php" method="post" id="signupForm1" class="form-horizontal">
                        <div class="panel-body">
						
						
						
						
						<div class="form-group">
								<label class="col-sm-2 control-label" for="Old">Seleccionar paquete </label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="branch" name="branch" value=""  />
								</div>
							</div>
							
							
							<div class="form-group">
								<label class="col-sm-2 control-label" for="Password">Evento </label>
								<div class="col-sm-10">
	                        <textarea class="form-control" id="address" name="address"></textarea >
								</div>
							</div>
							
							
							<div class="form-group">
								<label class="col-sm-2 control-label" for="Confirm"> Detalles</label>
								<div class="col-sm-10">
									    <textarea class="form-control" name="detail" id="detail"><?php echo $detail;?></textarea >
								</div>
							</div>
						
						<div class="form-group">
								<div class="col-sm-8 col-sm-offset-2">
								<input type="hidden" name="id" value="<?php echo $id;?>">
								<input type="hidden" name="action" value="<?php echo $action;?>">
								
									<button type="submit" name="save" class="btn btn-primary">Guardar </button>
								</div>
							</div>
                         
                           
                           
                         
                           
                         </div>
							</form>
							
                        </div>
                            </div>
            
			
                </div>
               

			   
	


	   
		<?php
		}else{
		?>
		
		 <link href="css/datatable/datatable.css" rel="stylesheet" />
		 
		
		 
		 
		<div class="panel panel-default">
                        <div class="panel-heading">
                         Panel para    Administrar la  Información de los paquetes 
                        </div>
                        <div class="panel-body">
                             <div class="table-sorting table-responsive">
                                <table class="table">
                                    <thead>
                                      <tr>
                                        <th>#</th>
                                        <th>Titulo</th>
                                        <th>Descripción</th>
                                        <th>Fecha</th>
                                        <th>Fotografias</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                            
                                      <tr>
                                        <td>1</td>
                                        <td>PAQUETE 1</td>
                                        <td>XV AÑOS </td>
                                        <td>28 MAYO 2023</td>
                                        <td><img src="{{ asset('css/paquete1.jpg') }}" width="100" height="100"></td>
                                        <td>
                                            <a href="#" class="btn btn-danger">Eliminar</a>
                                            <a href="#" class="btn btn-primary">Editar</a></td>
                            
                            
                                        </td>
                                      </tr>
                            
                                      <tr>
                                        <td>1</td>
                                        <td>PAQUETE 1</td>
                                        <td>XV AÑOS </td>
                                        <td>28 MAYO 2023</td>
                                        <td><img src="{{ asset('css/paquete1.jpg') }}" width="100" height="100"></td>
                                        <td> 
                                            <a href="#" class="btn btn-danger">Eliminar</a>
                                            <a href="#" class="btn btn-primary">Editar</a></td>
                            
                                        </td>
                                      </tr>
                            
                                      <tr>
                                        <tr>
                                            <td>1</td>
                                            <td>PAQUETE 1</td>
                                            <td>XV AÑOS </td>
                                            <td>28 MAYO 2023</td>
                                
                            
                                        <td><img src="{{ asset('css/paquete1.jpg') }}" width="100" height="100"></td>
                                        <td>
                                            <a href="#" class="btn btn-danger">Eliminar</a>
                                            <a href="#" class="btn btn-primary">Editar</a></td>
                            
                                        </td>
                                        <td>
                                      </tr>
                                     
                                    </tbody>
                            
                                  </table>
                            
                                






                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     
									
		
		<?php
		}
		?>
				
				
            
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <div id="footer-sec">
	Para más desarrollos gratuitos, accede a <a href="https://www.configuroweb.com/" target="_blank">ConfiguroWeb</a>
    </div>
   
  
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="js/custom1.js"></script>

    
</body>
</html>
