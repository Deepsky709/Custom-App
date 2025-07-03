<?php
include 'db.php';

$user = $_GET['user'];
$email = $_GET['email'];
$pass = $_GET['pass'];
$role = $_GET['roles'];

$perintah = "INSERT INTO user VALUES (
            null,
            '$user',
            '$email',
            '$pass',
            '$role')";

$a = mysqli_query($conn,$perintah);

if ($a){
    header("Location:index.php?status=valid");
}else{
    header("Location:index.php?status=invalid");
};

?>