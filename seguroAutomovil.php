<?php
    include_once('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Servicios - NETWORK | Soluciones Móbiles para empresas</title>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <!-- Cargando fuentes -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,700italic' rel='stylesheet' type='text/css'>

    <!-- Cargando iconos -->
    <link href='css/font-awesome.min.css' rel='stylesheet' type='text/css'>

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
                        <li><p class="welcome">Bienvenido: <?php echo $_SESSION['login_user'] ?></p></li>
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="logout.php">Cerrar Sesión</a></li>
                    </ul>
                </nav>

            </div>
        </header>

        <div class="texto-encabezado text-center">

            <div class="container">
                <h1 class="display-4 wow bounceIn">Automovil</h1>
                <p class="wow bounceIn" data-wow-delay=".3s">Seguros de automoviles.</p>
                <form action="buscar.php" method="post" class="form-inline wow bounceIn" data-wow-delay=".5s">
                  <label class="sr-only" for="inlineFormInput">IdEmpleado</label>
                  <input type="text" name="buscar" class="form-control" id="inlineFormInput" placeholder="Id Empleado">
                  <button type="submit" class="btn btn-primary">Buscar</button>
                </form>
            </div>

        </div>

    </section>
    
    <section class="ruta py-3">
       <div class="container">
           
           <div class="row">
               <div class="col-12 text-right">
                   
                   <a href="profile.php">Inicio</a> » Automovil

              
               </div>
           </div>
           
       </div>
    </section>
    
    <div class="main tablaseguro py-3">
        <div class="container">
            <div class="row">
                <table class="table table-bordered wow zoomIn" data-wow-duration=".6s" data-wow-delay=".3s">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th><a href="empleado.php">Nombre Empleado</a></th>
                      <th><a href="tipopago.php">Tipo de Pago</a></th>
                      <th><a href="tiposeguro.php">Tipo de Seguro</a></th>
                      <th><a href="banco.php">Banco</a></th>
                      <th>Costo</th>
                      <th>Fecha</th>
                      <th colspan="2">Operaciones</th>
                    </tr>
                  </thead>
                  <?php
                        $poliza = file_get_contents('https://aseguradora.000webhostapp.com/index.php/poliza');
                        $jsonPoliza = json_decode($poliza, true);
                        foreach($jsonPoliza as $field=>$valor){
                            if($valor["nombre_tipoSeguro"]=="Autos"){
                                echo ('<tr><th scope="row">'.$valor["id"].'</th><td>'.$valor["nombre_empleado"].'</td><td>'.$valor["tipo_pago"].
                                '</td><td>'.$valor["nombre_tipoSeguro"].'</td><td>'.$valor["nombre_banco"].'</td><td>'.$valor["costo"].'</td><td>'.$valor["fecha"].'</td><td><a href="editar.php?id='.$valor["id"].'">Editar</a></td><td><a href="eliminar.php?id='.$valor["id"].'">Eliminar</a></td></tr>');    
                            }                 
                        }
                    ?>
                </table>
                <div id="error"></div>
            </div>
        </div>
    </div>
    
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
     
</body>
         
</html>
