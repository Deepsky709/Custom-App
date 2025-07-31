<?php
    include 'db.php';

    session_start();
    if (!isset($_SESSION["status"]) == "login"){
        echo "<script>window.alert('Session Ended, Please Login Again');</script>";
        echo "<script>window.location.href = '/PHP7/login.php'</script>";
    }
    $name = $_SESSION["username"];
    $user = mysqli_query($conn, "SELECT id FROM user WHERE username='$name'");
    $userID = mysqli_fetch_assoc($user)['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/PHP7/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div id="wrap">
        <div id="per">
            <h1>Welcome <?=$name?>, here are your notes!</h1>
            <div ></div>
            <table border="1">
                <tr>
                    <th>Id</th>
                    <th>Header</th>
                    <th>Date</th>
                    <th colspan="2">action</th>
                </tr>
                <?php
                $data = mysqli_query($conn, "SELECT * FROM notepad_data WHERE userid=$userID");
                $b = 1;
                foreach ($data as $a){
                ?>
                <tr>
                    <th><?= $b?></th>
                    <th><?= $a['header'] ?></th>
                    <th><?= $a['date'] ?></th>
                    <th><a href="update.php?id=<?=$a['id']?>"><button>Update</button></a></th>
                    <th><a href="hapus.php?id=<?=$a['id']?>"><button>Delete</button></a></th>
                </tr>
                <?php
                $b++;
                }
                ?>
                </table>
                
                <div>
                    <a href="create.php?id=<?=$userID?>"><button id="button2">Add Notes</button></a>
                </div>
                
            <form action="logout.php" method="get">
                <button input="submit" value="logout" id="button"><h1>Log Out</h1></button>
            </form>
        </div>
    </div>
    
</body>
</html>