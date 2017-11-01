<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
    $error = "Usuario o Contraseña invalidos";
    }
    else{
        require("conexion.php");
        // Define $username and $password
        $username=$_POST['username'];
        $password=$_POST['password'];

        $query = "SELECT * FROM usuario WHERE username='$username' AND password='$password'";
        $res = mysqli_query($conn, $query);
        $bool = true;
        if(mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)){
                $bool = false;
                $_SESSION['login_user']=$row["name"]; // Initializing Session
                header("Location: profile.php");
            }
        }
        if($bool){
            $error = "Usuario o Contraseña invalidos";
        }
    }
}
