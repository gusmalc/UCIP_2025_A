<?php  
header("Content-Type: application/json; charset=UTF-8");

$url = "localhost";
$user = "root";
$pass = "";
$db = "abc";

$conn = new mysqli($url, $user, $pass, $db);

if ($conn->connect_errno) {
    printf("Connect failed: %s\n", $conn->connect_error);
    exit();
}
    
$result = $conn->query("SELECT * FROM usuarios WHERE edad > 1");

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data, JSON_UNESCAPED_UNICODE);

?>