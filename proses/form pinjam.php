<?php 
include '../koneksi/koneksi.php'; 
include '../barcode/barcode128.php';
	session_start();
	$nama=$_SESSION['peminjam'];
	$id=$_SESSION['buku'];

 ?>




<!DOCTYPE html>
<html>
<head>
	<title>form pinjam</title>
</head>
<body>

<?php
	$datanya = "SELECT * FROM peminjaman WHERE id_buku=$id";
			$query = mysqli_query($conn, $datanya); 
			$data = mysqli_fetch_assoc($query);
			?>

<table align="center">
	
	<tr><td><img style="width: 150px;height: 150px;" src="../logo.jpg"> <br><br><br><br></td>
		<td><H2 style="border-bottom: 2px solid black;" align="center"> FORM PEMINJAMAN BUKU MELALUI PERPUSTAKAANKU.COM</H2>
		</td>
		<td><img style="width: 150px;height: 150px;" src="../logo.jpg"> <br><br><br><br></td>
	</tr>
</table>

<table align="center" style="font-size: 150%;">
	<tr>
		<td> Nama Peminjam </td>
		<td> : <?php echo$data['nama user'] ;?></td>
	</tr>
	<tr>
		<td> Buku Dipinjam </td>
		<td> : <?php echo $data['judul buku'] ;?></td>
	</tr>
	<tr>
		<td> Tanggal Peminjam </td>
		<td> : <?php echo $data['tgl_pinjam'] ;?></td>
	</tr>
	<tr>
		<td> Tanggal Pengembalian </td>
		<td> : <?php echo $data['tgl_kembali'] ;?></td>
	</tr>

	<tr>

		
		<td> <br><br><br> <?php echo bar128(stripslashes($data['kode'])) ;?></td>
	</tr>
</table>

<br><br><br><br>
<p align="center" style="color:red;">bawa form ini ke perpustakaan peminjaman buku sebelum Tanggal : <?php $tgl=date("d M Y", time()+60*60*24*1); echo $tgl; ?></p>

</body>
</html>