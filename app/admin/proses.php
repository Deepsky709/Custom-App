<?php
include 'db.php';

$uid = $_GET['id'];
$user = $_GET['username'];
$em = $_GET['email'];
$pass = $_GET['password'];
$role = $_GET['roles'];

$perintah = "UPDATE user SET username='$user', email='$em', password='$pass', role='$role' WHERE id='$uid'";

mysqli_query($conn,$perintah);

?>

<script>
    window.location.href = "index.php"
</script>