<?php
include 'db.php';

$user = $_GET['user'];
$email = $_GET['email'];
$pass = $_GET['pass'];

$perintah = "INSERT INTO user VALUES (
            null,
            '$user',
            '$email',
            '$pass')";

$a = mysqli_query($conn,$perintah);

if ($a){
    header("Location:index.php?status=valid");
}else{
    header("Location:index.php?status=invalid");
};

?>