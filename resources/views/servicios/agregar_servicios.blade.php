<?php

// Desactivar toda notificación de error
error_reporting(0);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SERVICIOS</title>
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
@include('servicios.header2')

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">AGREGAR SERVICIOS
							

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
						 <legend  class="scheduler-border">Información del Servicio a  agregar :</legend>
						<div class="form-group">
								<label class="col-sm-2 control-label" for="Old">Nombre del Servicio </label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="sname" name="sname" value=""  />
								</div>
							</div>
						<div class="form-group">
								<label class="col-sm-2 control-label" for="Old">Costo del Servicio</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="contact" name="contact" value="" maxlength="10" />
								</div>
							</div>


							
					
				
						
					
							<div class="form-group">
								<label class="col-sm-2 control-label" for="Password">Comentarios del Servicio </label>
								<div class="col-sm-10">
	                        <textarea class="form-control" id="remark" name="remark"></textarea >
								</div>
							</div>
					
							</fieldset>
							
							 <fieldset class="scheduler-border" >
						 <legend  class="scheduler-border">Información Opcional:</legend>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="Password">Fotografias </label>
								<div class="col-sm-10">
	                        <textarea class="form-control" id="about" name="about"></textarea >
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
               

			   
			   
		

   




    <div id="footer-sec">

DERECHOS RESERVADOS 2023  <a href="LINK" target="_blank">TECNm</a>
	</div>
   
  
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="js/custom1.js"></script>V
    
</body>
</html>
