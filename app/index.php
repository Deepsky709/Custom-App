<?php

    session_start();
    if (!isset($_SESSION["status"]) == "login"){
        echo "<script>window.alert('Session Ended, Please Login Again');</script>";
        echo "<script>window.location.href = '/PHP7/login.php'</script>";
    }
    $name = $_SESSION["username"];
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome, <?=$name?></h1>
</body>
</html>