<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Abonos</title>
    <!-- Enlaces CSS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- Estilos personalizados -->
    <style>
        body {
            background: linear-gradient(to bottom, #ffff00, #0000ff);
            margin-top: 50px;
            padding: 40px;
            border-radius: 10px;
        }

        .navbar {
            background-color: #ffffff;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">Retroceso</a>
    </nav>

    <div class="container mt-4">
        <h2>Formulario de Abonos</h2>

        <form action="{{ route('abonos.store') }}" method="POST">
            @csrf

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
                <select name="id_evento" id="id_evento" class="form-control @error('id_evento') is-invalid @enderror" required>
                    <option value="">Seleccionar evento</option>

                    @foreach (\App\Models\EventosModel::where('cliente_id', auth()->user()->id)->where('estado', 1)->get() as $evento)
                    <option value="{{ $evento->id }}" {{ old('id_evento') == $evento->cliente_id ? 'selected' : '' }}>
                        {{ $evento->nombre }} - Costo: {{ $evento->costo }}
                    </option>
                @endforeach
                </select>
                @error('id_evento')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>






            <div class="form-group row">
                <label for="cliente_id" class="col-md-4 col-form-label text-md-right">{{ __('Usuario ID') }}</label>
                <div class="col-md-6">
                    <select name="cliente_id" id="cliente_id" class="form-control @error('cliente_id') is-invalid @enderror" required>
                        @auth
                            <option value="{{ auth()->user()->id }}">{{ auth()->user()->id }}</option>
                        @endauth
                    </select>
                    @error('cliente_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
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
