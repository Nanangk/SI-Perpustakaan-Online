
<?php 
include '../koneksi/koneksi.php';

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM peminjaman WHERE id = $id");
header('Location: ../peminjaman.php');



?>