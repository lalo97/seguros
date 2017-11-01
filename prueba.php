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
    $query = "SELECT pol.id, emp.firstName, pago.paymentType, seguro.secureType, banco.bankName, pol.cost, pol.paymentDate FROM poliza pol INNER JOIN empleado emp on pol.employeesId = emp.id INNER JOIN pago on pol.paymentId = pago.id INNER JOIN seguro on pol.insuranceId = seguro.id INNER JOIN banco on pol.bankId = banco.id";
    $res = mysqli_query($conn, $query);
    if(mysqli_num_rows($res) > 0) {
        while ($elements = mysqli_fetch_assoc($res)){
            foreach($elements as $key => $element){
                echo $key.": ".$element."<br>";
            }
        }
    }
    else{
        echo "0 Results";
    }
    mysqli_close($conn);
?>
</body>
</html>