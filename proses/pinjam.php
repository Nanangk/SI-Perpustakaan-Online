<?php 
include '../koneksi/koneksi.php'; 
include '../barcode/acak.php'; 
	session_start();
	$id=$_SESSION['buku'];
	echo $id;
	
	
 	$user=$_SESSION['user']; 
 	echo $user;

 	$query = mysqli_query($conn, "SELECT * FROM buku WHERE id = $id");
  	$data = mysqli_fetch_assoc($query);
  	$id_buku=$data['id']; 	echo $id_buku;
  	$judul=$data['judul'];	echo $judul;

  	$_SESSION['judul']=$judul;

  	$query2= mysqli_query($conn, "SELECT * FROM user WHERE email = '$user'");
  	$data2 = mysqli_fetch_assoc($query2);
  	$id_user=$data2['id']; echo $id_user;
  	$nama=$data2['nama'];	echo $nama;

  	$_SESSION['peminjam']=$nama;

  	$tgl_pinjam=date("d M Y"); echo $tgl_pinjam;
  	$tgl_kembali=date("d M Y", time()+60*60*24*7); echo $tgl_kembali;
  	$status="belum diambil";
    echo $status;
    $kode=kode();
    echo $kode;

    $querycek = mysqli_query($conn, "SELECT * FROM peminjaman WHERE id_buku = $id_buku AND id_user = $id_user");
    if (mysqli_num_rows($querycek)==0){

  	$datanya = "INSERT INTO peminjaman VALUES(null,$id_user,$id_buku,'$nama','$judul','$tgl_pinjam','$tgl_kembali','$kode','$status')";
  		mysqli_query($conn, $datanya);
    }

  		header('Location: form pinjam.php');
  	



 ?>