<?php
    include 'db.php';

    session_start();
    if (!isset($_SESSION["status"]) == "login"){
        echo "<script>window.alert('Session Ended, Please Login Again');</script>";
        echo "<script>window.location.href = '/PHP7/login.php'</script>";
    };
    $name = $_SESSION["username"];
    
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
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Role</th>
            <th colspan="2">Settings</th>
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
            <th><a href="update.php?id=<?=$a['id']?>"><button>Update</button></a></th>
        </tr>
        <?php
        }
        ?>
    </table>
    <form action="logout.php" method="get">
        <button input="submit" value="logout"><h1>Log Out</h1></button>
    </form>
    
</body>
</html>