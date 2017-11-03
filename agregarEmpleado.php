<?php
  session_start();// Starting Session
  $error = '';
  // Storing Session
  $user_check=$_SESSION['login_user'];
  if(!isset($user_check)){
    header('Location: index.php'); // Redirecting To Home Page
  }

  if (isset($_POST['submit'])) {
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $puesto=$_POST["puesto"];
    $email = $_POST["correo"];
    $tel=$_POST["tel"];
    $telEmergencias=$_POST["telEmergencias"];
    
        if (empty($nombre) || empty($apellido) || empty($puesto) || empty($tel)|| empty($email) || empty($telEmergencias)) {
            $error = "Falto llenar algun campo";
        }
        else{
            require("conexion.php");
            $query = "INSERT INTO empleado (`id`, `firstName`, `lastName`, `work`, `mail`, `telephone`, `emergencyTelephone`) VALUES (NULL, '".$nombre."', '".$apellido."', '".$puesto."', '".$email."', '".$tel."', '".$telEmergencias."')";
            $res = mysqli_query($conn, $query);
            header("location: profile.php");
          }
          
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login | Insurence Administrator</title>
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
   
    <section class="bienvenidos index" id="editarPoliza">
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
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="agregarPoliza.php">Agregar Poliza</a></li>
                        <li class="active"><a href="agregarEmpleado.php">Agregar Empleado</a></li>
                        <li><a href="logout.php">Cerrar Sesión</a></li>
                    </ul>
                </nav>

            </div>
        </header>
        <div class="texto-encabezado text-center">
            <div class="container">
                <h1 class="h2 wow bounceIn">Agregar Empleado</h1>
                <div class="container">
                  <form class="wow bounceInRight" id="editar" action="" method="POST">
                    
                    <div class="form-group row">
                      <label for="nombre" class="col-4 form-control-label">Nombre</label>
                      <div class="col-8">
                        <input type="text" name="nombre" placeholder="Juan" class="form-control" id="nombre">
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="apellido" class="col-4 form-control-label">Apellido</label>
                      <div class="col-8">
                        <input type="text" name="apellido" placeholder="Gonzales" class="form-control" id="apellido">
                      </div>
                    </div>
                     
                    <div class="form-group row">
                      <label for="puesto" class="col-4 form-control-label">Puesto</label>
                      <div class="col-8">
                        <input type="text" name="puesto" placeholder="Desarrollador" class="form-control" id="puesto" >
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="correo" class="col-4 form-control-label">Correo</label>
                      <div class="col-8">
                        <input type="email" name="correo" placeholder="juan@hotmail.com" class="form-control" id="email" >
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="tel" class="col-4 form-control-label">Telefono</label>
                      <div class="col-8">
                        <input type="text" name="tel" maxlength="8" placeholder="11112020" class="form-control" id="tel" >
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="telEmergencias" class="col-4 form-control-label">Telefono Emergencias</label>
                      <div class="col-8">
                        <input type="text" name="telEmergencias" maxlength="8" placeholder="12345678" class="form-control" id="telEmergencias" >
                      </div>
                    </div>
                     
                    <input type="submit" name="submit" class="btn btn-primary wow bounceInUp" data-wow-delay=".5s" value="Agregar">
                  </form>
                  <span class="error"><?php echo $error; ?></span>
                </div>
            </div>

        </div>

    </section>
    
    
    <footer class="piedepagina py-3 index-piedepagina" role="contentinfo">
        <div class="container">
            <p>2017 © Insurence Administrator Todos los derechos reservados</p>
        </div>

    </footer>

    <!-- Carga de archivos  JS -->

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/wow.min.js"></script>   
    <script src="js/sitio.js"></script>    
    

</body>

</html>

