<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Abonos</title>
    <!-- Enlaces CSS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-4">
        <h2>Formulario de Abonos</h2>

        <form action="{{ route('abonos.store') }}" method="POST">
            @csrf

            <div class="form-group row">
                <label for="id" class="col-sm-2 col-form-label">ID:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="id" name="id">
                </div>
            </div>

            <div class="form-group row">
                <label for="fecha_pago" class="col-sm-2 col-form-label">Fecha de Pago:</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="fecha_pago" name="fecha_pago">
                </div>
            </div>

            <div class="form-group row">
                <label for="abono_cantidad" class="col-sm-2 col-form-label">Cantidad de Abono:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="abono_cantidad" name="abono_cantidad">
                </div>
            </div>

            <div class="form-group row">
                <label for="id_paquete" class="col-sm-2 col-form-label">ID del Paquete:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="id_paquete" name="id_paquete">
                </div>
            </div>

            <div class="form-group row">
                <label for="cliente_id" class="col-sm-2 col-form-label">ID del Cliente:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="cliente_id" name="cliente_id">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Enlaces JS de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>
