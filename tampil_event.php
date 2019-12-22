<?php  
 if(isset($_POST["id"]))  
 {       include 'koneksi/koneksi.php'; 
      $output = '';  
     
      $query = "SELECT * FROM event WHERE id = '".$_POST["id"]."'";  
      $datanya = mysqli_query($conn, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered" style="color:black;">';  
      while($data = mysqli_fetch_array($datanya))  
      {  
           $output .= '  
            <tr>
                <td  align="center" width="70%" heigth="50%" rowspan="4">
                  <a href="proses/poster/'.$data["poster"].' "><img src="proses/poster/'.$data['poster'].'" width="240" heigth="320"></a>  
                </td>
                <td>  '.$data['nama'].'</td>

            </tr>

            <tr>
               <td>  '.$data['hari_tgl'].' </td>
            </tr>

            <tr>  
              <td>  '.$data['lokasi'].' </td>
            </tr>

            <tr>  
                <td> '.$data['jumlah_peserta'].' </td>
            </tr>

            <tr>  
              <td colspan="2">'.$data['deskripsi'].' </td>
            </tr>
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
 ?>