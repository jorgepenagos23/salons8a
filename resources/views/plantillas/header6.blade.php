<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 4">
            <div class="navbar-header">
                <style>
                 .navbar.navbar-default.navbar-cls-top {
                    background: radial-gradient(circle, rgba(63,94,251,1) 0%, rgb(219, 252, 70) 100%);
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
                <a class="navbar-brand" href="index.php">SALON  </a>
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
                       <a class="active-menu" href="{{route('gerente.gerenteinicio2')}}"><i class="fa fa-dashboard "></i>Home </a>
                   </li>


                    <li>
                        <a class="active-menu" href="{{route('usuarios.agregarUsuarios')}}"><i class="fa fa-dashboard "></i>Agregar Usuario</a>
                    </li>




                     <li>
                        <a href="#"><i class="fa fa-power-off "></i>Cerrar Sesión</a>
                    </li>


                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
