<?php
include 'db.php';

$status = $_GET['status'];

if ($status == "valid"){
    echo "
    <script>
        alert('Register Successful!')
    </script>
    ";
}else if ($status == "invalid"){
    echo"
    <script>
        alert('Failed to Register!')
    </script>
    ";
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <title>Document</title>
</head>
<body>
    <form action="proses.php" method="get">
        <div id="wrap">
            <div id="per">
                <h1 id="head">INSTAGRAM</h1>
                <div>
                    <input id="input1" type="text" name="user" value="" placeholder="Username">
                </div>
                <div>
                    <input id="input1" type="email" name="email" value="" placeholder="Email">
                </div>
                <div>
                    <input id="input1" type="password" name="pass" value="" placeholder="Password">
                </div>
                <div>
                    <select name="roles" id="input1">
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </div>
                <button id="button"><b>Daftar Sekarang</b></button>
            </div>
        </div>
    </form>
    
</body>
</html>