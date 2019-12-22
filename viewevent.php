<?php 
 include 'koneksi/koneksi.php';
  $id = $_GET['id'];


  $query = mysqli_query($conn, "SELECT * FROM event WHERE id = $id");
  $data = mysqli_fetch_assoc($query);
 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>View Event</title>
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
			<li><a href="index.html"><b>BERANDA</b></a></li>
			<div class="dropdown">
			<li onclick="myFunction()" class="dropbtn">GENRE</li>
				<div id="myDropdown" class="dropdown-content">
					<a href="">ILMIAH</a>
					<a href="">ANAK-ANAK</a>
					<a href="">EDUKATIF</a>
					<a href="">FIKSI</a>
				</div>
			</div>
			<li><a href=""><b>EVENTS</b></a></li>
			<li><a href="about.html"><b>TENTANG</b></a></li>
		</ul>
	</div>

	<div class="bot-head"></div>

</div>
<!-- End of Header -->

<div class="header-gap">
	<img style="margin-top:-150px; margin-bottom: 20px;" class="header-gap-white" src="white.jpg">
</div>

<!-- Start of Slideshow -->

<!-- End of Slideshow -->

<!-- Start of buku baru -->
br><br><br><br><br>
<div>
	<table border="1" width="80%" align="center">
		<tr>
			<td rowspan="4">
				<a href="proses/poster/<?php echo $data['poster']; ?>"><img src="proses/poster/<?php echo $data['poster']; ?>" width="240" heigth="320"></a>	
			</td>
			<td>	<?php echo $data['nama']; ?> </td>

		</tr>
		<tr>
				
			<td>	<?php echo $data['hari_tgl']; ?> </td>
		</tr>
		<tr>	
			<td>	<?php echo $data['lokasi']; ?> </td>
		</tr>
		<tr>	
				<td> <?php echo $data['jumlah_peserta']; ?>	</td>
		</tr>
		<tr>	
			<td colspan="2"><?php echo $data['deskripsi']; ?>	</td>
		</tr>

		
	</table>

</div>

<!-- End of buku baru -->
<br><br><br><br><br>
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


</div>
	
<!--Start of login form-->
<div id="id01" class="modal">
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img style="width:300px; height:300px;" src="logo.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="email"><b>E-mail</b></label>
      <input type="text" placeholder="Masukkan E-mail" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Masukkan Password" name="psw" required>
        
      <button class="login-button" type="submit">Login</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>
<!--End of login form-->

<!--Start of book popup form-->



	 

<!--End of book popup-->

<script src="javascript.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3uOVuOdhHftqMZOyIjr2_8sq2ZwoyizA&callback=myMap"></script>
</body>
</html>