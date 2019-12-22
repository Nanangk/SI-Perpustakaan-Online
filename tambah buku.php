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
	<title> Tambah Buku</title>
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
	<h2 style="font-family: 'Yatra One'; margin-left:20px">Tambah buku</h2>
	<form action="proses/addbook.php" enctype="multipart/form-data" method="POST">
	<table class="daftar-table">
		<tr>
			<td>Judul</td>
		</tr>
		<tr>
			<td><input type="text" placeholder="Masukkan Judul" name="judul" required></td>
		</tr>
		<tr>
			<td>Pengarang</td>
		</tr>
		<tr>
			<td><input type="text" placeholder="Masukkan Pengarang" name="pengarang" required></td>
		</tr>
		<tr>
			<td>Tahun Terbit</td>
		</tr>
		<tr>
			<td><input type="number" placeholder="Masukkan Thn Terbit" name="tahun" required></td>
		</tr>

		<tr>
			<td>Genre</td>
		</tr>
		<tr>
			<td> <select name="genre">
    				<option value="ilmiah">ILMIAH</option>
   				    <option value="anak-anak">ANAK-ANAK</option>
   				    <option value="edukatif">EDUKATIF</option>
   				    <option value="fiksi">FIKSI</option>
   				    <option value="novel">NOVEL</option>
   				 
  				</select></td>
		</tr>

		<tr>
			<td>Buku Fisik</td>
		</tr>
		<tr>
			<td> <input type="radio" name="fisik" value="tersedia" checked> Tersedia<br>
  				 <input type="radio" name="fisik" value="tidak tersedia"> tidak tersedia<br></td>
		</tr>


		<tr>
			<td>Stok</td>
		</tr>

		<tr>
			<td><input type="number" placeholder="Masukkan Stok Buku" name="stok" required></td>
		</tr>

		<tr>
			<td>Lokasi Buku Fisik</td>
		</tr>
		<tr>
			<td><input type="lokasi" placeholder="Masukkan Lokasi Buku" name="lokasi"></td>
		</tr>


		<tr>
			<td>Deskripsi</td>
		</tr>
		<tr>
			<td><textarea cols="90" rows="10" placeholder="Masukkan Deskripsi Buku" name="deskripsi" required></textarea></td>
		</tr>

		<tr>
			<td>Upload Foto Buku</td>
		</tr>
		<tr>
			<td><input style="margin-top: 10px;" type="file" name="foto" required></td>
		</tr>
		<tr>
			<td>Upload Buku</td>
		</tr>
		<tr>
			<td><input style="margin-top: 10px;" type="file" name="file"></td>
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

<script src="javascript.js"></script>

</body>
</html>