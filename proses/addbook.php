<?php

include '../koneksi/koneksi.php';
	if(isset($_POST['submit'])){

  		$judul = $_POST['judul'];
  		$pengarang = $_POST['pengarang'];
      $tahun = $_POST['tahun'];
      $genre = $_POST['genre'];
      $fisik = $_POST['fisik'];
      $stok = $_POST['stok'];
      $lokasi = $_POST['lokasi'];
  		$deskripsi = $_POST['deskripsi'];
  		

  		$foto = $_FILES['foto']['name'];
		  $ukuran	= $_FILES['foto']['size'];
		  $file_tmp = $_FILES['foto']['tmp_name'];

      
      $ebook = $_FILES['file']['name'];
      $size = $_FILES['file']['size'];
      $file_tempat = $_FILES['file']['tmp_name'];


		if (move_uploaded_file($file_tmp, 'sampul/'.$foto) && move_uploaded_file($file_tempat, 'ebook/'.$ebook)) {
   
       
		  
  		$data = "INSERT INTO buku VALUE (null, '$judul','$pengarang',$tahun,'$genre','$fisik',$stok,'$lokasi','$deskripsi','$foto','$ebook')";
  		mysqli_query($conn, $data);

      header('Location: ../manage buku.php');
        
    }

     }

        
  	
	

?>