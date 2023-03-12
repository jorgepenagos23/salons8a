
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
            <th>d</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Juan</td>
            <td>Pérez</td>
            <td>28</td>
          </tr>
          <tr>
            <td>2</td>
            <td>María</td>
            <td>López</td>
            <td>35</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Pablo</td>
            <td>González</td>
            <td>42</td>
            <td><img src="{{ asset('css/descarga.jpg') }}" width="100" height="100"></td>
            <td><a href="#" class="btn btn-danger">Eliminar</a>
                <a href="#" class="btn btn-primary">Editar</a></td>

            </td>
            <td>
          </tr>
         
        </tbody>

      </table>

</div>
<div class="panel panel-primary">
<div class="col-sm-10 col-sm-offset-1">
    <div class="panel-body">

                      <div class="col-md-8">
                        <div class="card">
                          <div class="card-header">Agregar evento</div>
                          <div class="card-body">
                            <form method="POST" action="">
                              @csrf

                              <div class="form-group">
                                <label for="titulo">Título</label>
                                <input type="text" class="form-control @error('titulo') is-invalid @enderror" id="titulo" name="titulo" value="{{ old('titulo') }}" required autofocus>
                                @error('titulo')
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                              </div>

                              <div class="form-group">
                                <label for="descripcion">Descripción</label>
                                <textarea class="form-control @error('descripcion') is-invalid @enderror" id="descripcion" name="descripcion" rows="3" required>{{ old('descripcion') }}</textarea>
                                @error('descripcion')
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                              </div>

                              <fieldset class="scheduler-border" >
                              <div class="form-group">
                                <label for="fecha">Fecha</label>
                                <input type="date" class="form-control @error('fecha') is-invalid @enderror" id="fecha" name="fecha" value="{{ old('fecha') }}" required>
                                @error('fecha')
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                              </div>

                              <fieldset class="scheduler-border" >
                              <div class="form-group">
                                <label for="hora">Hora</label>
                                <input type="time" class="form-control @error('hora') is-invalid @enderror" id="hora" name="hora" value="{{ old('hora') }}" required>
                                @error('hora')
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                              </div>
                              <fieldset class="scheduler-border" >
                              <div class="form-group">
                                <label for="lugar">Lugar</label>
                                <input type="text" class="form-control @error('lugar') is-invalid @enderror" id="lugar" name="lugar" value="{{ old('lugar') }}" required>
                                @error('lugar')
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                              </div>
                  
                                <label for="lugar">Fotografias</label>
                                <input type="text" class="form-control @error('foto') is-invalid @enderror" id="lugar" name="lugar" value="{{ old('lugar') }}" required>
                                @error('lugar')
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                              </div>



                              <button type="submit" class="btn btn-primary">Agregar</button>
                            </form>
                          </div>
                        </div>
                      </div>
                      

                    </div>
                    </div>
                    </div>
                    </body>
                    </html>
