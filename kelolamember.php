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
	<title>Kelola Member</title>
	<link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Yatra+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poor+Story" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="image/gif/png" href="logo4.png">
	<style>
	table{
    	font-family: 'Yatra One';
    	border-collapse: collapse;
	}

	td, th{
    	border: 1px solid #dddddd;
    	text-align: left;
    	padding: 8px;
	}
						.page-button{
		font-family: 'Yatra One';
		font-size:230%;
		position: relative;
		background-color: rgb(250,250,250);
		border-radius: 20px;
		top:50px;
		left:0px;
		padding-left:10px;
		padding-right:10px;
		color:rgb(50,50,100);
		text-decoration: none;
		transition: color 0.2s, font-size 0.2s;
	}

	.page-button:hover{
		color:rgb(255,100,100);
		text-decoration: none;
	}

</style>
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

</div >
<!-- End of Header -->

<div class="header-gap">
	<img class="header-gap-white" src="white.jpg">

<br><br><br><br><br>
<div >
<h2 align="center">Data member</h2>

<div class="daftar-table">
<form style="margin-left:500px; width:25%;" action="" method="post">
	<input style="text-align: center;"  type="text" name="keyword" size="30" placeholder="Masukkan Nama User">
	<button style="width:30%;" type="submit" name="cari">Cari</button>
</form>
</div>

<table width="70%" border="1" cellpadding="10" cellspacing="0" align="center">
	<tr align="center" bgcolor="springgreen">
		<td>Id</td>
		<td>Nama</td>
		<td>Alamat</td>
		<td>Pekerjaan</td>
		<td>E-Mail</td>
		<td>Kelahiran</td>
		<td>No.Hp</td>
		<td>Password</td>
		<td>Foto</td>
		<td>Hapus</td>
	</tr>

	<?php 

		//pagination
		 $perhalaman=5;
		 $cada=mysqli_query($conn,"SELECT * FROM user");
		 $jumlahdata=mysqli_num_rows($cada);
		 $banyakhalaman=ceil($jumlahdata/$perhalaman);
		 $halamanaktif= (isset($_GET["halaman"])) ? $_GET["halaman"] : 1 ;

		 $awal=($perhalaman * $halamanaktif)-$perhalaman;



		$datanya = "SELECT * FROM user LIMIT $awal, $perhalaman";
		if(isset($_POST['cari'])){
  			$nama = $_POST['keyword'];
  			$datanya = "SELECT * FROM user WHERE nama like '%$nama%'";
  		}
		$query = mysqli_query($conn, $datanya);
		while ($data = mysqli_fetch_assoc($query)){

	 ?>

	<tr align="center">
		<td><?php echo $data['id']; ?></td>
		<td><?php echo $data['nama']; ?></td>
		<td><?php echo $data['alamat']; ?></td>
		<td><?php echo $data['pekerjaan']; ?></td>
		<td><?php echo $data['email']; ?></td>
		<td><?php echo $data['kelahiran']; ?></td>
		<td><?php echo $data['nohp']; ?></td>
		<td><?php echo $data['password']; ?></td>
		<td align="center"> <img src="proses/images/<?php echo $data['foto']; ?>" width="120" heigth="160"></td>
		<td><a href="Tindakan/hapusmember.php?id=<?php echo $data['id']; ?>"><img style="width:38px; height:38px;" src="Buttons/delete.png"></a></td>
	</tr>

<?php } ?>

</table>
</div>
	<?php  for($a=1; $a<=$banyakhalaman; $a++) { ?>
		<?php  if($a== $halamanaktif) : ?>
			<a class="page-button" href="?halaman=<?= $a; ?>" style="font-weight:bold; color:rgb(60, 143, 41);"><u> <?= $a ?></u></a>
		<?php  else : ?>
			<a class="page-button" href="?halaman=<?= $a; ?>"> <?= $a?></a>
		<?php endif; ?>
	<?php } ?>

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