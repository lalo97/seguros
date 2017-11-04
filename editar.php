<?php
    session_start();// Starting Session
    $error='';
    // Storing Session
    $user_check=$_SESSION['login_user'];
    if(!isset($user_check)){
        header('Location: index.php'); // Redirecting To Home Page
    }
    if (isset($_POST['submit'])) {

        $id=$_GET["id"];
        $empleado=$_POST["nombre_empleado"];
        $pago=$_POST["tipo_pago"];
        $tipoSeguro=$_POST["nombre_tipoSeguro"];
        $banco=$_POST["nombre_banco"];
        $costo=$_POST["costo"];
        $fecha=$_POST["fecha"];
        
        if (empty($id) || empty($costo) || empty($fecha) || empty($empleado) || empty($banco) || empty($pago) || empty($tipoSeguro)) {
            $error = "Falto llenar algun campo";
        }
        else{
            require("conexion.php");
            $query = "UPDATE poliza set employeesId=".$empleado.", paymentId=".$pago.", insuranceId=".$tipoSeguro.", bankId=".$banco.", cost=".$costo.", paymentDate='".$fecha."' WHERE id=".$id;
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
                        <li><a href="agregarEmpleado.php">Agregar Empleado</a></li>
                        <li><a href="logout.php">Cerrar Sesión</a></li>
                    </ul>
                </nav>

            </div>
        </header>

        <div class="texto-encabezado text-center">
            <?php
                
                require("conexion.php");
                
                $strEmpleado = mysqli_query($conn, "SELECT * FROM empleado");
                $strBanco = mysqli_query($conn, "SELECT * FROM banco");
                $strPagos = mysqli_query($conn, "SELECT * FROM pago");
                $strSeguro = mysqli_query($conn, "SELECT * FROM seguro");

                $query = "SELECT pol.id, emp.firstName, pago.paymentType, seguro.secureType, banco.bankName, pol.cost, pol.paymentDate FROM poliza pol INNER JOIN empleado emp on pol.employeesId = emp.id INNER JOIN pago on pol.paymentId = pago.id INNER JOIN seguro on pol.insuranceId = seguro.id INNER JOIN banco on pol.bankId = banco.id WHERE pol.id=".$_GET['id'];

                $res = mysqli_query($conn, $query);

                if(mysqli_num_rows($res) > 0) {
                    while ($elements = mysqli_fetch_assoc($res)){
            ?>
            <div class="container">
                <h1 class="h2 wow bounceIn">Editar Poliza</h1>
                <div class="container">
                  <form class="wow bounceInRight" id="editar" action="editar.php?id=<?php echo $elements["id"]?>" method="POST">
                    <div  class="form-group row">
                      <label for="id" class="col-4 form-control-label">Id: <?php echo $elements["id"]?></label>
                    </div>
                    
                     <div class="form-group row">
                      <label for="nombre_empleado" class="col-4 form-control-label">Nombre Empleado</label>
                      <div class="col-8">
                        <select name="nombre_empleado" class="custom-select">
                        <?php
                            if(mysqli_num_rows($strEmpleado) > 0) {
                                while ($elements2 = mysqli_fetch_assoc($strEmpleado)){
                                    if($elements['firstName']==$elements2['firstName']){
                                        echo ('<option selected value="'.$elements2['id'].'">'.$elements2['id'].' '.$elements2['firstName'].'</option>'); 
                                    }else{
                                        echo ('<option value="'.$elements2['id'].'">'.$elements2['id'].' '.$elements2['firstName'].'</option>');
                                    }
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
                            if(mysqli_num_rows($strBanco) > 0) {
                                while ($elements2 = mysqli_fetch_assoc($strBanco)){
                                    if($elements['bankName']==$elements2['bankName']){
                                        echo ('<option selected value="'.$elements2['id'].'">'.$elements2['id'].' '.$elements2['bankName'].'</option>'); 
                                    }else{
                                        echo ('<option value="'.$elements2['id'].'">'.$elements2['id'].' '.$elements2['bankName'].'</option>');
                                    }
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
                            if(mysqli_num_rows($strPagos) > 0) {
                                while ($elements2 = mysqli_fetch_assoc($strPagos)){
                                    if($elements['paymentType']==$elements2['paymentType']){
                                        echo ('<option selected value="'.$elements2['id'].'">'.$elements2['id'].' '.$elements2['paymentType'].'</option>'); 
                                    }else{
                                        echo ('<option value="'.$elements2['id'].'">'.$elements2['id'].' '.$elements2['paymentType'].'</option>');
                                    }
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
                            if(mysqli_num_rows($strSeguro) > 0) {
                                while ($elements2 = mysqli_fetch_assoc($strSeguro)){
                                    if($elements['secureType']==$elements2['secureType']){
                                        echo ('<option selected value="'.$elements2['id'].'">'.$elements2['id'].' '.$elements2['secureType'].'</option>'); 
                                    }else{
                                        echo ('<option value="'.$elements2['id'].'">'.$elements2['id'].' '.$elements2['secureType'].'</option>');
                                    }
                                }
                            }
                        ?>
                        </select>
                      </div>
                    </div>
                    
                     <div class="form-group row">
                      <label for="costo" class="col-4 form-control-label">Costo</label>
                      <div class="col-8">
                        <input type="text" name="costo" class="form-control" id="costo" value="<?php echo $elements["cost"]?>">
                      </div>
                    </div>
                     
                    <div class="form-group row">
                      <label for="fecha" class="col-4 form-control-label">Fecha</label>
                      <div class="col-8">
                        <input type="date" name="fecha" class="form-control" placeholder="YYYY-MM-dd"  id="fecha" value="<?php echo $elements["paymentDate"]?>">
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

