 <?php  include 'koneksi/koneksi.php'; 
 		session_start();
 		$user=$_SESSION['user']; 
 		if($user=="" || $user==" "){
 			header("Location: indexlogin.php");

 		}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Dan Lain-lain</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
	<link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Yatra+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poor+Story" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="gayakhusus.css">
	<link rel="icon" type="image/gif/png" href="logo4.png">
</head>
<body>

	<!-- Start of Header -->
<div class="navi">
	<div style="height:60px;" class="top-head">
		<ul style="margin-top:10px;">
			<li><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">LOGOUT</button></li>
			<?php $datanya = "SELECT * FROM user WHERE email='$user'";
			$query = mysqli_query($conn, $datanya); 
			$data = mysqli_fetch_assoc($query);?>
			<a href="profil.php"><li style="border-right: 1px solid white;"><?php echo $data['nama']; ?></li></a>
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

</div >
<!-- End of Header -->

<div class="header-gap">
	<img class="header-gap-white" src="white.jpg">

<br><br><br><br><br>
<br><br><br><br>
<div class="daftar-table">
<form style="margin-left:500px; width:20%;" action="" method="post">
	<input style="text-align: center;"  type="text" name="keyword" size="30" placeholder="Masukkan Nama Buku">
	<button style="width:30%;" type="submit" name="cari">Cari</button>
</form>
</div>

<div class="buku-koleksi-section">
	<div class="judul-buku">
		<div class="judul-koleksi">
			<p style="text-align: left;">Event</p>
		</div>
		
		<table align="center">
		<?php 

		//pagination
		 $perhalaman=8;
		 $cada=mysqli_query($conn,"SELECT * FROM buku");
		 $jumlahdata=mysqli_num_rows($cada);
		 $banyakhalaman=ceil($jumlahdata/$perhalaman);
		 $halamanaktif= (isset($_GET["halaman"])) ? $_GET["halaman"] : 1 ;

		 $awal=($perhalaman * $halamanaktif)-$perhalaman;



		

		

		$datanya = "SELECT * FROM buku WHERE genre='dll' ORDER BY id DESC LIMIT $awal, $perhalaman";
		if(isset($_POST['cari'])){
  			$nama = $_POST['keyword'];
  			$datanya = "SELECT * FROM buku WHERE judul like '%$nama%' AND genre='dll'";
  		}
  		$perbaris=4;
  		$i=0;

		$query = mysqli_query($conn, $datanya);
		while ($data = mysqli_fetch_assoc($query)){

	 ?>

	<div class="gap3"></div>
	</div>
	<div class="buku-koleksi">
		<div class="buku-item">


			<?php if($i++ % $perbaris==0){
				echo'<tr>';
			}
			?>
				<td>
					
				<img class="buku-baru" src="proses/sampul/<?php echo $data['foto']; ?>" width="120" heigth="160"  class="btn btn-info btn-xs view_data" >
      			
				
				
				<p class="buku-judul"> <?php echo $data['judul']; ?> </p>
				<input type="button" name="view" value="view" id="<?php echo $data["id"]; ?>" class="btn btn-info btn-xs view_data" />
				</td>
			<?php if($i % $perbaris==0){
				echo'<tr>';

				echo'<tr>';
				echo'<td>';
				echo'<br>';
				echo'<br>';
				echo'<br>';
				echo'<br>';
				echo'</td>';


				echo'</tr>';



			}
			?>
			
		</div>

		
	</div> <?php } ?>
	</table>
	<br><br><br>

	<?php  for($a=1; $a<=$banyakhalaman; $a++) { ?>
		<?php  if($a== $halamanaktif) : ?>
			<a href="?halaman=<?= $a; ?>" style="font-weight:bold; color:red;"> <?= $a ?></a>
		<?php  else : ?>
			<a href="?halaman=<?= $a; ?>"> <?= $a?></a>
		<?php endif; ?>
	<?php } ?>

		

</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div style="font-size:110%;" class="footer-container">
	<div class="footer-info">
		<div style="line-height: 20px;" class="footer-alamat">
			<p><b>Perpustakaanku</b></p><br>
			<p>Jln. Homina</p>
			<p>Hippity Hoppity</p><br>
			<p>Telepon: 740-852-9543</p>
		</div>
		<div style="line-height: 15px;" class="footer-jadwal">
			<p style="font-size:120%;"><b>Jadwal Perpustakaan</b></p><br>
			<p><b>Senin-Kamis:</b>&nbsp;09:00-20:30 Wita</p>
			<p><b>Jum'at:</b>&nbsp;09:00-18:00 Wita</p>
			<p><b>Sabtu:</b>&nbsp;10:00-17:00 Wita</p>
			<p><b>Minggu:</b>&nbsp;10:00-16:00 Wita</p>
			
		</div>
		<div id="google-map"></div>
		<div style="margin-top: 30px;" class="social-media-buttons">
				<a href=""><img class="button-item" src="facebook_button.png"></a>
				<a href=""><img class="button-item" src="ig2_button.png"></a>
				<a href=""><img class="button-item" src="twitter_button.png"></a>
				<a href=""><img class="button-item" src="google_button.png"></a>
				<a href=""><img class="button-item" src="pin_button.png"></a>
		</div>
	</div>
	
	<footer>
		<p style="font-size: 100%; margin-bottom: -25px;" class="footer-text">&copy; 2018 Perpustakaanku</p>
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
      		<a href="proses/logout.php"><button style="margin-right:30px;" type="button"  class="buku-popup-baca">Ya</button></a>
      		<a href="genre dan lain-lain.php"><button style="background-color:red" type="button"  class="buku-popup-baca">Tidak</button>
      	</div>
    </div>
  </form>
</div>
<!--End of logout form-->


<!--Start of Pop up-->

<div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Detail Buku</h4>  
                </div>  
                <div class="modal-body" id="detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div> 
 

 <!--End of Pop up-->

 <script>  
 $(document).ready(function(){  
      $('.view_data').click(function(){  
           var id = $(this).attr("id");  
           $.ajax({  
                url:"tampil_buku_user.php",  
                method:"post",  
                data:{id:id},  
                success:function(data){  
                     $('#detail').html(data);  
                     $('#dataModal').modal("show");  
                }  
           });  
      });  
 });  
 </script> 

<script src="javascript2.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3uOVuOdhHftqMZOyIjr2_8sq2ZwoyizA&callback=myMap"></script>
</body>
</html>



 