<?php
header('Content-Type: application/json');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'blog');
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($conn->connect_error) {
        die('conection failed' . $conn->connect_error);
    }
$sql1 = "SELECT * FROM  usuarios";
$result = $conn->query($sql1);

    if ($result->num_rows > 0) {
    $sqlData = [];
        while ($row = $result->fetch_assoc()) {
            $sqlData[] = $row;
        }
        echo json_encode($sqlData);
    } else {
        echo json_encode(['']);
    }
$conn->close();
?>