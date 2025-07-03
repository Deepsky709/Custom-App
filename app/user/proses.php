<?php
include 'db.php';

$uid = $_GET['id'];
$head = $_GET['header'];
$dat = $_GET['date'];
$cont = $_GET['content'];

$perintah = "UPDATE notepad_data SET header='$head', date='$dat', content='$cont' WHERE id='$uid'";

mysqli_query($conn,$perintah);

?>

<script>
    window.location.href = "index.php"
</script>