<?php
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
if(!isset($user_check)){
header('Location: index.php'); // Redirecting To Home Page
}
?>