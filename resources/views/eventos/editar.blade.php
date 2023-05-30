
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EDITAR EVENTO</title>
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
<body>

    <style>

.row {
  margin-left: 80px;

}
    </style>

    <div class="container"style="color: WHITE;">
        <div class="row">
            <form method="POST" action="{{ route('evento.update', $evento->id) }}">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control" value="{{ $evento->nombre }}">
                </div>

                <div class="form-group">
                    <label for="descripción">Descripción</label>
                    <textarea name="descripción" class="form-control">{{ $evento->descripción }}</textarea>
                </div>

                <div class="form-group">
                    <label for="fecha_evento">Fecha de evento</label>
                    <input type="date" name="fecha_evento" class="form-control" value="{{ $evento->fecha_evento }}">
                </div>

                <div class="form-group">
                    <label for="estado">Estado:</label>
                    <select class="form-control" id="estado" name="estado" required>
                        <option value="1" @if ($evento->estado) selected @endif>Sí</option>
                        <option value="0" @if (!$evento->estado) selected @endif>No</option>
                    </select>
                </div>



                <button type="submit" class="btn btn-primary">Guardar cambios</button>
            </form>

        </div>
    </div>

</body>
</html>
