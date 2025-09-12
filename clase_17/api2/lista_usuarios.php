<?php  
header("Content-Type: application/json; charset=UTF-8");

function test_input($data) {
    $data = strip_tags($data);
    $data = trim($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}

$edad = test_input($_POST['edad']);

$url = "localhost";
$user = "root";
$pass = "";
$db = "abc";

$conn = new mysqli($url, $user, $pass, $db);

if ($conn->connect_errno) {
    printf("Connect failed: %s\n", $conn->connect_error);
    exit();
}
    
$result = $conn->query("SELECT * FROM usuarios WHERE edad > $edad");

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data, JSON_UNESCAPED_UNICODE);

?>