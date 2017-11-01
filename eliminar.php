<?php

    $id=$_GET["id"];
            file_get_contents('https://aseguradora.000webhostapp.com/index.php/poliza/eliminar_poliza/'.$id.'');
           return header("location: profile.php");

    

?>
