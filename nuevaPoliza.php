<?php
    if (isset($_POST['submit'])) {
    $costo=$_POST["costo"];
    $fecha=$_POST["fecha"];
    $empleado=$_POST["nombre_empleado"];
    $banco=$_POST["nombre_banco"];
    $pago=$_POST["tipo_pago"];
    $tipoSeguro=$_POST["nombre_tipoSeguro"];
        if (empty($costo) || empty($fecha) || empty($empleado) || empty($banco) || empty($pago) || empty($tipoSeguro)) {
            header("location: profile.php");
            return $error = "Falto llenar algun campo";
        }
        else{
            $agregar=file_get_contents();
            file_get_contents('http://aseguradora.000webhostapp.com/index.php/poliza/crear_poliza/'.$empleado.'/'.$banco.'/'.$pago.'/'.$tipoSeguro.'/'.$costo.'/'.$fecha);
            header("location: profile.php");
        }
        
    }
    

?>