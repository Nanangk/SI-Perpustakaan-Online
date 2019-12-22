
<?php 
include '../koneksi/koneksi.php';

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM user WHERE id = $id");
header('Location: ../kelolamember.php');



?>