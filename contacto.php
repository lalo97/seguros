<?php
$error="";
    if(isset($_POST["submit"])){
        
        if(empty($_POST["subject"])||empty($_POST["message"])||empty($_POST["email"])||empty($_POST["nombre"])){
            $error= "No llenaste los campos";
        }else{
            $subject = $_POST["subject"];
            $message = $_POST["message"];
            $header = "From:".$_POST["email"]."\n";
            $header .= $_POST["nombre"];
            mail("eduardo_tmz@hotmail.com",$subject,$message,$header);    
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

        <div class="texto-encabezado text-center">
            <div class="container">
                <h1 class="h2 wow bounceIn">Contacto</h1>
                <div class="container">
                  <form class="wow bounceInRight" id="editar" action="" method="POST">
                   
                   <div class="form-group row">
                      <label for="nombre" class="col-4 form-control-label">Nombre:</label>
                      <div class="col-8">
                        <input type="text" placeholder="Escribe tu nombre" name="nombre" class="form-control" id="nombre" value="">
                      </div>
                    </div>
                     
                     <div class="form-group row">
                      <label for="email" class="col-4 form-control-label">Email:</label>
                      <div class="col-8">
                        <input type="text" placeholder="Escribe tu email" name="email" class="form-control" id="email" value="">
                      </div>
                    </div>
                    
                     <div class="form-group row">
                      <label for="subject" class="col-4 form-control-label">Asunto:</label>
                      <div class="col-8">
                        <input type="text" placeholder="Escribe tu asunto" name="subject" class="form-control" id="subject" value="">
                      </div>
                    </div>
                     
                    <div class="form-group row">
                      <label for="message" class="col-4 form-control-label">Mensaje:</label>
                      <div class="col-8">
                        <textarea  class="form-control" placeholder="Mensaje para el administrador" name="message" id="message" rows="10"></textarea>
                      </div>
                    </div>
                     
                    <input type="submit" name="submit" class="btn btn-primary wow bounceInUp" data-wow-delay=".5s" value="Enviar">
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

