<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EDITAR PAQUETE</title>
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
<body>

    <style>

.row {
  margin-left: 80px;

}
    </style>
<div class="container" style="color: white;">
    <div class="row">
        <form action="{{ route('servicios.update', ['servicio' => $servicio->id]) }}" method="POST">
            @csrf
        @method('PUT')

        <div class="form-group">
          <label for="nombre">Nombre:</label>
          <input type="text" name="nombre" class="form-control" value="{{ $servicio->nombre }}" required>
        </div>

        <div class="form-group">
          <label for="descripcion">Descripción:</label>
          <textarea name="descripcion" class="form-control" required>{{ $servicio->descripcion }}</textarea>
        </div>

        <div class="form-group">
            <label for="estado">Estado:</label>
            <select class="form-control" id="estado" name="estado" required>
                <option value="1" @if ($servicio->estado) selected @endif>Sí</option>
                <option value="0" @if (!$servicio->estado) selected @endif>No</option>
            </select>
        </div>


        <div class="form-group">
          <label for="costo">Precio:</label>
          <input type="number" name="costo" class="form-control" value="{{ $servicio->costo }}" required>
        </div>

        <div class="form-group">
            <label for="imagen">Imagen:</label>
            <textarea name="imagen" class="form-control" required>{{ $servicio->imgaen }}</textarea>
          </div>


        <button type="submit" class="btn btn-primary">Actualizar Servicio</button>
      </form>
    </div>
  </div>




</body>
</html>
