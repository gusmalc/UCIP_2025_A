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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<body>
<div class="container">
    <h1>Lista Usuarios</h1>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <!-- <th>ID</th> -->
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>EDAD</th>
            </tr>
        </thead>
        <tbody>
    <?php
    
    $result = $conn->query("SELECT * FROM usuarios WHERE edad > 10");
    
    while($fila = $result->fetch_assoc()) {
        echo "<tr>";
        //echo "<td>" . $fila["id"] . "</td>";
        echo "<td>" . $fila["nombre"] . "</td>";
        echo "<td>" . $fila["apellido"] . "</td>";
        echo "<td>" . $fila["edad"] . "</td>";
        echo "</tr>";
    }
    ?>
    
    
    </tbody>
    </table>
</div>

    
</body>
</html>