<?php
    $userID = $_GET['id'];
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
            <h1>Input Data to Notepad</h1>
            <form action="creation.php" method="get">
                <div>
                    <label>Header</label>
                    <input type="text" name="header">
                </div>
                <div>
                    <label>Date</label>
                    <input type="date" name="date">
                </div>
                <div>
                    <label>content</label>
                    <input type="text" name="content">
                </div>
                <div>
                    <input type="hidden" name="userID" value="<?=$userID?>">
                </div>
                <div>
                    <button input="submit" value="Tambahkan Games">Insert Data</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>