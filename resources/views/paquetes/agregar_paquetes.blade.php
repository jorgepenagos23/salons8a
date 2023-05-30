<?php // Desactivar toda notificación de error ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PAQUETES</title>
    <!-- BOOTSTRAP STYLES -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <!-- FONTAWESOME STYLES -->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <!-- CUSTOM BASIC STYLES -->
    <link href="{{ asset('css/basic.css') }}" rel="stylesheet">
    <!-- CUSTOM MAIN STYLES -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <!-- GOOGLE FONTS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <style>
        .row {
            margin-left: auto;
            margin-right: auto;
            margin-top: 40px;
        }

        .card-header {
            text-align: center;
            background-color: #f5f5f5;
        }

        .form-group.row {
            margin-bottom: 15px;
        }
    </style>
</head>

@include('paquetes.header_paquete')

<body style="color: white;">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">{{ __('Agregar Paquete') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('paquetes.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                                <div class="col-md-6">
                                    <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>
                                    @error('nombre')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="descripcion" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                                <div class="col-md-6">
                                    <textarea id="descripcion" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" required autocomplete="descripcion">{{ old('descripcion') }}</textarea>
                                    @error('descripcion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="costo" class="col-md-4 col-form-label text-md-right">{{ __('Costo') }}</label>
                                <div class="col-md-6">
                                    <input id="costo" type="number" class="form-control @error('costo') is-invalid @enderror" name="costo" value="{{ old('costo') }}" required autocomplete="costo">
                                    @error('costo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="capacidad" class="col-md-4 col-form-label text-md-right">{{ __('Capacidad') }}</label>
                                <div class="col-md-6">
                                    <input id="capacidad" type="number" class="form-control @error('capacidad') is-invalid @enderror" name="capacidad" value="{{ old('capacidad') }}" required autocomplete="capacidad">
                                    @error('capacidad')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="gerente_id" class="col-md-4 col-form-label text-md-right">{{ __('Su ID DE Gerente') }}</label>
                                <div class="col-md-6">
                                    <select name="gerente_id" id="gerente_id" class="form-control @error('gerente_id') is-invalid @enderror" required>
                                        @auth
                                        <option value="{{ auth()->user()->id }}">{{ auth()->user()->id }} - {{ auth()->user()->nombre }}</option>
                                        @endauth
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="estado" class="col-md-4 col-form-label text-md-right">{{ __('Activo') }}</label>
                                <div class="col-md-6">
                                    <select id="estado" class="form-control @error('estado') is-invalid @enderror" name="estado" required autocomplete="estado">
                                        <option value="1" {{ old('estado') == '1' ? 'selected' : '' }}>Sí</option>
                                        <option value="0" {{ old('estado') == '0' ? 'selected' : '' }}>No</option>
                                    </select>
                                    @error('estado')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Agregar Paquete') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
