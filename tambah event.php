<?php  include 'koneksi/koneksi.php'; 
 		session_start();
 		$user=$_SESSION['user']; 
 		if($user=="" || $user==" "){
 			header('Location: indexlogin admin.php');

 		}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title> Tambah Event</title>
	<link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Yatra+One" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="image/gif/png" href="logo4.png">
</head>
<body>

	<!-- Start of Header -->
<div class="navi">
	<div class="top-head">
		<ul>
			<li><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">LOGOUT</button></li>
			<?php $datanya = "SELECT * FROM admin WHERE email='$user'";
			$query = mysqli_query($conn, $datanya); 
			$data = mysqli_fetch_assoc($query);?>
			<a href="profil admin.php"><li style="border-right: 1px solid white;"><?php echo $data['nama']; ?></li></a>
		</ul>
	</div>

	<div class="mid-head">
		<ul>
			<li><img style="height:35px; width:35px; margin-right:-100px" src="logo3.jpg"></li>
			<li><img style="width:180px; height:30px; margin-right:-50px; margin-left:-40px; float:right; padding-top:1px;" src="logo2.jpg"></li>
			<li><a href="index admin.php"><b>BERANDA</b></a></li>
			<li><a href="manage buku.php"><b>MANAGE BUKU</b></a></li>
			<li><a href="manage event.php"><b>MANAGE EVENT</b></a></li>
			<li><a href="kelolamember.php"><b>MANAGE USER</b></a></li>
		</ul>
	</div>

	<div class="bot-head"></div>

</div>
<!-- End of Header -->

<div class="header-gap">
	<img class="header-gap-white" src="white.jpg">
</div>

<div class="daftar">
	<h2 style="font-family: 'Yatra One'; margin-left:20px">Tambah Event</h2>
	<form action="proses/addevent.php" enctype="multipart/form-data" method="POST">
	<table class="daftar-table">
		<tr>
			<td>Nama Event</td>
		</tr>
		<tr>
			<td><input type="text" placeholder="Masukkan Nama Event" name="nama" required></td>
		</tr>
		<tr>
			<td>Hari & Tanggal</td>
		</tr>
		<tr>
			<td><input type="date" placeholder="Masukkan Hari & Tanggal" name="hari_tgl" required></td>
		</tr>
		<tr>
			<td>Lokasi</td>
		</tr>

		<tr>
			<td><input type="text" placeholder="Masukkan Lokasi" name="lokasi" required></td>
		</tr>
		<tr>
			<td>Jumlah Peserta</td>
		</tr>
		<tr>
			<td><input type="number" placeholder="Masukkan Jumlah Peserta " name="jumlah_peserta" ></td>
		</tr>
		<tr>
			<td>Deskripsi</td>
		</tr>
		<tr>
			<td><textarea cols="90" rows="10" placeholder="Masukkan Deskripsi Event" name="deskripsi" required></textarea></td>
		</tr>

		<tr>
			<td>Upload Poster Event</td>
		</tr>
		<tr>
			<td><input style="margin-top: 10px;" type="file" name="foto" required></td>
		</tr>

		<tr>
			<td><input style="margin-top: 10px;" type="submit" name="submit" value="Tambah"></td>
		</tr>
		
	</table>
	</form>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br>

<footer>
	<p class="footer-text">Copyright</p>
</footer>
	
<!--Start of logout form-->
<div id="id01" class="modal">
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img style="width:300px; height:300px;" src="logo.jpg" alt="Avatar" class="avatar">
    </div>

    <div style="margin-top:-50px;" class="container">
      <h2 style="text-align: center; margin-bottom:20px; font-family: 'Yatra One';">Apakah anda yakin?</h2>
      	<div style="display: block; margin-left:40%;">
      		<a href="proses/logout admin.php"><button style="margin-right:30px;" type="button"  class="buku-popup-baca">Ya</button></a>
      		<a href="index admin.php"><button style="background-color:red" type="button"  class="buku-popup-baca">Tidak</button>
      	</div></a>
    </div>
  </form>
</div>
<!--End of logout form-->
<!--End of login form-->

<script src="javascript.js"></script>

</body>
</html>