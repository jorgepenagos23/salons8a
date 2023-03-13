<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
@include('plantillas.header')
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                        <style>
                        
                        div{
                            background-color:#E3E8F7;
                        }
                         .gradiente {
                              background-image: linear-gradient(to bottom, #f7b733, #fc4a1a);
                              height: 200px; /* ajusta la altura según sea necesario */}
                              .main-box{
                             background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 15%, rgba(8,25,131,1) 40%, rgba(0,212,255,1) 98%);
                                
                                }
                        </style>
                    
                    <div class="col-md-12">
                        <center>
                        <h1 >PANEL DE CONTROL</h1>
                        
                       <br><h2 style="text-align:center;"> Has accedido al <strong>SISTEMA  SALON DE EVENTOS como (GERENTE) </strong> </h2>
                        </center>
                    </div>
                </div>
                <!-- /. ROW  -->
                <style>
                        div{

                            background-color:#E3E8F7;
                            
                        }
                        .gradiente {
                        background-image: linear-gradient(to bottom, #f7b733, #fc4a1a);
                            height: 200px; /* ajusta la altura según sea necesario */
                        }
                        </style>
                
                <div class="row">
				<br><br>
				  <div class="col-md-4">
                        <div class="main-box">
                            {{-- {{route()}} --}}
                            <a href="{{route('eventos.eventos')}}">
                                <i class="fa fa-calendar fa-5x"></i>
                                <h5>VER Y AGREGAR  USUARIOS</h5>
                            </a>
                        </div>
                    </div>
				
				
                
                    <div class="col-md-4">
                        <div class="main-box">
                            <a href="{{route('paquetes.paquete')}}">
                                <i class="fa fa-th fa-5x"></i>
                                <h5>VER USUARIOS </h5>
                            </a>
                        </div>
                    </div>
					
					
					 <div class="col-md-4">
                        <div class="main-box">
                            <a href="{{route('servicios.servicios')}}">
                                <i class="fa fa-cubes fa-5x"></i>
                                <h5>VER USUARIOS</h5>
                            </a>
                        </div>
                    </div>
                  

                </div>
                <!-- /. ROW  -->

            
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <div id="footer-sec">
  Ayuda  <a href="" target="_blank">SALÓN JARDINES </a>
    </div>
   
   <script src="js/jquery-1.10.2.js"></script>	
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="js/custom1.js"></script>
    


</body>
</html><body>
    
</body>
</html>
