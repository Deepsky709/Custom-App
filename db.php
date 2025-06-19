<?php
$conn = mysqli_connect(
    $host = "localhost",
    $user = "root",
    $pass = "root",
    $db = "instagram"
);

if ($conn -> connect_errno){
    echo "Failed to connect to MySQL: " . $mysql;
    exit();
}

?>