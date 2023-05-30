<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Salón de Fiestas</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            background: linear-gradient(45deg, #f0b7b7, #a33af8);
        }

        .title {
            font-size: 4rem;
            color: #dc3545;
            margin-top: 3rem;
        }

        .links a {
            color: #fff;
            font-size: 1.5rem;
            margin-right: 1.5rem;
        }

        .carousel-container {
            position: relative;
        }

        .carousel {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="title">Salón de Fiestas</h1>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-md-6">
                <a href="{{ route('gerente.showLoginForm') }}" class="btn btn-danger btn-lg btn-block">Iniciar Sesión</a>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-md-6">
                <a href="{{ route('paquetes.paquete') }}" class="btn btn-primary btn-lg btn-block">Ver Paquetes</a>
            </div>
        </div>
    </div>

    <!-- Carrusel de fotos -->
    <div class="carousel-container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="css/salones.jpg" class="d-block w-100" alt="Image 1">
                </div>
                <div class="carousel-item">
                    <img src="css/salones2.jpg" class="d-block w-100" alt="Image 2">
                </div>
                <div class="carousel-item">
                    <img src="css/salon4.jpg" class="d-block w-100" alt="Image 3">
                </div>
                <div class="carousel-item">
                    <img src="css/salon2.jpg" class="d-block w-100" alt="Image 4">
                </div>
                <div class="carousel-item">
                    <img src="css/salon3.jpg" class="d-block w-100" alt="Image 5">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
