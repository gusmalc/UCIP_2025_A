<?php 

$url = "localhost";
$user = "root";
$pass = "";
$db = "abc_it";

$conn = new mysqli($url, $user, $pass, $db);

if ($conn->connect_errno) {
    printf("Connect failed: %s\n", $conn->connect_error);
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h2{
            color: #f00;
        }
    </style>
</head>
<body>
    <h1>DATABASE</h1>
    
    <?php

  
$result = $conn->query("SELECT * FROM usuarios");

while($fila = $result->fetch_assoc()) {
    echo $fila["id"] . " - " . $fila["nombre"] . " - " . $fila["apellido"] . $fila["edad"] . "<br>";
}

    
    
    ?>
</body>
</html>