<?php 

$url = "localhost";
$user = "root";
$pass = "";
$db = "abc";

$conn = new mysqli($url, $user, $pass, $db);

if ($conn->connect_errno) {
    printf("Connect failed: %s\n", $conn->connect_error);
    exit();
}

function test_input($data) {
    $data = strip_tags($data);
    $data = trim($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}

$nombre = test_input($_POST['nombre']);
$apellido = test_input($_POST['apellido']);
$edad = test_input($_POST['edad']);
$app_version = test_input($_POST['app_version']);



$sql = "INSERT INTO usuarios (nombre, apellido, edad) VALUES ('$nombre', '$apellido', $edad)";
$conn->query($sql);

// if ($conn->query($sql) === TRUE) {
//     echo "Usuario agregado correctamente";
// } else {
//     echo "Error: " . $conn->error;
// }


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
    <h1>Pagina Recibe: <?php echo $app_version ?></h1>
    <?php 
    
    echo "<h2>Hola: $nombre $apellido</h2>";
    
    
    ?>
</div>
    
</body>
</html>