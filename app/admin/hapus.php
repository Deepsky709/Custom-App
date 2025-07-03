<?php
include 'db.php';
$aid = $_GET['id'];
mysqli_query($conn, "DELETE FROM user WHERE id='$aid'");
//mysqli_query($conn, "DELETE * FROM notepad_data WHERE userid='$aid");
?>

<script>
    window.location.href = 'index.php';
</script>