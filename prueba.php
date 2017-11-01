<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    require("conexion.php");
    $query = "SELECT * FROM usuario";
    $res = mysqli_query($conn, $query);
    if(mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)){
            echo $row["id"]."<br>";
        }
    }else{
        echo "0 Results";
    }
    mysqli_close($conn);
?>
</body>
</html>