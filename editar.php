<?php
    include("login.php");
    include("cambios.php");
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
            <?php

                $strBanco = file_get_contents('https://aseguradora.000webhostapp.com/index.php/banco');
                $strEmpleado = file_get_contents('https://aseguradora.000webhostapp.com/index.php/empleado');
                $strPagos = file_get_contents('https://aseguradora.000webhostapp.com/index.php/pagos');
                $strSeguro = file_get_contents('https://aseguradora.000webhostapp.com/index.php/seguro');
                $strTipoSeguro = file_get_contents('https://aseguradora.000webhostapp.com/index.php/tiposeguro');

                $jsonBanco = json_decode($strBanco, true);
                $jsonEmpleado = json_decode($strEmpleado, true);
                $jsonPagos = json_decode($strPagos, true);
                $jsonSeguro = json_decode($strSeguro, true);
                $jsonTipoSeguro = json_decode($strTipoSeguro, true);

                $str = file_get_contents('https://aseguradora.000webhostapp.com/index.php/poliza');
                $json = json_decode($str, true);
                $bool = true;
                foreach ($json as $field => $value) {
                    
                //FALTA CERRAR FOREACH -> }
                    if($value["id"]==$_GET["id"]){
            
            ?>
            <div class="container">
                <h1 class="h2 wow bounceIn">Editar Poliza</h1>
                <div class="container">
                  <form class="wow bounceInRight" id="editar" action="cambios.php?id=<?php echo $value["id"]?>" method="POST">
                    <div  class="form-group row">
                      <label for="id" class="col-4 form-control-label">Id: <?php echo $value["id"]?></label>
                    </div>
                    
                     <div class="form-group row">
                      <label for="nombre_empleado" class="col-4 form-control-label">Nombre Empleado</label>
                      <div class="col-8">
                        <select name="nombre_empleado" class="custom-select">
                         <?php 
                            foreach($jsonEmpleado as $field=>$value2){
                                if($value['nombre_empleado']==$value2['nombre_empleado']){
                                    echo ('<option selected value="'.$value2['id'].'">'.$value2['id'].' '.$value2['nombre_empleado'].'</option>'); 
                                }else{
                                    echo ('<option value="'.$value2['id'].'">'.$value2['id'].' '.$value2['nombre_empleado'].'</option>');
                                }
                            }
                        ?>
                        </select>
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="nombre_banco" class="col-4 form-control-label">Banco</label>
                      <div class="col-8">
                        <select name="nombre_banco" class="custom-select">
                         <?php 
                            foreach($jsonBanco as $field=>$value2){
                                if($value['nombre_banco']==$value2['nombre_banco']){
                                    echo ('<option selected value="'.$value2['id'].'">'.$value2['id'].' '.$value2['nombre_banco'].'</option>'); 
                                }else{
                                    echo ('<option value="'.$value2['id'].'">'.$value2['id'].' '.$value2['nombre_banco'].'</option>');
                                }
                            }
                        ?>
                        </select>
                      </div>
                    </div>
                     
                    <div class="form-group row">
                      <label for="tipo_pago" class="col-4 form-control-label">Pago</label>
                      <div class="col-8">
                        <select name="tipo_pago" class="custom-select">
                         <?php 
                            foreach($jsonPagos as $field=>$value2){
                                if($value['tipo_pago']==$value2['tipo_pago']){
                                    echo ('<option selected value="'.$value2['id'].'">'.$value2['id'].' '.$value2['tipo_pago'].'</option>'); 
                                }else{
                                    echo ('<option value="'.$value2['id'].'">'.$value2['id'].' '.$value2['tipo_pago'].'</option>');
                                }
                            }
                        ?>
                        </select>
                      </div>
                    </div>
                     
                    <div class="form-group row">
                      <label for="nombre_tipoSeguro" class="col-4 form-control-label">Tipo de seguro</label>
                      <div class="col-8">
                        <select name="nombre_tipoSeguro" class="custom-select">
                         <?php 
                            foreach($jsonTipoSeguro as $field=>$value2){
                                if($value['nombre_tipoSeguro']==$value2['nombre_tipoSeguro']){
                                    echo ('<option selected value="'.$value2['id'].'">'.$value2['id'].' '.$value2['nombre_tipoSeguro'].'</option>'); 
                                }else{
                                    echo ('<option value="'.$value2['id'].'">'.$value2['id'].' '.$value2['nombre_tipoSeguro'].'</option>');
                                }
                            }
                        ?>
                        </select>
                      </div>
                    </div>
                    
                     <div class="form-group row">
                      <label for="costo" class="col-4 form-control-label">Costo</label>
                      <div class="col-8">
                        <input type="text" name="costo" class="form-control" id="costo" value="<?php echo $value["costo"]?>">
                      </div>
                    </div>
                     
                    <div class="form-group row">
                      <label for="fecha" class="col-4 form-control-label">Fecha</label>
                      <div class="col-8">
                        <input type="text" name="fecha" class="form-control" id="fecha" value="<?php echo $value["fecha"]?>">
                      </div>
                    </div>
                     
                    <input type="submit" name="submit" class="btn btn-primary wow bounceInUp" data-wow-delay=".5s" value="Guardar">
                  </form>
                  <span class="error"><?php echo $error; ?></span>
                </div>
                <?php
                        
                    }
                }
                ?>
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

