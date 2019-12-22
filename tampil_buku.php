<?php  
 if(isset($_POST["id"]))  
 {       include 'koneksi/koneksi.php'; 
      $output = '';  
     
      $query = "SELECT * FROM buku WHERE id = '".$_POST["id"]."'";  
      $datanya = mysqli_query($conn, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered" style="color:black;">';  
      while($data = mysqli_fetch_array($datanya))  
      {  
           $output .= '  
            <tr>
                <td  align="center" width="70%" heigth="50%" >
                  <a href="proses/sampul/'.$data["foto"].' "><img src="proses/sampul/'.$data['foto'].'" width="240" heigth="320"></a>  
                </td>
            </tr>
            <tr>
                <td align="center">  '.$data['judul'].'</td>

            </tr>

            <tr>
               <td align="center">  '."Oleh : ".$data['pengarang'].' </td>
            </tr>

            <tr>  
              <td align="center">  '.$data['tahun'].' </td>
            </tr>

            <tr>  
              <td align="center">  '."Genre : ".$data['genre'].' </td>
            </tr>

            <tr>  
                <td align="center"> '."Buku Fisik : ".$data['fisik'].' </td>
            </tr>

            <tr>  
                <td align="center"> '."Stok : ".$data['stok'].' </td>
            </tr>

            <tr>  
                <td align="center"> '."Lokasi : ".$data['lokasi'].' </td>
            </tr>

            <tr>  
              <td>'."Deskripsi :".' </td>
            </tr>

            <tr>  
              <td>'.$data['deskripsi'].' </td>
            </tr>
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
 ?>