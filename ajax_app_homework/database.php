<?php
header('Content-Type: application/json');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'blog');
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (isset($_POST['inputValue']) &&
    isset($_POST['inputValue2']) && 
    isset($_POST['inputValue3'])) {
        
    $value = $_POST['inputValue'];
    $value2 = $_POST['inputValue2'];
    $value3 = $_POST['inputValue3'];

    $send = array();
    $send = [ $value, $value2, $value3 ];
    echo json_encode($send);
} else {
    echo json_encode('this will explode');
}
if (isset($_POST['inputValue']) &&
    isset($_POST['inputValue2']) && 
    isset($_POST['inputValue3'])) {
        $value = $_POST['inputValue'];
        $value2 = $_POST['inputValue2'];
        $value3 = $_POST['inputValue3'];

        $name = $conn->real_escape_string ($value);
        $email = $conn->real_escape_string ($value2);
        $password = $conn->real_escape_string ($value3);

        $insert = "INSERT INTO test ( name, email, password ) VALUES ('$name', '$email', '$password')";
            if ($conn->query($sql) === TRUE) {
                echo json_encode('Data inserted successfully');
            } else {
                echo json_encode('Error: ' . $conn->error);
            } else {
                
            }
    }
$conn->close();
?>