
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

   	
</head>
@include('cliente.header_cliente')
  <div id="page-wrapper">
  <div class="row">
     <div class="col-sm-10 col-sm-offset-1">
       <div class="panel panel-primary">
                <div class="panel-heading">
                </div>
    <form action="eventos.php" method="post" id="signupForm1" class="form-horizontal">
                <div class="panel-body">
    <fieldset class="scheduler-border" >
     <legend  class="scheduler-border">Información del Evento agregar :</legend>
    <div class="form-group">
        <label class="col-sm-2 control-label" for="Old">Nombre del Cliente  </label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="sname" name="sname" value=""  />
        </div>
      </div>
    <div class="form-group">
        <label class="col-sm-2 control-label" for="Old">Numero de Telefono </label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="contact" name="contact" value="" maxlength="10" />
        </div>
      </div>


      
    <div class="form-group">
        <label class="col-sm-2 control-label" for="Old">Selecciona tu paquete</label>
        <div class="col-sm-10">
          <select  class="form-control" id="branch" name="branch" >
          <option value="" >Selecciona el Paquete de Salon </option>
          <option value="paquete1">paquete 1</option>
          <option value="paquete2">paquete 2</option>
          <option value="paquete3">paquete 3</option>
                                    
          </select>

      
        </div>

    </div>
    
  
      <div class="form-group">
        <label class="col-sm-1 control-label" for="Old"> Servicio </label>
           <div class="col-sm-10">
          <select  class="form-control" id="branch" name="branch" >
          <option value="" >Selecciona el Servicio </option>
          <option value="servicio1">Servicio 1</option>
          <option value="servicio2">Servicio 2</option>
          <option value="servicio3">Servicio 3</option>
                                        
          </select>
  <br>

  </div>
    
  <div class="form-group">
  <br><label class="col-sm-2 control-label" for="Old">Fecha  del evento </label>
        <div class="col-sm-10">
        <input type="date" id="joindate" name="joindate" value="">

        </div>
      </div>


     </fieldset>
    
    
      <fieldset class="scheduler-border" >
     <legend  class="scheduler-border">Total a pagar por el   evento:</legend>
    <div class="form-group">
        <label class="col-sm-2 control-label" for="Old">Total a pagar </label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="fees" name="fees" value=""  />
        </div>
    </div>
    
    
      <div class="form-group">
        <label class="col-sm-2 control-label" for="Password">Comentario </label>
        <div class="col-sm-10">
                  <textarea class="form-control" id="remark" name="remark"></textarea >
        </div>
      </div>
    
       <fieldset class="scheduler-border" >
     <legend  class="scheduler-border">Información Opcional:</legend>
      <div class="form-group">
        <label class="col-sm-2 control-label" for="Password">Fotografias </label>
        <div class="col-sm-10">
                  <textarea class="form-control" id="about" name="about"></textarea >
        </div>
      </div>
      
      <div class="form-group">
        <label class="col-sm-2 control-label" for="Old">Correo Electrónico del Cliente</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="emailid" name="emailid" value=""  />
        </div>
        </div>
      </fieldset>
    
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


</DIV>
  </body>
 </html>
