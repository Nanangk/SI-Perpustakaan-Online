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
	<title>Kelola Buku</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
	<link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Yatra+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poor+Story" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="gayakhusus.css">
	<link rel="icon" type="image/gif/png" href="logo4.png">
	<style>
	table{
    	font-family: 'Yatra One';
    	border-collapse: collapse;
	}

	td, th{
    	border: 1px solid #dddddd;
    	text-align: center;
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
	<div style="height:60px;" class="top-head">
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
<div class="daftar-table">
<form style="margin-left:500px; width:25%;" action="" method="post">
	<input style="text-align: center;"  type="text" name="keyword" size="30" placeholder="Masukkan Nama Buku">
	<button style="width:30%;" type="submit" name="cari">Cari</button>
</form>
</div>
<div >
<h2 align="center">Data Buku</h2>


<br>
<table width="70%" border="1"  cellpadding="10" cellspacing="0" align="center">
	<tr align="center" bgcolor="springgreen">
		<td >Id</td>
		<td >Buku</td>
		
		<td >Sampul</td>
		<td>E-Book</td>
		<td colspan="3">Tindakan</td>

		
	</tr>

	<?php 

		//pagination
		 $perhalaman=5;
		 $cada=mysqli_query($conn,"SELECT * FROM buku");
		 $jumlahdata=mysqli_num_rows($cada);
		 $banyakhalaman=ceil($jumlahdata/$perhalaman);
		 $halamanaktif= (isset($_GET["halaman"])) ? $_GET["halaman"] : 1 ;

		 $awal=($perhalaman * $halamanaktif)-$perhalaman;



		$datanya = "SELECT * FROM buku LIMIT $awal, $perhalaman";
		if(isset($_POST['cari'])){
  			$nama = $_POST['keyword'];
  			$datanya = "SELECT * FROM buku WHERE judul like '%$nama%'";
  		}

		$query = mysqli_query($conn, $datanya);
		while ($data = mysqli_fetch_assoc($query)){

	 ?>

	<tr align="center">
		<td><?php echo $data['id']; ?></td>
		<td><?php echo $data['judul']; ?></td>
		
		<td align="center"> <a href="proses/sampul/<?php echo $data['foto']; ?>"><img src="proses/sampul/<?php echo $data['foto']; ?>" width="120" heigth="160"></a></td>
		<td align="center"> <a href="proses/ebook/<?php echo $data['ebook']; ?>"><img src="proses/sampul/<?php echo $data['foto']; ?>" width="120" heigth="160"></a></td>
		<td><input type="button" name="view" value="view" id="<?php echo $data["id"]; ?>" class="btn btn-info btn-xs view_data" /></td>
		<td><a href="editbuku.php?id=<?php echo $data['id']; ?>"><img style="width:38px; height:38px;" src="Buttons/pencil2.png"></a></td>
		<td><a href="Tindakan/hapusbuku.php?id=<?php echo $data['id']; ?>"><img style="width:38px; height:38px;" src="Buttons/delete.png"></a></td>

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

<br>
<a href="tambah buku.php">
		<button style="width:20%; height:35px; display:block; margin-left:40%; margin-right:40%;">Tambah Buku</button>
	</a>

<br><br><br><br><br><br><br><br>

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
      		<a href="proses/logout admin.php"><button style="margin-right:30px;" type="button"  class="buku-popup-baca">Ya</button></a>
      		<a href="index admin.php"><button style="background-color:red" type="button"  class="buku-popup-baca">Tidak</button>
      	</div></a>
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
                <div class="modal-body" id="employee_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div> 

 <!--End of Pop up-->

<script>
	/*start of header js*/
window.addEventListener("scroll", function(){

var topNav=document.getElementsByClassName("top-head");
var midNav=document.getElementsByClassName("mid-head");
var drop=document.getElementsByClassName("dropdown-content");

if(pageYOffset>0){
	topNav[0].style.height="0px";
	midNav[0].style.height="40px";
	midNav[0].style.marginTop="0px";
  drop[0].style.top="35px";
}
else{
	topNav[0].style.height="60px";
	midNav[0].style.height="50px";
	midNav[0].style.marginTop="-20px";
  drop[0].style.top="80px";
}

});
/*end of header js*/
</script>

 <script>  
 $(document).ready(function(){  
      $('.view_data').click(function(){  
           var id = $(this).attr("id");  
           $.ajax({  
                url:"tampil_buku.php",  
                method:"post",  
                data:{id:id},  
                success:function(data){  
                     $('#employee_detail').html(data);  
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



 