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
            <h1>Edit Notepad Data</h1>
            <form action="proses.php" method="get">
                <?php
                    include 'db.php';
                    
                    $id = $_GET['id'];
                    $query = "SELECT * FROM notepad_data WHERE id='$id'";
                    $data = mysqli_query($conn, $query);
                    foreach ($data as $a){
                ?>
                <input type="hidden" name="id" value="<?=$a['id']?>">
                <div>
                    <label>Header</label>
                    <input type="text" name="header" value="<?=$a['header']?>">
                </div>
                <div>
                    <label>Date</label>
                    <input type="date" name="date" value="<?=$a['date']?>">
                </div>
                <input style="height:200px;width:200px;text-align-last:left;margin-top:10px" type="text" name="content" value="<?= $a['content'] ?>">
                <?php
                    }
                ?>
                <div>
                    <button input="submit" value="Edit Notepad">Edit Notepad</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>