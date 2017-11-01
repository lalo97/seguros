<?php
 
// Create connection
$conn = mysqli_connect("localhost", "id1468449_seguro", "lalo97", "id1468449_seguro");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 

return $conn;

?>