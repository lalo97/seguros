<?php
    session_start();// Starting Session
    // Storing Session
    $user_check=$_SESSION['login_user'];
    if(!isset($user_check)){
        header('Location: index.php'); // Redirecting To Home Page
    }else{
        require("conexion.php");
        $id=$_GET["id"];
        $query = "DELETE FROM `poliza` WHERE id=".$id;
        $res = mysqli_query($conn, $query);
        header("location: profile.php");
    }
?>
