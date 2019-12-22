
<?php 
include '../koneksi/koneksi.php';

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM event WHERE id = $id");
header('Location: ../manage event.php');



?>