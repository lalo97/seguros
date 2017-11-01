<?php
    if (isset($_POST['submit'])) {
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $puesto=$_POST["puesto"];
    $tel=$_POST["tel"];
    $telEmergencias=$_POST["telEmergencias"];
        if (empty($nombre) || empty($apellido) || empty($puesto) || empty($tel) || empty($telEmergencias)) {
            header("location: profile.php");
            return $error = "Falto llenar algun campo";
        }
        else{
            $agregar=file_get_contents();
            file_get_contents('https://aseguradora.000webhostapp.com/index.php/empleado/crear/'.$nombre.'/'.$apellido.'/'.$puesto.'/'.$tel.'/'.$telEmergencias);
            header("location: profile.php");
        }
        
    }
    

?>