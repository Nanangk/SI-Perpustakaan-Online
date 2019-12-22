<?php

include '../koneksi/koneksi.php';
	if(isset($_POST['submit'])){

  		$nama = $_POST['nama'];
  		$hari_tgl = $_POST['hari_tgl'];
      $lokasi = $_POST['lokasi'];
  		$jumlah = $_POST['jumlah_peserta'];
  		$deskripsi = $_POST['deskripsi'];
  		

  		$foto = $_FILES['foto']['name'];
		$ukuran	= $_FILES['foto']['size'];
		$file_tmp = $_FILES['foto']['tmp_name'];

	//buat pindahkan ke folder
		if (move_uploaded_file($file_tmp, 'poster/'.$foto)) {
		//KALAU OPERASI PINDAHNYA SUKSES, SIMPAN DAH DI DATABASE VARIABEL $nama nya
  		$data = "INSERT INTO event VALUE(null, '$nama','$hari_tgl','$lokasi',$jumlah,'$deskripsi','$foto')";
  		mysqli_query($conn, $data);
      
        header('Location: ../manage event.php');

        
  	}
	}

?>