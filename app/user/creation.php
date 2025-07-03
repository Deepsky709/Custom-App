<?php
include 'db.php';

$header = $_GET['header'];
$date = $_GET['date'];
$content = $_GET['content'];
$userID = $_GET['userID'];


$perintah = "INSERT INTO notepad_data VALUES (
            null,
            '$header',
            '$date',
            '$content',
            '$userID')";

mysqli_query($conn,$perintah);

?>

<script>
    window.location.href = "index.php"
</script>