<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/stylelogin.css') }}" />
    <title>Login</title>
</head>

<body>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/stylelogin.css') }}" />

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 4">
            <div class="navbar-header">
                <style>
                 .navbar.navbar-default.navbar-cls-top {
                    background: radial-gradient(circle, rgba(63,94,251,1) 0%, rgb(70, 252, 222) 100%);
}
                    .navbar-default.navbar-side {
                        background-color: #e6eef7;

                                                    }
                    .sidebar-collapse{
                     background-color: #007bff;
                         }

                     .navbar-toggle   {
                        background-color: #007bff;

                     }


                </style>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                </button>
                <a class="navbar-brand" href="index.php">PAQUETES  </a>
            </div>

        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
           <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <!-- <div class="user-img-div">
                            <img src="img/user.png" class="img-thumbnail" />

                            <div class="inner-text">

                            <br />

                            </div>
                        </div> -->

                    </li>
                    <li>
                       <a class="active-menu" href="{{route('@inicio')}}"><i class="fa fa-dashboard "></i>Home </a>
                   </li>


                @if (Auth::user()->Roles == 'Gerente')

                    <li>
                        <a class="active-menu" href="{{route('agregar.paquetes')}}"><i class="fa fa-dashboard "></i>Agregar paquetes </a>
                    </li>
                @endif




                </ul>

            </div>
            <script src="{{ asset('js/code.js') }}" defer></script>

        </nav>
        <!-- /. NAV SIDE  -->
