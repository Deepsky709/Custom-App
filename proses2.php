<?php
include 'db.php';

$umail = $_GET['umail'];
$pass = $_GET['pass'];

$perintah = "SELECT id FROM user WHERE username='$umail' OR email='$umail'";

$a = mysqli_num_rows(mysqli_query($conn,$perintah)); 

if ($a == 1){
    $selectedData = mysqli_query($conn, "SELECT password FROM user WHERE username='$umail' OR email='$umail'");
    $data = mysqli_query($conn, "SELECT username FROM user WHERE username='$umail' OR email='$umail'");
    $user = mysqli_fetch_assoc($data)['username'];
    if ($pass == mysqli_fetch_assoc($selectedData)['password']){
        session_start();
        $_SESSION["status"] = "login";
        $_SESSION["username"] = $user;
        header("Location:app/index.php");
    }else{
        header("Location:login.php?result=incorrect");
    };
}elseif ($a == 0){
    header("Location:login.php?result=nonexist");
};

?>