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
header("Content-Type: application/json; charset=UTF-8");
    
$result = $conn->query("SELECT * FROM usuarios");

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data, JSON_UNESCAPED_UNICODE);

// var_dump($json);

    // while($fila = $result->fetch_assoc()) {
        
    //     //echo $fila["id"] . " - " . $fila["nombre"] . " - " . $fila["apellido"] . $fila["edad"] . "<br>";
    //     echo "<h2>";
    //     echo $fila['nombre'] . " " . $fila['apellido'];
    //     echo "</h2>";
    // }
    
    
    ?>
</body>
</html>