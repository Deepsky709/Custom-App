<?php
    include '/PHP7/db.php'
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
    <h1>Welcome, Admin <?=$name?></h1>

    <table border="1">
        <tr>
            <th>Id</th>
            <th>username</th>
            <th>email</th>
            <th>password</th>
            <th>roler</th>
        </tr>
        <?php
        $data = mysqli_query($conn, "SELECT * FROM user");
            
        foreach ($data as $a){
        ?>
        <tr>
            <th><?= $a['id'] ?></th>
            <th><?= $a['username'] ?></th>
            <th><?= $a['email'] ?></th>
            <th><?= $a['password'] ?></th>
            <th><?= $a['role'] ?></th>
            <th><a href="hapus.php?id=<?=$a['id']?>"><button>Delete</button></a></th>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>