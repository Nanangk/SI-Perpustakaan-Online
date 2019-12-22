
<?php 
include '../koneksi/koneksi.php';

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM buku WHERE id = $id");
header('Location: ../manage buku.php');



?>