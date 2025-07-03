<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit Notepad Data</h1>
    <form action="proses.php" method="get">
        <?php
            include 'db.php';
            
            $id = $_GET['id'];
            $query = "SELECT * FROM user WHERE id='$id'";
            $data = mysqli_query($conn, $query);
            foreach ($data as $a){
        ?>
        <input type="hidden" name="id" value="<?=$a['id']?>">
        <div>
            <label>Username</label>
            <input type="text" name="username" value="<?=$a['username']?>">
        </div>
        <div>
            <label>Email</label>
            <input type="text" name="email" value="<?=$a['email']?>">
        </div>
        <div>
            <label>Password</label>
            <input type="text" name="password" value="<?=$a['password']?>">
        </div>
        <div>
            <select name="roles" id="input1">
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
        </div>
        <?php
            }
        ?>
        <div>
            <button input="submit" value="Update User">Update User</button>
        </div>
    </form>
</body>
</html>