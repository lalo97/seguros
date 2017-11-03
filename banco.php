<?php
    include_once('session.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Insurence Administrator | Todo al alcance de tu mano</title>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <!-- Cargando fuentes -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,700italic' rel='stylesheet' type='text/css'>

    <!-- Cargando iconos -->
    <link href='css/font-awesome.min.css' rel='stylesheet' type='text/css'>

    <!-- Carga de Galeria de imágenes -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Carga de archivos css -->
    <link rel="stylesheet" href="css/bootstrap.css"> 
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body class="paginas-internas">
    <section class="bienvenidos" id="encabezado">

        <header class="encabezado fixed-top" role="banner" id="encabezado">
            <div class="container">
                <a href="index.php" class="logo">
                    <img src="images/logo.svg" alt="Logo del sitio">
                </a>
                <button type="button" class="boton-buscar" data-toggle="collapse" data-target="#bloque-buscar" aria-expanded="false">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
                <button type="button" class="boton-menu hidden-md-up" data-toggle="collapse" data-target="#menu-principal" aria-expanded="false">
                    <i class="fa fa-bars" aria-hidden="true"></i></button>

                <form class="collapse" method="post" action="buscar.php" id="bloque-buscar">
                    <div class="contenedor-bloque-buscar">
                        <input type="text" name="buscar" placeholder="Id Empleado...">
                        <input type="submit" value="Buscar">
                    </div>
                </form>
                
                <nav class="collapse" id="menu-principal">
                    <ul>
                        <li><p class="welcome">Bienvenido: <strong><?php echo $_SESSION['login_user'] ?></strong></p></li>
                        <li class="active"><a href="index.php">Inicio</a></li>
                        <li><a href="agregarPoliza.php">Agregar Poliza</a></li>
                        <li><a href="agregarEmpleado.php">Agregar Empleado</a></li>
                        <li><a href="logout.php">Cerrar Sesión</a></li>
                    </ul>
                </nav>

            </div>
        </header>


        <div class="texto-encabezado text-center">

            <div class="container">
                <h1 class="display-4 wow bounceIn">Bancos</h1>
            </div>

        </div>
        <div class="flecha-bajar text-center">
            <a data-scroll href="#agencia"> <i class="fa fa-angle-down" aria-hidden="true"></i></a>
        </div>

    </section>
    
    <main class="tu-mejor-eleccion py-3">
        <div class="container">

            <h2 class="h2 text-center font-weight-bold">Tipos de <span>aseguradoras</span></h2>

            <div class="row">
              
               <ul class="hidden-sm-down my-3 lista-aseguradoras col-lg-12 text-center text-lg-left">
                  
                   <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".3s">
                        <div class="contenedor-eleccion">
                           <a href="seguroHogar.php">
                            <img src="images/SeguroCasa.svg" alt="">
                            <h4>Hogar</h4>
                           </a>
                        </div>
                    </li>
                    
                    <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".5s">
                        <div class="contenedor-eleccion">
                           <a href="seguroGMM.php">
                            <img src="images/SeguroGMM.svg" alt="">
                            <h4>Gastos Medicos Mayores</h4>
                           </a>
                        </div>
                    </li>
                    
                    <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".7s">
                        <div class="contenedor-eleccion">
                           <a href="seguroAutomovil.php">
                            <img src="images/SeguroAuto.svg" alt="">
                            <h4>Automovil</h4> 
                           </a>
                        </div>
                    </li>
                    
                    <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".9s">
                        <div class="contenedor-eleccion">
                           <a href="seguroVida.php">
                            <img src="images/SeguroVida.svg" alt="">
                            <h4>Vida</h4>
                           </a>
                        </div>
                    </li>
               </ul>
               
                <ul class="hidden-md-up col-6 text-center">
                   
                    <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".3s">
                        <div class="contenedor-eleccion">
                            <a href="seguroHogar.php">
                            <img src="images/SeguroCasa.svg" alt="">
                            <h4>Hogar</h4>
                           </a>
                        </div>
                    </li>
                    
                    <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".7s">
                        <div class="contenedor-eleccion">
                           <a href="seguroGMM.php">
                            <img src="images/SeguroGMM.svg" alt="">
                            <h4>Gastos Medicos Mayores</h4>
                           </a>
                        </div>
                    </li>
                    
                </ul>

                <ul class="hidden-md-up col-6 text-center text-lg-right">
                   
                    <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".5s">
                        <div class="contenedor-eleccion">
                           <a href="seguroAutomovil.php">
                            <img src="images/SeguroAuto.svg" alt="">
                            <h4>Automovil</h4> 
                           </a>
                        </div>
                    </li>
                    
                    <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".9s">
                        <div class="contenedor-eleccion">
                           <a href="seguroVida.php">
                            <img src="images/SeguroVida.svg" alt="">
                            <h4>Vida</h4>
                           </a>
                        </div>
                    </li>
                    
                </ul>
            </div>
        </div>
    </main>
    
    <section class="agencia py-3" id="agencia">

        <div class="container">

            <div class="row">
                <table class="table table-responsive table-bordered wow zoomIn" data-wow-duration=".6s" data-wow-delay=".3s">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Banco</th>
                      <th>Cuenta</th>
                    </tr>
                  </thead>
                  <tbody id="tabla-empleado">
                    <?php
                        require("conexion.php");
                        $query = "SELECT * FROM banco";
                        $res = mysqli_query($conn, $query);
                        if(mysqli_num_rows($res) > 0) {
                            while ($elements = mysqli_fetch_assoc($res)){
                                    echo ('<tr><th scope="row">'.$elements["id"].'</th><td>'.$elements["bankName"].'</td><td>'.$elements["account"].'</td></tr>');
                            }
                        }else{
                            echo "0 Results";
                        }
                    ?>
                  </tbody>
                </table>

            </div>
        </div>

    </section>
    
    
    <footer class="piedepagina py-3" role="contentinfo">
        <div class="container">
            <p>2017 © Insurence Administrator Todos los derechos reservados</p>
        </div>

    </footer>

    <!-- Carga de archivos  JS -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/wow.min.js"></script>    
    <script src="js/smooth-scroll.min.js"></script>    
    <script src="js/sitio.js"></script>    
    
    </script>

</body>

</html>
