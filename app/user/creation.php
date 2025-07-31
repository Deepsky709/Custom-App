<?php
include 'db.php';

$header = $_POST['header'];
$date = $_POST['date'];
$content = $_POST['content'];
$userID = $_POST['userID'];
$decal = upload();

if ($decal === false){
    echo "<script>alert('file belum diupload');</script>";
}

$perintah = "INSERT INTO notepad_data VALUES (
            null,
            '$header',
            '$date',
            '$content',
            '$userID',
            '$decal')";

mysqli_query($conn,$perintah);

function upload(){
    $fileName = $_FILES['decal']['name'];
    $fileSize = $_FILES['decal']['size'];
    $error = $_FILES['decal']['error'];
    $tmpName = $_FILES['decal']['tmp_name'];

    if ($error === 4){
        echo "<script>alert('masukkan foto terlebih dahulu');</script>";
        return false;
    }

    $ekstensiGambarValid = ['jpg','jpeg','png'];
    $ekstensiGambar = strtolower(end(explode(".",$fileName)));

    if (!in_array($ekstensiGambar, $ekstensiGambarValid)){
        echo "<script>alert('foto harus jpg');</script>";
        return false;
    }

    if (filesize>1000000){
        echo "<script>alert('ukuran terlalu besar');</script>";
        return false;
    }

    move_uploaded_file($tmpName, 'img/'.$fileName);
    return $fileName;

}

?>

<script>
    window.location.href = "index.php"
</script>