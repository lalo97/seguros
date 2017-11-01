<?php
    if (isset($_POST['submit'])) {
    $id=$_GET["id"];
    $costo=$_POST["costo"];
    $fecha=$_POST["fecha"];
    $empleado=$_POST["nombre_empleado"];
    $banco=$_POST["nombre_banco"];
    $pago=$_POST["tipo_pago"];
    $tipoSeguro=$_POST["nombre_tipoSeguro"];
        if (empty($id) || empty($costo) || empty($fecha) || empty($empleado) || empty($banco) || empty($pago) || empty($tipoSeguro)) {
            $error = "Falto llenar algun campo";
        }
        else{
            require("conexion.php");
            $query = "SELECT * FROM usuario";
            $res = mysqli_query($conn, $query);
            file_get_contents('https://aseguradora.000webhostapp.com/index.php/poliza/editar_poliza/'.$id.
                                     '/'.$empleado.'/'.$banco.'/'.$pago.'/'.$tipoSeguro.'/'.$costo.'/'.$fecha);
            header("location: profile.php");
        }
        
    }
    

?>