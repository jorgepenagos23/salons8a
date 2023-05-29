
<?php

// Desactivar toda notificación de error
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
<style>

    .row {
      margin-left: 60px;

    }
        </style>


@include('cliente.header_cliente')

<div class="container" style="color: WHITE;">
    <div class="row">
        <div class="col-md-8">
<div class="container" style="color: WHITE;">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Agregar Evento') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('eventos.store') }}">
                        @csrf


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
                            <label for="id_paquete" class="col-md-4 col-form-label text-md-right">{{ __('Seleccione su Paquete') }}</label>

                            <div class="col-md-6">
                                <select name="id_paquete" id="id_paquete" class="form-control @error('id_paquete') is-invalid @enderror" required>
                                    <option value="">Seleccionar paquete</option>
                                    @foreach (\App\Models\PaquetesModel::all() as $paquete)
                                        <option value="{{ $paquete->id_paquete }}" {{ old('id_paquete') == $paquete->id_paquete ? 'selected' : '' }}>
                                            {{ $paquete->nombre }} - Costo: {{ $paquete->costo }}
                                            <br><br>
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_paquete')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        <div class="form-group row">
                            <br><br>
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre del Evento: ') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre">

                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="descripción" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>

                            <div class="col-md-6">
                                <textarea id="descripción" class="form-control @error('descripción') is-invalid @enderror" name="descripción" autocomplete="descripción">{{ old('descripción') }}</textarea>

                                @error('descripcion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fecha_evento" class="col-md-4 col-form-label text-md-right">{{ __('Fecha del evento') }}</label>

                            <div class="col-md-6">
                                <input id="fecha_evento" type="date" class="form-control @error('fecha_evento') is-invalid @enderror" name="fecha_evento" value="{{ old('fecha_evento') }}" required autocomplete="fecha_evento">

                                @error('fecha_evento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="estado" class="col-md-4 col-form-label text-md-right">{{ __('Seleccionar si desea confirmar su evento') }}</label>
                            <div class="col-md-6">
                                <select name="estado" id="estado" class="form-control @error('estado') is-invalid @enderror" required>
                                    <option value="">Seleccione</option>
                                    <option value="1" {{ old('estado') == 1 ? 'selected' : '' }}>Activo</option>
                                    <option value="0" {{ old('estado') == 0 ? 'selected' : '' }}>Pendiente</option>
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
                                    {{ __('Agregar Evento') }}
                                </button>
                            </div>




                     </div>
                    </div
                     </div>
                     </div
                      </div>
                </div>
            </div>
        </div>
    </div>
  </body>
 </html>
