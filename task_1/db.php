<?php 
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=task1", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "connection is successful";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>




