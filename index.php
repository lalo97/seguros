<?php
    include_once("login.php");
    if(isset($_SESSION['login_user'])){
        header("Location: profile.php");
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
    <section class="bienvenidos index" id="login">

        <div class="texto-encabezado text-center">

            <div class="container">
               
               <img style="width:200px;" src="images/logo.svg" alt="">
               <br>
               <br>
                <h1 class="h1 wow bounceIn">Iniciar Sesión</h1>
                  <form id="inicioSesion" action="" method="POST">
                    <div class="form-group row  wow bounceInLeft">
                      <label for="username" class="col-sm-2 form-control-label">Usuario</label>
                      <div class="col-12 col-sm-10">
                        <input type="text" name="username" class="form-control" id="username" placeholder="Usuario">
                      </div>
                    </div>
                    <div class="form-group row wow bounceInRight" data-wow-delay=".3s">
                      <label for="contraseña" class="col-sm-2 form-control-label">Contraseña</label>
                      <div class="col-12 col-sm-10">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Contraseña">
                      </div>
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary wow bounceInUp" data-wow-delay=".5s" value="Iniciar Sesion">
                    <a href="contacto.php" class="btn btn-success">Contacto</a>
                  </form>
                  <span class="error"><?php echo $error; ?></span>
                    
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
    <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
    <script src="https://npmcdn.com/bootstrap@4.0.0-alpha.5/dist/js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/wow.min.js"></script>   
    <script src="js/sitio.js"></script>    
    

</body>

</html>
