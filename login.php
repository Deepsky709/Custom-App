<?php
include 'db.php';

$result = $_GET['result'];

if ($result == "incorrect"){
    echo"
    <script>
        alert('Incorrect Password')
    </script>
    ";
}else if ($result == "nonexist"){
    echo"
    <script>
        alert('This Account Does not Exist')
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
    <form action="proses2.php" method="get">
        <div id="wrap">
            <div id="per">
                <h1 id="head">INSTAGRAM</h1>
                <div>
                    <input id="input1" type="text" name="umail" value="" placeholder="Username or Email">
                </div>
                <div>
                    <input id="input1" type="password" name="pass" value="" placeholder="Password">
                </div>
                <button id="button"><b>Login</b></button>
            </div>
        </div>
    </form>
</body>
</html>