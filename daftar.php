

<!DOCTYPE html>
<html>
<head>
	<title>Daftar</title>
	<link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Yatra+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poor+Story" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="image/gif/png" href="logo4.png">
</head>
<body>

	<!-- Start of Header -->
<div class="navi">
	<div class="top-head">
		<ul>
			<li><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">LOGIN</button></li>
			<a href="daftar.html"><li style="border-right: 1px solid white;">DAFTAR</li></a>
		</ul>
	</div>

	<div class="mid-head">
		<ul>
			<li><img style="height:35px; width:35px; margin-right:-100px" src="logo3.jpg"></li>
			<li><img style="width:180px; height:30px; margin-right:-50px; margin-left:-40px; float:right; padding-top:1px;" src="logo2.jpg"></li>
			<li><a href="index.php"><b>BERANDA</b></a></li>
			<div class="dropdown">
			<li onclick="myFunction()" class="dropbtn">GENRE</li>
				<div id="myDropdown" class="dropdown-content">
					<a href="genre ilmiah.php">ILMIAH</a>
					<a href="genre anak-anak.php">ANAK-ANAK</a>
					<a href="genre edukatif.php">EDUKATIF</a>
					<a href="genre fiksi.php">FIKSI</a>
					<a href="genre novel.php">NOVEL</a>
					<a href="genre semua.php">SEMUA</a>
				</div>
			</div>
			<li><a href="event.php"><b>EVENTS</b></a></li>
			<li><a href="about.html"><b>TENTANG</b></a></li>
		</ul>
	</div>

	<div class="bot-head"></div>

</div>
<!-- End of Header -->

<div class="header-gap">
	<img class="header-gap-white" src="white.jpg">
</div>
<img style="width:99.99%;" src="gambar(daftar3)-3.jpg">
<div class="daftar">
	<h2 style="font-family: 'Yatra One'; text-align:center; padding-bottom:10px; font-size:200%;">Pendaftaran</h2>
	<div class="gap2"></div>
	<br>
	<form action="proses/daftaruser.php" enctype="multipart/form-data" method="POST">
	<table class="daftar-table">
		<tr>
			<td style="padding-bottom:10px;"><input type="text" name="nama" placeholder="Masukkan Nama Anda" style="text-align:center;" required></td>
		</tr>

		<tr>
			<td style="padding-bottom:10px;"><input type="text" name="alamat" placeholder="Masukkan Alamat Anda" style="text-align:center" required></td>
		</tr>

		<tr>
			<td style="padding-bottom:10px;"><input type="text" name="pekerjaan" placeholder="Masukkan Pekerjaan Anda" style="text-align:center" required></td>
		</tr>

		<tr>
			<td style="padding-bottom:10px;"><input type="text" name="email" placeholder="Masukkan E-mail Anda" style="text-align:center" required></td>
		</tr>

		<tr>
			<td style="padding-bottom:10px;"><input type="text" name="kelahiran" placeholder="Masukkan Kelahiran Anda" style="text-align:center" required></td>
		</tr>

		<tr>
			<td style="padding-bottom:10px;"><input type="text" name="nohp" placeholder="Masukkan Nomor HP Anda" style="text-align:center" required></td>
		</tr>

		<tr>
			<td style="padding-bottom:10px;"><input type="password" name="password" placeholder="Masukkan Password Anda" style="text-align:center" required></td>
		</tr>

		<tr>
			<td><p>Upload Foto</p></td>
		</tr>

		<tr>
			<td><input style="margin-top: 10px;" type="file" name="foto" required></td>
		</tr>

		<tr>
			<td><input style="margin-top: 10px;" type="submit" name="submit" value="Daftar"></td>
		</tr>
		
	</table>
	</form>
</div>

<br><br><br><br><br><br><br>

<div class="footer-container">
	<div class="footer-info">
		<div class="footer-alamat">
			<p><b>Perpustakaanku</b></p><br>
			<p>Jln. Homina</p>
			<p>Hippity Hoppity</p><br>
			<p>Telepon: 740-852-9543</p>
		</div>
		<div class="footer-jadwal">
			<p style="font-size:120%;"><b>Jadwal Perpustakaan</b></p><br>
			<p><b>Senin-Kamis:</b>&nbsp;09:00-20:30 Wita</p>
			<p><b>Jum'at:</b>&nbsp;09:00-18:00 Wita</p>
			<p><b>Sabtu:</b>&nbsp;10:00-17:00 Wita</p>
			<p><b>Minggu:</b>&nbsp;10:00-16:00 Wita</p>
			
		</div>
		<div id="google-map"></div>
					<div class="social-media-buttons">
				<a href=""><img class="button-item" src="facebook_button.png"></a>
				<a href=""><img class="button-item" src="ig2_button.png"></a>
				<a href=""><img class="button-item" src="twitter_button.png"></a>
				<a href=""><img class="button-item" src="google_button.png"></a>
				<a href=""><img class="button-item" src="pin_button.png"></a>
			</div>
	</div>
	
	<footer>
		<p class="footer-text">&copy; 2018 Perpustakaanku</p>
	</footer>
</div>
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
      		<button style="margin-right:30px;" type="button" onclick="document.getElementById('id02').style.display='none'" class="buku-popup-baca">Ya</button>
      		<button style="background-color:red" type="button" onclick="document.getElementById('id02').style.display='none'" class="buku-popup-baca">Tidak</button>
      	</div>
    </div>
  </form>
</div>
<!--End of logout form-->

<script src="javascript.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3uOVuOdhHftqMZOyIjr2_8sq2ZwoyizA&callback=myMap"></script>
</body>
</html>