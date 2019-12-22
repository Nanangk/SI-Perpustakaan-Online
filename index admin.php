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
	<title>Perpustakaanku</title>
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
			<li><a href="peminjaman.php"><b>PEMINJAMAN</b></a></li>
		</ul>
	</div>

	<div class="bot-head"></div>

</div>
<!-- End of Header -->

<div class="header-gap">
	<img class="header-gap-white" src="white.jpg">
</div>

<!-- Start of Slideshow -->
<div class="slideshow-container">
	<div class="mySlides fade">
   		<img class="slide-img" src="img4-3.jpg" style="width:100%">
   		<!--div class="text">Caption Text</div-->
  </div>

  <div class="mySlides fade">
    <img class="slide-img" src="img2-5.jpg" style="width:100%">
    <!--div class="text">Caption Two</div-->
  </div>

  <div class="mySlides fade">
    <img style="width:99.99%" class="slide-img" src="img8-6.jpg">
    <!--div class="text">Caption Three</div-->
  </div>
  <br> <br>
  <!-- The dots/circles -->
<div class="slide-button" style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
</div>
<!-- End of Slideshow -->

<div class="event-home">
	<p style="color:rgb(0, 66, 54);"><i>Events</i></p>
	<div class="gap2"></div>
       <?php 

			$datanya = "SELECT * FROM event ORDER BY id DESC LIMIT 2";
			$query = mysqli_query($conn, $datanya);
			while ($data = mysqli_fetch_assoc($query)){

        ?>

	<div class="event-content">
		<div class="event-button">
			<p style="color:white"><?php echo $data['hari_tgl']; ?></p>
		</div>
		<div class="event-text">
			<p><?php echo $data['nama']; ?></p>
		</div>
	</div>

		<?php } ?>
</div>
<br><br>
<!-- Start of buku baru -->
<div class="buku-baru-section">
	<div class="judul">
		<div class="judul-teks">
			<p style="text-align:center">Koleksi Buku Baru</p>
		</div>

	<div class="gap"></div>
	</div>

	<?php 

			$datanya = "SELECT * FROM buku ORDER BY id DESC LIMIT 4";
			$query = mysqli_query($conn, $datanya);
			while ($data = mysqli_fetch_assoc($query)){

        ?>
		<div class="buku-home-item">
			<img class="buku-baru" src="proses/sampul/<?php echo $data['foto']; ?>">
		</div>

	<?php } ?>
</div>
<!-- End of buku baru -->

<!--Start of quote-->
<div class="quote">
	<p>"Great books help you understand, and they help you feel understood."</p>
	<p style="text-align: left; margin-left: 23%; font-size:70%;">-John Green</p>
</div>
<!--end of quote-->

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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3uOVuOdhHftqMZOyIjr2_8sq2ZwoyizA&callback=myMap"></script>

</body>
</html>