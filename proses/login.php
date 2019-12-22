<?php 
include '../koneksi/koneksi.php';

	if(isset($_POST['login'])){

		$email=$_POST['email'];
		$password=$_POST['psw'];

		$data = "SELECT * FROM user WHERE email='$email'";
		$data2= "SELECT * FROM user WHERE password='$password'";
		$query = mysqli_query($conn, $data);
		$query2 = mysqli_query($conn, $data2);

		if(mysqli_num_rows($query)>0 && mysqli_num_rows($query2)>0){
				
						session_start();
						$_SESSION['user'] = $email;
							
						header('Location: ../index.php');
						
			} echo'<script>
					alert("E-mail dan Password yang dimasukkan tidak sesuai");
					</script>';
					//header("Location: ../indexlogin.php");


		}

	


 ?>