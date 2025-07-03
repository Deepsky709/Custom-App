<?php


//traditional
$conn = mysqli_connect(
    $host = "localhost",
    $user = "root",
    $pass = "root",
    $db = "instagram"
);

//oop
// $conn = new mysqli{
//     "localhost"
//     "root"
//     "root"
//     "games"
// }
if ($conn -> connect_errno){
    echo "Failed to connect to MySQL: " . $mysql;
    exit();
}

?>