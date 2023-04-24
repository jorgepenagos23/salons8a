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
          <label for="descripción">Descripción:</label>
          <textarea name="descripción" class="form-control" required>{{ $servicio->descripción }}</textarea>
        </div>

        <div class="form-group">
          <label for="precio">Precio:</label>
          <input type="number" name="precio" class="form-control" value="{{ $servicio->precio }}" required>
        </div>


        <button type="submit" class="btn btn-primary">Actualizar Servicio</button>
      </form>
    </div>
  </div>




</body>
</html>
