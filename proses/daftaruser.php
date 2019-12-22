<?php

include '../koneksi/koneksi.php';
	if(isset($_POST['submit'])){

  		$nama = $_POST['nama'];
  		$alamat = $_POST['alamat'];
  		$pekerjaan = $_POST['pekerjaan'];
  		$email = $_POST['email'];
  		$kelahiran = $_POST['kelahiran'];
  		$nohp = $_POST['nohp'];
  		$password = $_POST['password'];

  		$foto = $_FILES['foto']['name'];
		$ukuran	= $_FILES['foto']['size'];
		$file_tmp = $_FILES['foto']['tmp_name'];

	//buat pindahkan ke folder
		if (move_uploaded_file($file_tmp, 'images/'.$foto)) {
		//KALAU OPERASI PINDAHNYA SUKSES, SIMPAN DAH DI DATABASE VARIABEL $nama nya
  		$data = "INSERT INTO user VALUE(null, '$nama','$alamat','$pekerjaan','$email','$kelahiran','$nohp','$password','$foto')";
  		mysqli_query($conn, $data);
      
        header('Location: ../indexlogin.php');


  	}
	}

?>