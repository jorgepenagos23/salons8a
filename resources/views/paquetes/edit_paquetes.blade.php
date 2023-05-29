
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
@include('paquetes.header_paquete')
<body>

    <style>

.row {
  margin-left: 60px;

}
    </style>

    <div class="container"style="color: WHITE;">
        <div class="row">
            <form action="{{ route('paquetes.update', ['id_paquete' => $paquete->id_paquete]) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                  <label for="nombre">Nombre:</label>
                  <input type="text" name="nombre" class="form-control" value="{{ $paquete->nombre }}" required>
                </div>

                <div class="form-group">
                  <label for="descripcion">Descripción:</label>
                  <textarea name="descripcion" class="form-control" required>{{ $paquete->descripcion }}</textarea>
                </div>

                <div class="form-group">
                  <label for="costo">Precio:</label>
                  <input type="number" name="costo" class="form-control" value="{{ $paquete->costo }}" required>
                </div>

                <div class="form-group">
                    <label for="estado">Activo:</label>
                    <select class="form-control" id="estado" name="estado" required>
                        <option value="1" @if ($paquete->estado) selected @endif>Sí</option>
                        <option value="0" @if (!$paquete->estado) selected @endif>No</option>
                    </select>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Guardar cambios') }}
                        </button>
                    </div>
                </div>



        </div>
    </div>

</body>
</html>
